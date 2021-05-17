<?php

namespace App\Http\Controllers;

use App\Models\Land;
use App\Models\Owners;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Notes;
use App\Models\Status;
use function Couchbase\defaultDecoder;
use function PHPUnit\Framework\isNull;

class PaytaxsController extends Controller
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
//        $getData = DB::table('ltax_owner')->join('ltax_land','ltax_land.owner_id','=','ltax_owner.owner_id')
//            ->join('ltax_building','ltax_building.owner_id','=','ltax_owner.owner_id')
//            ->join('ltax_sign_board','ltax_sign_board.owner_id','=','ltax_owner.owner_id')
//            ->where('ltax_land.annual','=',2563)
//            ->where('ltax_building.annual','=',2563)
//            ->where('ltax_sign_board.annual','=',2563)
//            ->paginate( 100 );
        $yearNow = Carbon::now()->year + 543 - 1;
        $getData = DB::table('owner')->paginate(100);

        $getstatuspayland = DB::table('payment_pds')->join('owner', 'payment_pds.owner_id', '=', 'owner.owner_id')
            ->get();

        $getstatuspaybuild = DB::table('payment_pds')->join('owner', 'payment_pds.owner_id', '=', 'owner.owner_id')
            ->get();


        $getstatuspaysign = DB::table('payment_pds')->join('owner', 'payment_pds.owner_id', '=', 'owner.owner_id')
            ->get();


        return view('dashboard.paytaxs.paytaxsList', ['getData' => $getData, 'getstatuspayland' => $getstatuspayland,
            'getstatuspaybuild' => $getstatuspaybuild, 'getstatuspaysign' => $getstatuspaysign]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Status::all();
        return view('dashboard.paytaxs.create', ['statuses' => $statuses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:1|max:64',
            'content' => 'required',
            'status_id' => 'required',
            'applies_to_date' => 'required|date_format:Y-m-d',
            'note_type' => 'required'
        ]);
        $user = auth()->user();
        $note = new Notes();
        $note->title = $request->input('title');
        $note->content = $request->input('content');
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Notes::with('user')->with('status')->find($id);
        return view('dashboard.paytaxs.noteShow', ['note' => $note]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ownerData = Owners::find($id);
        $getOwnerData = DB::table('owner')->where('owner_id', '=', $id)->first();
        $getFromPDS3 = DB::table('pds3')->where('l_owner_id', '=', $id)->orderBy('id', 'desc')->get();
        $getBuildingJoinPDS3 = DB::table('building')->join('pds3', 'pds3.bid', '=', 'building.bid')->where('oid', '=', $id)->get();

        $getCondoPDS4 = DB::table('pds4')->where('owner_id','=',$id)->get();



        $getDistrict = DB::table('districts')->where('district_code', '=', $getOwnerData->tambon_id)->first();
        $statuses = Status::all();

        $getSignData10 = DB::table('signboard')->where('owner_id', '=', $getOwnerData->owner_id)->orderBy('id', 'desc')->get()->unique('s_name');
        $getSignData = DB::table('signboard')->where('owner_id', '=', $getOwnerData->owner_id)->orderBy('annual', 'desc')->first();
        $getSignType = DB::table('signboard_config')->where('sign_type', '=', 'sign_type_id')->first();

        $getdateland = DB::table('img_paytax_land')->where('owner_id', '=', $getOwnerData->owner_id)->first();
        $getdatebuild = DB::table('img_paytax_build')->where('owner_id', '=', $getOwnerData->owner_id)->first();

        $getdatebuild = DB::table('img_paytax_condo')->where('owner_id', '=', $getOwnerData->owner_id)->first();

        $getdatesign = DB::table('img_paytax_sign')->where('owner_id', '=', $getOwnerData->owner_id)->first();


        //  dd($getData);


//        $getstatuspayland = DB::table('pay_land')->join('owner','pay_land.owner_id','=','owner.owner_id')
//            ->where('pay_land.tax_year','=',$yearNow)->where('pay_land.owner_id','=', $getData->owner_id)->first();
//
//
//        $getstatuspaybuild = DB::table('pay_building')->join('owner','pay_building.owner_id','=','owner.owner_id')
//            ->where('pay_building.tax_year','=',$yearNow)->where('pay_building.owner_id','=', $getData->owner_id)->first();
//
//        $getstatuspaysign = DB::table('pay_sign')->join('owner','pay_sign.owner_id','=','owner.owner_id')
//            ->where('pay_sign.tax_year','=',$yearNow)->where('pay_sign.owner_id','=', $getData->owner_id)->first();

        $getstatuspayland = DB::table('payment_pds')->join('owner', 'payment_pds.owner_id', '=', 'owner.owner_id')
            ->get();
        $getstatuspaybuild = DB::table('payment_pds')->join('owner', 'payment_pds.owner_id', '=', 'owner.owner_id')
            ->get();
        $getstatuspaysign = DB::table('payment_pds')->join('owner', 'payment_pds.owner_id', '=', 'owner.owner_id')
            ->get();

        return view('dashboard.paytaxs.edit', ['statuses' => $statuses, 'getOwnerData' => $getOwnerData, 'getDistrict' => $getDistrict, 'getSignData' => $getSignData,
            'getSignType' => $getSignType, 'getSignData10' => $getSignData10, 'getdateland' => $getdateland, 'getdatebuild' => $getdatebuild, 'getdatesign' => $getdatesign,
            'getstatuspayland' => $getstatuspayland, 'getstatuspaybuild' => $getstatuspaybuild, 'getstatuspaysign' => $getstatuspaysign,
            'getFromPDS3' => $getFromPDS3, 'getBuildingJoinPDS3' => $getBuildingJoinPDS3,'ownerData'=>$ownerData,'getCondoPDS4'=>$getCondoPDS4]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //var_dump('bazinga');
        //die();
        $validatedData = $request->validate([
            'title' => 'required|min:1|max:64',
            'content' => 'required',
            'status_id' => 'required',
            'applies_to_date' => 'required|date_format:Y-m-d',
            'note_type' => 'required'
        ]);
        $note = Notes::find($id);
        $note->title = $request->input('title');
        $note->content = $request->input('content');
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Notes::find($id);
        if ($note) {
            $note->delete();
        }
        return redirect()->route('paytaxs.index');
    }
}
