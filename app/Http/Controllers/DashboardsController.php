<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Notes;
use App\Models\Status;

class DashboardsController extends Controller
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
        $notes = Notes::with('user')->with('status')->paginate( 20 );
        $yearNow = Carbon::now()->year+543;
//
        $ownerData = DB::table('owner')->get();

        //count type
        $ownerDataType1 = DB::table('owner')->where('o_type','=',1)->count(); //บุคคลธรรมดา
        $ownerDataType2 = DB::table('owner')->where('o_type','=',2)->count(); //นิติบุคคล
        $ownerDataType3 = DB::table('owner')->where('o_type','=',3)->count(); //รัฐวิสาหกิจ
        $ownerDataType4 = DB::table('owner')->where('o_type','=',4)->count(); //ราชการ
        $ownerDataType5 = DB::table('owner')->where('o_type','=',5)->count(); //สมาคม
        $ownerDataType6 = DB::table('owner')->where('o_type','=',6)->count(); //มูลนิธิ
        $ownerDataType7 = DB::table('owner')->where('o_type','=',7)->count(); //วัด/ศาสนา
        $ownerDataType8 = DB::table('owner')->where('o_type','=',8)->count(); // อื่นๆ


        //count land
        $landDataCount = DB::table('land')->where('annual' ,'=',$yearNow)->count();
        $landDataMustPay = DB::table('pds3')->where('total_tax','!=',0)->where('total_tax','!=',null)->count();
        $landDataNotPay = $landDataCount - $landDataMustPay;
        $landDataGroup = DB::table('land_owner')->groupBy('owner_id')->get()->count();

        //count building
        $buildDataCount = DB::table('building')->where('annual' ,'=',$yearNow)->count();
        //count condo
        $condoDataCount = DB::table('cd_room')->where('annual' ,'=',$yearNow)->count();
        $condoOwnerDataCount = DB::table('pds4')->where('annual' ,'=',$yearNow)->groupBy('owner_id')->get()->count();

        //count signboard
        $signDataCount = DB::table('signboard')->where('annual' ,'=',$yearNow)->count();
        $signDataMustPay = DB::table('signboard')->where('tax','!=',0)->count();
        $signDataNotPay = $signDataCount - $signDataMustPay;
        $signDataGroup = DB::table('signboard')->groupBy('owner_id')->get()->count();

        //sum can keep tax
        $sumappland = $landDataMustPay;
        $sumappcondo = DB::table('pds4')->where('total_tax','!=',0)->count();
        $sumappsign = $signDataMustPay;


        $sumlandtax = DB::table('pds3')->sum('total_tax');  //sum land and building
        $sumcondotax = DB::table('pds4')->sum('total_tax');
        $sumsigntax = DB::table('signboard')->sum('tax');

        $landData = DB::table('land')->where('annual' ,'=',$yearNow)->get();
        $buildData = DB::table('building')->where('annual' ,'=',$yearNow)->get();
        $signData = DB::table('signboard')->where('annual' ,'=',$yearNow)->get();

        $sevenDayAgo = Carbon::now()->subDay(7)->toDateString();
        $nowDay = Carbon::now()->toDateString();

        $sumlandbuildtax = DB::table('pds3')->sum('total_tax');

        //count 7 DAYS
        $paylandcount7day = DB::table('img_paytax_land')->whereBetween('upload_date',[$sevenDayAgo,$nowDay])->count();
        $paybuildcount7day = DB::table('img_paytax_build')->whereBetween('upload_date',[$sevenDayAgo,$nowDay])->count();
        $paysigncount7day = DB::table('img_paytax_sign')->whereBetween('upload_date',[$sevenDayAgo,$nowDay])->count();


        $paytaxcountall7day = $paylandcount7day+$paybuildcount7day+$paysigncount7day;

        $paylandin = DB::table('img_paytax_land')
            ->join('owner','img_paytax_land.owner_id','=','owner.owner_id')
            ->whereBetween('upload_date',[$sevenDayAgo,$nowDay])->get();
        $paybuildin = DB::table('img_paytax_build')
            ->join('owner','img_paytax_build.owner_id','=','owner.owner_id')
            ->whereBetween('upload_date',[$sevenDayAgo,$nowDay])->get();
        $paysignin = DB::table('img_paytax_sign')
            ->join('owner','img_paytax_sign.owner_id','=','owner.owner_id')
            ->whereBetween('upload_date',[$sevenDayAgo,$nowDay])->get();

         //dd($paylandin);


        return view('dashboardtax.dashboard', ['notes' => $notes, 'ownerData'=>$ownerData ,'landData'=>$landData ,'buildData'=>$buildData ,
            'signData'=>$signData,'sevenDayAgo'=>$sevenDayAgo,'nowDay'=>$nowDay,
            'yearNow'=>$yearNow,
            'ownerDataType1'=>$ownerDataType1,'ownerDataType2'=>$ownerDataType2,'ownerDataType3'=>$ownerDataType3,'ownerDataType4'=>$ownerDataType4,'ownerDataType5'=>$ownerDataType5,'ownerDataType6'=>$ownerDataType6,'ownerDataType7'=>$ownerDataType7,'ownerDataType8'=>$ownerDataType8,
            'landDataCount'=>$landDataCount,
            'sumlandbuildtax'=>$sumlandbuildtax,'landDataMustPay'=>$landDataMustPay,'landDataNotPay'=>$landDataNotPay,
            'landDataGroup'=>$landDataGroup,'buildDataCount'=>$buildDataCount,'condoDataCount'=>$condoDataCount,
            'signDataCount'=>$signDataCount,'signDataMustPay'=>$signDataMustPay,'signDataNotPay'=>$signDataNotPay,'signDataGroup'=>$signDataGroup,
            'sumappland'=>$sumappland,'sumlandtax'=>$sumlandtax,'sumcondotax'=>$sumcondotax,'sumsigntax'=>$sumsigntax,'sumappsign'=>$sumappsign,
            'sumappcondo'=>$sumappcondo,'condoOwnerDataCount'=>$condoOwnerDataCount,
            'paytaxcountall7day'=>$paytaxcountall7day,'paylandcount7day'=>$paylandcount7day,'paybuildcount7day'=>$paybuildcount7day,'paysigncount7day'=>$paysigncount7day,
            'paylandin'=>$paylandin,'paybuildin'=>$paybuildin,'paysignin'=>$paysignin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexlandpay()
    {
        $namepayland = DB::table('ltax_land')->join('ltax_owner','ltax_owner.owner_id','=','ltax_land.owner_id')->where('annual' ,'=',$yearNow)->where('tax','!=',0)->paginate(50);
        return view('dashboardtax.namepaylandList.pds1List', ['namepayland' => $namepayland]);
    }

    public function create()
    {
        $statuses = Status::all();
        return view('dashboard.notes.create', [ 'statuses' => $statuses ]);
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
        return redirect()->route('notes.index');
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
        return view('dashboard.notes.noteShow', [ 'note' => $note ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Notes::find($id);
        $statuses = Status::all();
        return view('dashboard.notes.edit', [ 'statuses' => $statuses, 'note' => $note ]);
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
        return redirect()->route('notes.index');
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
        return redirect()->route('notes.index');
    }
}
