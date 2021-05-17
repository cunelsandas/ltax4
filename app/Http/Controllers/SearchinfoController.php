<?php

namespace App\Http\Controllers;

use App\Models\Land;
use App\Models\Owners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Notes;
use App\Models\Status;

class SearchinfoController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $getData1 = Owners::all();
//        foreach ($getData1 as $gd1) {
//
//        }
        $getData = DB::table('owner')->paginate( 30 );
        return view('dashboard.searchinfos.searchinfosList',['getData'=>$getData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Status::all();
        return view('dashboard.paytaxs.create', [ 'statuses' => $statuses ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'             => 'required|min:1|max:64',
            'content'           => 'required',
            'status_id'         => 'required',
            'applies_to_date'   => 'required|date_format:Y-m-d',
            'note_type'         => 'required'
        ]);
        $user = auth()->user();
        $note = new Notes();
        $note->title     = $request->input('title');
        $note->content   = $request->input('content');
        $note->status_id = $request->input('status_id');
        $note->note_type = $request->input('note_type');
        $note->applies_to_date = $request->input('applies_to_date');
        $note->users_id = $user->id;
        $note->save();
        $request->session()->flash('message', 'Successfully created note');
        return redirect()->route('paytaxs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Notes::with('user')->with('status')->find($id);
        return view('dashboard.paytaxs.noteShow', [ 'note' => $note ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getData = Owners::find($id);
        $ownerData = DB::table('ltax_owner')->where('owner_id','=', $getData->owner_id)->first();
        $titleData = DB::table('title_code')->where('ot_id','=', $ownerData->title)->first();
        $tambonData = DB::table('sys_tambon')->where('tambon_id','=', $ownerData->tambon_id)->first();
        $amphoeData = DB::table('sys_amphoe')->where('amphoe_id','=', $ownerData->amphoe_id)->first();
        $provinceData = DB::table('sys_province')->where('province_id','=', $ownerData->province_id)->first();
        $statuses = Status::all();


        $getLandData = DB::table('ltax_land')->where('owner_id','=', $getData->owner_id)->orderBy('annual','desc')->first();
        if(isset($getLandData)) {
            $getLandtypeData = DB::table('l_type')->where('ldoc_type', '=', $getLandData->ldoc_type)->first();
            $getUserData = DB::table('user_table')->where('uid', '=', $getLandData->uid)->first();
        }
        else {
            $getLandtypeData = '';
            $getUserData = '';
        }

        $getBuildData = DB::table('ltax_building')->where('owner_id','=', $getData->owner_id)->orderBy('annual','desc')->first();
        if(isset($getBuildData)) {
            $getBuildtypeData = DB::table('ltax_b_type')->where('bt_id', '=', $getBuildData->bt_id)->first();
            $getBuildmatData = DB::table('ltax_b_mat')->where('bm_id', '=', $getBuildData->bm_id)->first();
            $getUserbData = DB::table('user_table')->where('uid', '=', $getBuildData->uid)->first();

        }
        else {
            $getBuildtypeData = '';
            $getBuildmatData = '';
            $getUserbData = '';
        }

        $getSignData10 = DB::table('ltax_sign_board')->where('owner_id','=', $getData->owner_id)->orderBy('s_id','desc')->get()->unique('s_name')->toArray();
        $getSignData = DB::table('ltax_sign_board')->where('owner_id','=', $getData->owner_id)->orderBy('annual','desc')->first();
        if(isset($getSignData)) {
            $holderProvince = DB::table('sys_province')->where('province_id', '=', $ownerData->province_id)->first();
            $holderAmphoe = DB::table('sys_amphoe')->where('amphoe_id', '=', $ownerData->amphoe_id)->first();
            $holderTambon = DB::table('sys_tambon')->where('tambon_id', '=', $ownerData->tambon_id)->first();

            $getSignType = DB::table('sign_type')->where('sign_type_id', '=', $getSignData->sign_type_id)->first();

        }
        else {
            $holderProvince = '';
            $holderAmphoe = '';
            $holderTambon = '';
            $getSignType ='';
        }

        $getdateland = DB::table('img_paytax_land')->where('owner_id','=', $getData->owner_id)->first();
        $getdatebuild = DB::table('img_paytax_build')->where('owner_id','=', $getData->owner_id)->first();
        $getdatesign = DB::table('img_paytax_sign')->where('owner_id','=', $getData->owner_id)->first();

        return view('dashboard.paytaxs.edit', [ 'statuses' => $statuses, 'getData' => $getData ,'ownerData'=>$ownerData,'titleData'=>$titleData,'tambonData'=>$tambonData,
            'amphoeData'=>$amphoeData,'provinceData'=>$provinceData,'getLandData'=>$getLandData,'getLandtypeData'=>$getLandtypeData,'getUserData'=>$getUserData,'getBuildData'=>$getBuildData,'getBuildtypeData'=>$getBuildtypeData,
            'getBuildmatData'=>$getBuildmatData,'getUserbData'=>$getUserbData,'getSignData'=>$getSignData,'holderProvince'=>$holderProvince,'holderAmphoe'=>$holderAmphoe,'holderTambon'=>$holderTambon,
            'getSignType'=>$getSignType,'getSignData10'=>$getSignData10,'getdateland'=>$getdateland,'getdatebuild'=>$getdatebuild,'getdatesign'=>$getdatesign]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //var_dump('bazinga');
        //die();
        $validatedData = $request->validate([
            'title'             => 'required|min:1|max:64',
            'content'           => 'required',
            'status_id'         => 'required',
            'applies_to_date'   => 'required|date_format:Y-m-d',
            'note_type'         => 'required'
        ]);
        $note = Notes::find($id);
        $note->title     = $request->input('title');
        $note->content   = $request->input('content');
        $note->status_id = $request->input('status_id');
        $note->note_type = $request->input('note_type');
        $note->applies_to_date = $request->input('applies_to_date');
        $note->save();
        $request->session()->flash('message', 'Successfully edited note');
        return redirect()->route('paytaxs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Notes::find($id);
        if($note){
            $note->delete();
        }
        return redirect()->route('paytaxs.index');
    }
}
