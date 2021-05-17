<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Inputs;
use App\Models\Status;
use App\Models\Ownertype;
use App\Models\Nametitle;
use App\Models\Province;
use App\Models\Amphoe;
use App\Models\Tambon;
use App\Models\Lands;
use App\Models\Sign_boards;
use Illuminate\Validation\Rules\In;

class ReportsController extends Controller
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
        $inputs = Owners::with('user')->with('status')->with('owner_types')->paginate(20);
        return view('dashboard.inputs.inputsList', ['inputs' => $inputs]);
    }

    public function index1()
    {
        $getData = DB::table('owner')->paginate(50);
        return view('dashboard.reports.pds1List', ['getData' => $getData]);
    }

    public function index2()
    {
        $getData = DB::table('owner')->paginate(50);
        return view('dashboard.reports.pds2List', ['getData' => $getData]);
    }

    public function index3()
    {
        $getData = DB::table('owner')->paginate(50);
        return view('dashboard.reports.pds3List', ['getData' => $getData]);
    }

    public function index4()
    {
        $getData = DB::table('owner')->paginate(50);
        return view('dashboard.reports.pds4List', ['getData' => $getData]);
    }

    public function index6()
    {
        $getData = DB::table('owner')->paginate(50);
        return view('dashboard.reports.pds6List', ['getData' => $getData]);
    }

    public function index7()
    {
        $getData = DB::table('owner')->paginate(50);
        return view('dashboard.reports.pds7List', ['getData' => $getData]);
    }

    public function index8()
    {
        $getData = DB::table('owner')->paginate(50);
        return view('dashboard.reports.pds8List', ['getData' => $getData]);
    }

    public function indexpp1()
    {
        $getData = DB::table('owner')->paginate(50);
        return view('dashboard.reports.pp1List', ['getData' => $getData]);
    }

    public function indexpp3()
    {
        $getData = DB::table('owner')->paginate(50);
        return view('dashboard.reports.pp3List', ['getData' => $getData]);
    }

    public function namepayland()
    {
        $yearNow = \Carbon\Carbon::now()->year + 543 - 1;
        $namepayland = DB::table('ltax_land')
            ->join('ltax_owner', 'ltax_owner.owner_id', '=', 'ltax_land.owner_id')
            ->join('l_type', 'ltax_land.ldoc_type', '=', 'l_type.ldoc_type')
            ->join('lu', 'ltax_land.land_id', '=', 'lu.land_id')
            ->join('lu_type', 'lu.lut_id', '=', 'lu_type.lutid')
            ->join('ltax_sys_tambon', 'ltax_land.tambon_id', '=', 'ltax_sys_tambon.tambon_id')
            ->where('annual', '=', $yearNow)->where('tax', '!=', 0)->paginate(50);
        return view('dashboard.reports.namepaylandList', ['namepayland' => $namepayland]);
    }

    public function namepaybuild()
    {
        $yearNow = \Carbon\Carbon::now()->year + 543 - 1;
        $namepaybuild = DB::table('ltax_building')->join('ltax_owner', 'ltax_owner.owner_id', '=', 'ltax_building.owner_id')
            ->join('ltax_sys_tambon', 'ltax_building.tambon_id', '=', 'ltax_sys_tambon.tambon_id')
            ->where('annual', '=', $yearNow)->where('tax', '!=', 0)->paginate(50);
        return view('dashboard.reports.namepaybuildList', ['namepaybuild' => $namepaybuild]);
    }

    public function namepaysign()
    {
        $yearNow = \Carbon\Carbon::now()->year + 543 - 1;
        $namepaysign = DB::table('ltax_sign_board')->join('ltax_owner', 'ltax_owner.owner_id', '=', 'ltax_sign_board.owner_id')
            ->join('ltax_sys_tambon', 'ltax_sign_board.tambon_id', '=', 'ltax_sys_tambon.tambon_id')
            ->where('annual', '=', $yearNow)->where('tax', '!=', 0)->paginate(50);
        return view('dashboard.reports.namepaysignList', ['namepaysign' => $namepaysign]);
    }


    public function letter()
    {
        $yearNow = \Carbon\Carbon::now()->year + 543 - 1;
        $letter = DB::table('ltax_land')
            ->join('ltax_owner', 'ltax_owner.owner_id', '=', 'ltax_land.owner_id')
            ->join('l_type', 'ltax_land.ldoc_type', '=', 'l_type.ldoc_type')
            ->join('lu', 'ltax_land.land_id', '=', 'lu.land_id')
            ->join('lu_type', 'lu.lut_id', '=', 'lu_type.lutid')
            ->join('ltax_sys_tambon', 'ltax_land.tambon_id', '=', 'ltax_sys_tambon.tambon_id')
            ->where('annual', '=', $yearNow)->where('tax', '!=', 0)->paginate(50);
        return view('dashboard.reports.letterList', ['letter' => $letter]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.reports.create');
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
            'name' => 'required|min:1|max:64',
            'subject' => 'required|min:1|max:128',
            'content' => 'required|min:1',
        ]);
        $template = new EmailTemplate();
        $template->name = $request->input('name');
        $template->subject = $request->input('subject');
        $template->content = $request->input('content');
        $template->save();
        $request->session()->flash('message', 'Successfully created Email Template');
        return redirect()->route('mail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     ** @param int $id2
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $input = Inputs::all('id', 'first_name', 'last_name', 'card_id', 'address_number', 'moo', 'soi', 'road', 'tambon', 'amphoe', 'province', 'zip_code', 'telephone')->find($id);
        //$lands = DB::select('select * from lands where owner_id = ?',['owner_id'=>$id]);
        $lands = DB::select('select * from lands where owner_id = ?', [$id]);
        $landuses = DB::select('select * from lu where land_id = ?', [$id]);
        $sign_boards = DB::select('select * from sign_board where owner_id = ?', [$id]);
        $inputss = Inputs::all();
        return view('dashboard.reports.Reportshow', ['input' => $input, 'inputss' => $inputss, 'lands' => $lands, 'landuses' => $landuses, 'sign_boards' => $sign_boards]);
    }


    public static function print_pds1($id)
    {

        $getOwnerData = DB::table('owner')->where('owner_id', '=', $id)->first();
        $getDistrict = DB::table('districts')->where('district_code', '=', $getOwnerData->tambon_id)->first();
        $getData = DB::table('pds3')
            ->where('l_owner_id', '=', $id)
            ->get();


//            if (is_null($getData)) {
//                $getArea = 0;
//                $getAreaPrice = 0;
//            }else {
//                $getArea = ($getData->rai * 400) + ($getData->yawn * 100) + ($getData->wa);
//                $getAreaPrice = $getArea * $getData->wa_price;
//            }


//        $datas2=$datas2->toArray();
//        $results=array();
//
//        foreach ($datas1 as $key=>$data){
//
//                $newarr=array();
//                $newarr['ldoc_type'] = $data->ldoc_type;
//                $newarr['sn'] = $data->sn;
//                $newarr['dn'] = $data->dn;
//                $newarr['moo'] = $data->moo;
//                $newarr['vl'] = $data->vl;
//                $newarr['tambon_id'] = $data->tambon_id;
//                $newarr['rai'] = $data->rai;
//                $newarr['yawn'] = $data->yawn;
//                $newarr['wa'] = $data->wa;
//                $newarr['square_1'] = $data->square_1;
//                $newarr['meanprice_vl'] = $data->meanprice_vl;
//                $newarr['result_landprice_lands'] = $data->result_landprice_lands;
//
//                $newarr['building_type_name'] = $datas2[$key]->building_type_name;
//                $newarr['building_use_name'] = $datas2[$key]->building_use_name;
//                $newarr['bm_id'] = $datas2[$key]->bm_id;
//                $newarr['result_wl'] = $datas2[$key]->result_wl;
//                $newarr['meanprice_wl'] = $datas2[$key]->meanprice_wl;
//                $newarr['result_buildprice'] = $datas2[$key]->result_buildprice;
//                $newarr['result_real'] = $datas2[$key]->result_real;
//                $newarr['depreciation'] = $datas2[$key]->depreciation;
//                $newarr['result_final'] = $datas2[$key]->result_final;
//                $newarr['buildratio'] = $datas2[$key]->buildratio;
//                $newarr['result_buildratio'] = $datas2[$key]->result_buildratio;
//                $newarr['tax_exem'] = $datas2[$key]->tax_exem;
//                $newarr['result_real_final'] = $datas2[$key]->result_real_final;
//                $newarr['tax_final_percent'] = $datas2[$key]->tax_final_percent;
//
//            $results[]=$newarr;
//
//        }

//        $input = Inputs::all('id','first_name','last_name','card_id','address_number','moo','soi','road','tambon','amphoe','province','zip_code','telephone');
//        //$lands = DB::select('select * from lands where owner_id = ?',['owner_id'=>$id]);
//        $lands = DB::select('select * from lands where owner_id = ?', [$id]);
//        $landuses = DB::select('select * from lu where land_id = ?', [$id]);
//        $sign_boards = DB::select('select * from sign_board where owner_id = ?', [15]);
//        $inputss = Inputs::all();


        return view('dashboard.reports.print_pds1', ['getData' => $getData, 'getOwnerData' => $getOwnerData]);
    }


    public static function print_pds2($id)
    {
        $getData = DB::table('ltax_land')->join('l_type', 'ltax_land.ldoc_type', '=', 'l_type.ldoc_type')
            ->join('lu', 'ltax_land.land_id', '=', 'lu.land_id')
            ->join('lu_type', 'lu.lut_id', '=', 'lu_type.lutid')
            ->join('ltax_sys_tambon', 'ltax_land.tambon_id', '=', 'ltax_sys_tambon.tambon_id')
            ->where('owner_id', '=', $id)
            ->latest('annual')
            ->first();

        $getDataBuilding = DB::table('ltax_building')
            ->join('ltax_b_type', 'ltax_b_type.bt_id', '=', 'ltax_building.bt_id')
            ->join('ltax_b_mat', 'ltax_b_mat.bm_id', '=', 'ltax_building.bm_id')
            ->join('bu', 'bu.bid', '=', 'ltax_building.bid')
            ->join('bu_cate', 'bu_cate.usage_id', '=', 'bu.usage_id')
            ->where('owner_id', '=', $id)
            ->latest('annual')
            ->first();


        return view('dashboard.reports.print_pds2', ['getData' => $getData, 'getDataBuilding' => $getDataBuilding]);
    }

    public static function print_pds3($id)
    {

        //$getDataPDS3 = DB::select ("select * from `ltax_land` inner join `l_type` on `ltax_land`.`ldoc_type` = `l_type`.`ldoc_type` inner join `lu` on `ltax_land`.`land_id` = `lu`.`land_id` inner join `ltax_building` on `ltax_building`.`owner_id` = `ltax_land`.`owner_id` inner join `lu_type` on `lu`.`lut_id` = `lu_type`.`lutid` inner join `ltax_sys_tambon` on `ltax_land`.`tambon_id` = `ltax_sys_tambon`.`tambon_id` group by `ltax_land`.`owner_id` order by `ltax_land`.`annual` desc");

//        $getDataPDS3 = DB::table('ltax_land')->join('l_type','ltax_land.ldoc_type','=','l_type.ldoc_type')
//            ->join('lu','ltax_land.land_id','=','lu.land_id')
//            ->join('ltax_building','ltax_building.owner_id','=','ltax_land.owner_id')
//            ->join('lu_type','lu.lut_id','=','lu_type.lutid')
//            ->join('ltax_sys_tambon','ltax_land.tambon_id','=','ltax_sys_tambon.tambon_id')
//            ->groupBy('ltax_land.owner_id')
//            ->latest('ltax_land.annual')
//            ->paginate(50);

        $getDataPDS3 = DB::table('pds3')->paginate(50);


//        $getDataBuildingPDS3 = DB::table('ltax_building')
//            ->join('ltax_b_type','ltax_b_type.bt_id','=','ltax_building.bt_id')
//            ->join('ltax_b_mat','ltax_b_mat.bm_id','=','ltax_building.bm_id')
//            ->join('bu','bu.bid','=','ltax_building.bid')
//            ->join('bu_cate','bu_cate.usage_id','=','bu.usage_id')
//            ->groupBy('owner_id')
//            ->latest('annual')
//            ->paginate(50);


//
//        $getData = DB::table('ltax_land')->join('l_type','ltax_land.ldoc_type','=','l_type.ldoc_type')
//            ->join('lu','ltax_land.land_id','=','lu.land_id')
//            ->join('lu_type','lu.lut_id','=','lu_type.lutid')
//            ->join('ltax_sys_tambon','ltax_land.tambon_id','=','ltax_sys_tambon.tambon_id')
//            ->where( 'owner_id' ,'=',$id)
//            ->latest('annual')
//            ->get();
//
//        $getDataBuilding = DB::table('ltax_building')
//            ->join('ltax_b_type','ltax_b_type.bt_id','=','ltax_building.bt_id')
//            ->join('ltax_b_mat','ltax_b_mat.bm_id','=','ltax_building.bm_id')
//            ->join('bu','bu.bid','=','ltax_building.bid')
//            ->join('bu_cate','bu_cate.usage_id','=','bu.usage_id')
//            ->where( 'owner_id' ,'=',$id)
//            ->latest('annual')
//            ->first();
//


        return view('dashboard.reports.print_pds3', ['getDataPDS3' => $getDataPDS3]);
    }

    public static function print_inpds3($id)
    {
        $getDataPDS3 = DB::table('pds3')->where('l_owner_id', '=', $id)->get();
//        dd($getDataPDS3);


//        $getDataBuildingPDS3=$getDataBuildingPDS3->toArray();
//        $results=array();
//        foreach($getDataPDS3 as $key=>$data)
//        {
//            $newarr=array();
//            $newarr['owner_id']=$data->owner_id;
//            $newarr['parcel_code']=$data->parcel_code;
//            $newarr['b_code']=$getDataBuildingPDS3[$key]->b_code;
//            $newarr['parcel_code']=$getDataBuildingPDS3[$key]->parcel_code;
//            $results[]=$newarr;
//        }

        return view('dashboard.reports.print_inpds3', ['getDataPDS3' => $getDataPDS3]);
    }

    public static function print_inpds4($id)
    {
        $getDataPDS4 = DB::table('pds4')->where('owner_id', '=', $id)->get();
//        dd($getDataPDS3);


//        $getDataBuildingPDS3=$getDataBuildingPDS3->toArray();
//        $results=array();
//        foreach($getDataPDS3 as $key=>$data)
//        {
//            $newarr=array();
//            $newarr['owner_id']=$data->owner_id;
//            $newarr['parcel_code']=$data->parcel_code;
//            $newarr['b_code']=$getDataBuildingPDS3[$key]->b_code;
//            $newarr['parcel_code']=$getDataBuildingPDS3[$key]->parcel_code;
//            $results[]=$newarr;
//        }

        return view('dashboard.reports.print_inpds4', ['getDataPDS4' => $getDataPDS4]);
    }


//    public function paginateArray($data, $perPage = 15)
//    {
//        $page = Paginator::resolveCurrentPage();
//        $total = count($data);
//        $results = array_slice($data, ($page - 1) * $perPage, $perPage);
//
//        return new LengthAwarePaginator($results, $total, $perPage, $page, [
//            'path' => Paginator::resolveCurrentPath(),
//        ]);
//    }

    public static function print_pds4($id)
    {

        $getDataPDS4 = DB::table('pds4')->paginate(50);


        return view('dashboard.reports.print_pds4', ['getDataPDS4' => $getDataPDS4]);

//        $datas1 = DB::table('lands')
//            ->join('lu','lu.land_id', '=', 'lands.owner_id')
//            ->select('lands.id','lands.ldoc_type','lands.sn','lands.dn','lands.moo','lands.vl','lands.tambon_id','lands.rai','lands.yawn','lands.wa','lands.square_1','lands.meanprice_vl', 'lands.result_landprice_lands',
//                'lu.id' ,'lu.building_type_name','lu.building_use_name','lu.bm_id','lu.result_wl','lu.meanprice_wl','lu.result_buildprice','lu.result_real','lu.depreciation','lu.result_final','lu.buildratio','lu.result_buildratio','lu.tax_exem'
//                ,'lu.result_real_final','lu.tax_final_percent')
//            ->where('lands.owner_id', '=' ,$id)
//            ->get();
//
//        $input = Inputs::all('id','first_name','last_name','card_id','address_number','moo','soi','road','tambon','amphoe','province','zip_code','telephone')->find($id);
//        //$lands = DB::select('select * from lands where owner_id = ?',['owner_id'=>$id]);
//        $lands = DB::select('select * from lands where owner_id = ?', [$id]);
//        $landuses = DB::select('select * from lu where land_id = ?', [$id]);
//        $sign_boards = DB::select('select * from sign_board where owner_id = ?', [$id]);
//        $inputss = Inputs::all();
//
//        return view('dashboard.reports.print_pds4', [ 'input' => $input,'inputss'=>$inputss,'lands'=>$lands,'landuses'=>$landuses,'sign_boards'=>$sign_boards],compact('datas1'));
    }


    public static function print_pds6($id)
    {
        $getData = DB::table('pds3')->where('l_owner_id', '=', $id)->get();
        $getOwnerData = DB::table('owner')->where('owner_id', '=', $id)->first();
        $getBuildingCount = DB::table('pds3')->where('l_owner_id', '=', $id)->where('bid','!=',0)->count();
        $getCondoCount = DB::table('pds4')->where('owner_id', '=', $id)->count();


        return view('dashboard.reports.print_pds6', ['getData' => $getData,'getOwnerData'=>$getOwnerData,'getBuildingCount'=>$getBuildingCount]);
    }

    public static function print_pds7($id)
    {
        $getDataPDS7 = DB::table('pds3')->paginate(50);
        return view('dashboard.reports.print_pds7', ['getDataPDS7' => $getDataPDS7]);
    }

    public static function print_pds8($id)
    {
        $getDataPDS8 = DB::table('pds4')->paginate(50);

        return view('dashboard.reports.print_pds8', ['getDataPDS8' => $getDataPDS8]);


    }

    public static function print_pp1($id)
    {
        $getData = DB::table('signboard')->where('owner_id', '=', $id)->get();
        $getDataOwner = DB::table('owner')->where('owner_id', '=', $id)->first();

        //dd($getData);
        return view('dashboard.reports.print_pp1', ['getDataOwner' => $getDataOwner, 'getData' => $getData]);
    }


    public static function print_pp3($id)
    {

        $getData = DB::table('signboard')->where('owner_id', '=', $id)->get();
        $getDataOwner = DB::table('owner')->where('owner_id', '=', $id)->first();

        return view('dashboard.reports.print_pp3', ['getDataOwner' => $getDataOwner, 'getData' => $getData]);
    }


    public static function print_namepayland($id)
    {

        $yearNow = \Carbon\Carbon::now()->year + 543 - 1;
        $getDataNamepayland = DB::table('ltax_land')->join('ltax_owner', 'ltax_owner.owner_id', '=', 'ltax_land.owner_id')
            ->join('l_type', 'ltax_land.ldoc_type', '=', 'l_type.ldoc_type')
            ->join('lu', 'ltax_land.land_id', '=', 'lu.land_id')
            ->join('lu_type', 'lu.lut_id', '=', 'lu_type.lutid')
            ->join('ltax_sys_tambon', 'ltax_land.tambon_id', '=', 'ltax_sys_tambon.tambon_id')
            ->where('annual', '=', $yearNow)->where('tax', '!=', 0)
            ->paginate(50);


        return view('dashboard.reports.print_namepayland', ['getDataNamepayland' => $getDataNamepayland]);
    }

    public static function print_namepaybuild($id)
    {

        $yearNow = \Carbon\Carbon::now()->year + 543 - 1;
        $getDataNamepaybuild = DB::table('ltax_building')->join('ltax_owner', 'ltax_owner.owner_id', '=', 'ltax_building.owner_id')
            ->join('ltax_sys_tambon', 'ltax_building.tambon_id', '=', 'ltax_sys_tambon.tambon_id')
            ->where('annual', '=', $yearNow)->where('tax', '!=', 0)->paginate(50);

        return view('dashboard.reports.print_namepaybuild', ['getDataNamepaybuild' => $getDataNamepaybuild]);
    }

    public static function print_namepaysign($id)
    {

        $yearNow = \Carbon\Carbon::now()->year + 543 - 1;
        $getDataNamepaysign = DB::table('ltax_sign_board')->join('ltax_owner', 'ltax_owner.owner_id', '=', 'ltax_sign_board.owner_id')
            ->join('ltax_sys_tambon', 'ltax_sign_board.tambon_id', '=', 'ltax_sys_tambon.tambon_id')
            ->where('annual', '=', $yearNow)->where('tax', '!=', 0)->paginate(50);
        return view('dashboard.reports.print_namepaysign', ['getDataNamepaysign' => $getDataNamepaysign]);
    }

    public static function print_letter($id)
    {

        $getDataOwner = DB::table('owner')->where('owner_id', '=', $id)->first();
        $getData = DB::table('pds3')
            ->where('l_owner_id', '=', $id)
            ->groupBy('l_owner_id')
            ->get();


        return view('dashboard.reports.print_letter', ['getData' => $getData, 'getDataOwner' => $getDataOwner]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas1 = DB::table('lands')
            ->join('lu', 'lu.land_id', '=', 'lands.owner_id')
            ->select('lands.id', 'lands.ldoc_type', 'lands.sn', 'lands.dn', 'lands.moo', 'lands.vl', 'lands.tambon_id', 'lands.rai', 'lands.yawn', 'lands.wa', 'lands.square_1', 'lands.meanprice_vl', 'lands.result_landprice_lands',
                'lu.id', 'lu.building_type_name', 'lu.building_use_name', 'lu.bm_id', 'lu.result_wl', 'lu.meanprice_wl', 'lu.result_buildprice', 'lu.result_real', 'lu.depreciation', 'lu.result_final', 'lu.buildratio', 'lu.result_buildratio', 'lu.tax_exem'
                , 'lu.result_real_final', 'lu.tax_final_percent')
            ->where('lands.owner_id', '=', $id)
            ->get();

        $datas3 = DB::table('lands')
            ->join('lu', 'lu.land_id', '=', 'lands.owner_id')
            ->select('lands.id', 'lands.ldoc_type', 'lands.sn', 'lands.ln', 'lands.dn', 'lands.moo', 'lands.vl', 'lands.tambon_id', 'lands.rai', 'lands.yawn', 'lands.wa', 'lands.square_1', 'lands.meanprice_vl', 'lands.result_landprice_lands',
                'lu.lut_id', 'lu.use_rai', 'lu.use_yawn', 'lu.use_wa', 'lu.result_square', 'lu.id', 'lu.b_number', 'lu.building_type_name', 'lu.building_use_name', 'lu.bm_id', 'lu.result_wl', 'lu.meanprice_wl', 'lu.result_buildprice', 'lu.result_real', 'lu.depreciation', 'lu.result_final', 'lu.buildratio', 'lu.result_buildratio', 'lu.tax_exem'
                , 'lu.result_real_final', 'lu.tax_final_percent')
            ->get();


        $input = Inputs::all('id', 'first_name', 'last_name', 'card_id', 'address_number', 'moo', 'soi', 'road', 'tambon', 'amphoe', 'province', 'zip_code', 'telephone')->find($id);
        //$lands = DB::select('select * from lands where owner_id = ?',['owner_id'=>$id]);
        $lands = DB::select('select * from lands where owner_id = ?', [$id]);
        $landuses = DB::select('select * from lu where land_id = ?', [$id]);
        $sign_boards = DB::select('select * from sign_board where owner_id = ?', [$id]);
        $inputss = Inputs::all();


        return view('dashboard.reports.edit', ['input' => $input, 'inputss' => $inputss, 'lands' => $lands, 'landuses' => $landuses, 'sign_boards' => $sign_boards], compact('datas1', 'datas3'));
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
        $validatedData = $request->validate([
            'name' => 'required|min:1|max:64',
            'subject' => 'required|min:1|max:128',
            'content' => 'required|min:1',
        ]);
        $template = EmailTemplate::find($id);
        $template->name = $request->input('name');
        $template->subject = $request->input('subject');
        $template->content = $request->input('content');
        $template->save();
        $request->session()->flash('message', 'Successfully updated Email Template');
        return redirect()->route('mail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $template = EmailTemplate::find($id);
        if ($template) {
            $template->delete();
        }
        $request->session()->flash('message', 'Successfully deleted Email Template');
        return redirect()->route('mail.index');
    }

    public function prepareSend($id)
    {
        $template = EmailTemplate::find($id);
        return view('dashboard.email.send', ['template' => $template]);
    }

    public function send($id, Request $request)
    {
        $template = EmailTemplate::find($id);
        Mail::send([], [], function ($message) use ($request, $template) {
            $message->to($request->input('email'));
            $message->subject($template->subject);
            $message->setBody($template->content, 'text/html');
        });
        $request->session()->flash('message', 'Successfully sended Email');
        return redirect()->route('mail.index');
    }
}
