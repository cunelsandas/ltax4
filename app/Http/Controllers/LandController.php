<?php

namespace App\Http\Controllers;

use App\Models\Land;
use App\Models\Landeditinfo;
use App\Models\LandModel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\WithFileUploads;
use Symfony\Component\Console\Input\Input;

class LandController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yearNow = \Carbon\Carbon::now()->year+543-1;
        $getData = Auth::guard('lands')->user();
     //   $ownerData = DB::table('land_owner')->where('lid','=', $getData->lid)->first();
    //    $landData = DB::table('ltax_land')->where('owner_id','=', $getData->owner_id)
      //      ->where('annual','=',$yearNow)->get();  //ถ้าวนลูปทุกที่ดินให้ใช้อันนี้ ถ้าอิงตามรหัสที่เป็นเลขที่เอกสารสิทธิ์ ให้ใช้ getData
//        $buildData = DB::table('ltax_building')->where('owner_id','=', $getData->owner_id)
//            ->where('annual','=',$yearNow)->get();
      //  $buildData = DB::table('ltax_building')->where('owner_id','=', $getData->owner_id)
     //       ->where('annual','=',$yearNow)->get();
     //   $titleData = DB::table('title_code')->where('ot_id','=', $ownerData->title)->first();
     //   $tambonData = DB::table('sys_tambon')->where('tambon_id','=', $ownerData->tambon_id)->first();
    //    $amphoeData = DB::table('sys_amphoe')->where('amphoe_id','=', $ownerData->amphoe_id)->first();
    //    $provinceData = DB::table('sys_province')->where('province_id','=', $ownerData->province_id)->first();


        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();
        $getLandOwnerData = DB::table('land_owner')->where('lid','=', $getData->lid)->first();

        $getLandData = DB::table('land')->where('lid','=', $getLandOwnerData->lid)->first();
        $getDistrict = DB::table('districts')->where('district_code','=', $getLandData->tambon_id)->first();

        //get from 1 table pds3 == lid
        $getFromPDS3 = DB::table('pds3')->where('lid','=', $getLandOwnerData->lid)->orderBy('id','desc')->get();
        $getBuildingJoinPDS3 = DB::table('building')->join('pds3','pds3.bid','=','building.bid')->where('lid','=', $getLandOwnerData->lid)->get();

       // dd($getBuildingJoinPDS3);

//        $getLatLng = DB::table('ltax_land')->select('lnglat')->where('owner_id','=', $getData->owner_id)->first();
//        $latlng = explode(",",$getLatLng);
//        dd($latlng);  เอาไว้ใช้กับ db ที่มีการเก็บค่า latlng ทุก field

        return view('land.index',['ownerData'=>$ownerData,'getLandData'=>$getLandData,'getDistrict'=>$getDistrict,'getFromPDS3'=>$getFromPDS3,'getBuildingJoinPDS3'=>$getBuildingJoinPDS3]);

    }


    public static function print_pds3($id)
    {
        $yearNow = \Carbon\Carbon::now()->year+543-1;
        $getData = Auth::guard('lands')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();
        $getLandOwnerData = DB::table('land_owner')->where('lid','=', $getData->lid)->first();

        $getLandData = DB::table('land')->where('lid','=', $getLandOwnerData->lid)->first();
        $getLandFromPDS3 = DB::table('pds3')->where('lid','=', $getLandOwnerData->lid)->orderBy('id','desc')->first();
        $getBuildingFromPDS3 = DB::table('pds3')->where('lid','=', $getLandOwnerData->lid)->orderBy('id','desc')->get();

        // dd($getFromPDS3);

        return view('land.print_inpds3', ['getData',$getData,'ownerData'=>$ownerData,'getLandFromPDS3'=>$getLandFromPDS3,'getBuildingFromPDS3'=>$getBuildingFromPDS3]);
    }

    public static function editland($id)
    {
        $yearNow = \Carbon\Carbon::now()->year+543-1;
        $getData = Auth::guard('lands')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();
        $getLandOwnerData = DB::table('land_owner')->where('lid','=', $getData->lid)->first();

        $getLandData = DB::table('land')->where('lid','=', $getLandOwnerData->lid)->first();
        $getDistrict = DB::table('districts')->where('district_code','=', $getLandData->tambon_id)->first();


        $getLandFromPDS3 = DB::table('pds3')->where('lid','=', $getLandOwnerData->lid)->orderBy('id','desc')->first();
        $getBuildingFromPDS3 = DB::table('pds3')->where('lid','=', $getLandOwnerData->lid)->orderBy('id','desc')->get();

        //dd($getLandFromPDS3);




//        $getDataBuildingPDS3 = DB::table('ltax_building')
//            ->join('ltax_b_type','ltax_b_type.bt_id','=','ltax_building.bt_id')
//            ->join('ltax_b_mat','ltax_b_mat.bm_id','=','ltax_building.bm_id')
//            ->leftJoin('bu','bu.bid','=','ltax_building.bid')
//            ->leftJoin('bu_cate','bu_cate.usage_id','=','bu.usage_id')
//            ->where('ltax_building.owner_id','=',$getData->owner_id)
//            ->where('ltax_building.annual','=',$yearNow)
//            ->first();

//        dd($getDataBuildingPDS3);

//        $getDataBuildingCondoPDS3 = DB::table('ltax_building')
//            ->join('ltax_b_type','ltax_b_type.bt_id','=','ltax_building.bt_id')
//            ->join('ltax_b_mat','ltax_b_mat.bm_id','=','ltax_building.bm_id')
//            ->leftJoin('bu','bu.bid','=','ltax_building.bid')
//            ->leftJoin('bu_cate','bu_cate.usage_id','=','bu.usage_id')
//            ->where('ltax_building.owner_id','=',$getData->owner_id)
//            ->where('ltax_building.bt_id','=',30)
//            ->where('ltax_building.annual','=',$yearNow)
//            ->first();


        $getDataEditland = DB::table('ltax_land_edit_info')
            ->where('land_id','=', $getLandOwnerData->lid)->first();



        $getDataLandOnDn = DB::table('land') //get land data by dn
        ->where('lid','=', $getLandOwnerData->lid)->first();


        $getDataLandUseOnDn = DB::table('land')  //get land use type
        ->where('lid','=', $getLandOwnerData->lid)->first();



        $getTitle = DB::table('title_code')->get();
        $getLandUseType = DB::table('lu_type')->get();
        $getDataBuildingType = DB::table('b_config')->get();
        $getDataBuildingCate = DB::table('bu_cate')->get();


        return view('land.editinfoland', ['getData',$getData,'ownerData'=>$ownerData,
           'getDataEditland'=>$getDataEditland,'getTitle'=>$getTitle,
            'getDataLandOnDn'=>$getDataLandOnDn,'getDataLandUseOnDn'=>$getDataLandUseOnDn,
            'getLandData'=>$getLandData,'getLandFromPDS3'=>$getLandFromPDS3,'getBuildingFromPDS3'=>$getBuildingFromPDS3,
            'getDistrict'=>$getDistrict,'getLandUseType'=>$getLandUseType,'getDataBuildingType'=>$getDataBuildingType,
            'getDataBuildingCate'=>$getDataBuildingCate]);
    }


    public static function print_editinfoland_request($id)
    {
        $yearNow = \Carbon\Carbon::now()->year+543-1;
        $getData = Auth::guard('lands')->user();
        $ownerData = DB::table('ltax_owner')->where('owner_id','=', $getData->owner_id)->first();
        $getDataPDS3 = DB::table('ltax_land')->join('l_type','ltax_land.ldoc_type','=','l_type.ldoc_type')
            ->join('lu','ltax_land.land_id','=','lu.land_id')
            ->join('lu_type','lu.lut_id','=','lu_type.lutid')
            ->join('ltax_sys_tambon','ltax_land.tambon_id','=','ltax_sys_tambon.tambon_id')
            ->where('ltax_land.owner_id','=',$getData->owner_id)
            ->where('ltax_land.annual','=',$yearNow)
            ->get();

        $getDataBuildingPDS3 = DB::table('ltax_building')
            ->join('ltax_b_type','ltax_b_type.bt_id','=','ltax_building.bt_id')
            ->join('ltax_b_mat','ltax_b_mat.bm_id','=','ltax_building.bm_id')
            ->leftJoin('bu','bu.bid','=','ltax_building.bid')
            ->leftJoin('bu_cate','bu_cate.usage_id','=','bu.usage_id')
            ->where('ltax_building.owner_id','=',$getData->owner_id)
            ->where('ltax_building.annual','=',$yearNow)
            ->get();


        return view('land.print_editinfoland_request', ['getDataPDS3'=>$getDataPDS3,'getData',$getData,'ownerData'=>$ownerData,'getDataBuildingPDS3'=>$getDataBuildingPDS3]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
//            บุคคลธรรมดา
            'title_name'  ,
            'first_name'  ,
            'last_name'   ,
            'pop_id'      ,
            'telephone'    ,
            'address'       ,
            'moo'         ,
            'soi'           ,
            'road'          ,
            'province'       ,
            'amphoe'         ,
            'tambon'    ,

//            นิติบุคคล

            'name_niti'  ,
            'juristic_id_niti'      ,
            'headquarter_address_niti'    ,
            'headquarter_moo_niti'       ,
            'headquarter_soi_niti'         ,
            'headquarter_road_niti'           ,
            'headquarter_tambon_niti'          ,
            'headquarter_amphoe_niti'       ,
            'headquarter_province_niti'         ,
            'headquarter_telephone_niti'    ,
            'by_niti'    ,
            'pop_id_niti'    ,
            'company_name_niti' ,
            'date_input_niti',
//ส่วนที่ 3
            //ส่วนแก้ไขที่ดิน
            'first_name_land_edit'  ,
            'last_name_land_edit'   ,
            'reason_land'      ,
            'rai_land_edit'    ,
            'yawn_land_edit'       ,
            'wa_land_edit'         ,
            'lutname_land_edit'           ,
            //ส่วนแก้ไขสิ่งปลูกสร้าง
            'first_name_build_edit'          ,
            'last_name_build_edit'       ,
            'reason_build'         ,
            'btname_build_edit'    ,
            'area_build_edit'    ,
            'width_build_edit'    ,
            'length_build_edit' ,
            'floor_build_edit',
            'bucate_build_edit',
            'area_builduse_edit'  ,
            //ส่วนแก้ไขห้องชุด
            'first_name_build_condo_edit'          ,
            'last_name_build_condo_edit'       ,
            'reason_build_condo'         ,
            'area_building_condo_edit'    ,
            'width_building_condo_edit'    ,
            'length_building_condo_edit'    ,
            'floor_building_condo_edit' ,
            'bu_condo_cate_edit' ,

            'dn_doc' => 'mimes:pdf,PDF,png,jpg,jpeg|max:10240',
            'pop_id_doc' => 'mimes:pdf,PDF,png,jpg,jpeg|max:10240',
            'house_doc' => 'mimes:pdf,PDF,png,jpg,jpeg|max:10240',
            'other_doc' => 'mimes:pdf,PDF,png,jpg,jpeg|max:10240'




        ]);
        $user = Auth::guard('lands')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $user->owner_id)->first();
        $getLandOwnerData = DB::table('land_owner')->where('lid','=', $user->lid)->first();
        $getLandData = DB::table('land')->where('lid','=', $getLandOwnerData->lid)->first();


        $input = new Landeditinfo();
        //            บุคคลธรรมดา
        $input->title_name     = $request->input('title_name');
        $input->first_name     = $request->input('first_name');
        $input->last_name     = $request->input('last_name');
        $input->pop_id = $request->input('pop_id');
        $input->telephone = $request->input('telephone');
        $input->moo     = $request->input('moo');
        $input->soi     = $request->input('soi');
        $input->address     = $request->input('address');
        $input->road     = $request->input('road');
        $input->province     = $request->input('province');
        $input->amphoe     = $request->input('amphoe');
        $input->tambon     = $request->input('tambon');
        //            นิติบุคคล
        $input->name_niti     = $request->input('name_niti');
        $input->juristic_id_niti     = $request->input('juristic_id_niti');
        $input->headquarter_address_niti = $request->input('headquarter_address_niti');
        $input->headquarter_moo_niti = $request->input('headquarter_moo_niti');
        $input->headquarter_soi_niti     = $request->input('headquarter_soi_niti');
        $input->headquarter_road_niti     = $request->input('headquarter_road_niti');
        $input->headquarter_tambon_niti     = $request->input('headquarter_tambon_niti');
        $input->headquarter_amphoe_niti     = $request->input('headquarter_amphoe_niti');
        $input->headquarter_province_niti     = $request->input('headquarter_province_niti');
        $input->headquarter_telephone_niti     = $request->input('headquarter_telephone_niti');
        $input->by_first_niti     = $request->input('by_first_niti');
        $input->by_last_niti     = $request->input('by_last_niti');
        $input->pop_id_niti     = $request->input('pop_id_niti');
        $input->company_name_niti     = $request->input('company_name_niti');
        $input->date_input_niti     = $request->input('date_input_niti');
        //ส่วนที่ 3.1 แก้ไขที่ดิน
        $input->first_name_land_edit     = $request->input('first_name_land_edit');
        $input->last_name_land_edit     = $request->input('last_name_land_edit');
        $input->reason_land     = $request->input('reason_land');
        $input->rai_land_edit     = $request->input('rai_land_edit');
        $input->yawn_land_edit     = $request->input('yawn_land_edit');
        $input->wa_land_edit     = $request->input('wa_land_edit');
        $input->lutname_land_edit     = $request->input('lutname_land_edit');
        //ส่วนที่ 3.2 แก้ไขสิ่งปลูกสร้าง
        $input->first_name_build_edit     = $request->input('first_name_build_edit');
        $input->last_name_build_edit     = $request->input('last_name_build_edit');
        $input->reason_build     = $request->input('reason_build');
        $input->btname_build_edit     = $request->input('btname_build_edit');
        $input->area_build_edit     = $request->input('area_build_edit');
        $input->width_build_edit     = $request->input('width_build_edit');
        $input->length_build_edit     = $request->input('length_build_edit');
        $input->floor_build_edit     = $request->input('floor_build_edit');
        $input->bucate_build_edit     = $request->input('bucate_build_edit');
        $input->area_builduse_edit     = $request->input('area_builduse_edit');
        //ส่วนที่ 3.3 แก้ไขห้องชุด
        $input->first_name_build_condo_edit     = $request->input('first_name_build_condo_edit');
        $input->last_name_build_condo_edit     = $request->input('last_name_build_condo_edit');
        $input->reason_build_condo     = $request->input('reason_build_condo');
        $input->area_building_condo_edit     = $request->input('area_building_condo_edit');
        $input->width_building_condo_edit     = $request->input('width_building_condo_edit');
        $input->length_building_condo_edit     = $request->input('length_building_condo_edit');
        $input->floor_building_condo_edit     = $request->input('floor_building_condo_edit');
        $input->bu_condo_cate_edit     = $request->input('bu_condo_cate_edit');


        if($request->hasFile('dn_doc')) {
            $input->dn_doc = $request->file('dn_doc') ?? null;
            $new_namedn = $user->owner_id . '_' . $user->dn . '_dn_' . date('Y-m-d'). '.'. $input->dn_doc->getClientOriginalExtension();
            $input->dn_doc->move(public_path("landeditinfo/dn"), $new_namedn);
        }

        if($request->hasFile('pop_id_doc')) {
            $input->pop_id_doc = $request->file('pop_id_doc') ?? null;
            $new_namepopid = $user->owner_id . '_' . $user->dn . '_pop_id_doc_' . date('Y-m-d') . '.'. $input->pop_id_doc->getClientOriginalExtension();
            $input->pop_id_doc->move(public_path("landeditinfo/pop_id_doc"), $new_namepopid);
        }

        if($request->hasFile('house_doc')) {
            $input->house_doc = $request->file('house_doc') ?? null;
            $new_namehouse = $user->owner_id . '_' . $user->dn . '_house_doc_' . date('Y-m-d') . '.'. $input->house_doc->getClientOriginalExtension();
            $input->house_doc->move(public_path("landeditinfo/house_doc"), $new_namehouse);
        }

        if($request->hasFile('other_doc')) {
            $input->other_doc = $request->file('other_doc') ?? null;
            $new_nameother = $user->owner_id . '_' . $user->dn . '_other_doc_' . date('Y-m-d') . '.'. $input->other_doc->getClientOriginalExtension();
            $input->other_doc->move(public_path("landeditinfo/other_doc"), $new_nameother);
        }

        $input->owner_id = $user->owner_id;
        $input->land_id = $getLandData->lid;
        $input->dn = $getLandData->dno;

        $nametitlesend =  $input->title_name ;
        $firstnamesend = $input->first_name ;
        $lastnamesend = $input->last_name;
        $popidsend = $input->pop_id;
        $geturl = 'http://localhost/itgltax/public/paytaxs/'.$user->owner_id.'/edit';

                                    $url        = 'https://notify-api.line.me/api/notify';
                                    $token      = 'vUZalG4ZPhv0IswNZ3N9ZWJdtsuPqNnK3de7vdkb6TQ';
                                    $headers    = [
                                        'Content-Type: application/x-www-form-urlencoded',
                                        'Authorization: Bearer ' . $token
                                    ];
                                    $fields     = "message=มีผู้ยื่นคำร้องแก้ไขข้อมูลจากระบบภาษี ชื่อ: $nametitlesend$firstnamesend $lastnamesend  รหัสบัตรประชาชน: $popidsend \nโฉนดเลขที่: $user->dn \nURL:$geturl";

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    $result = curl_exec($ch);
                    curl_close($ch);

        $input->save();
        $request->session()->flash('message', 'Successfully created ');
        return redirect('/land/pds3/{id}');
    }

    function uploaddn(Request $requests)
    {
        $getData = Auth::guard('lands')->user();
        $ownerData = DB::table('ltax_owner')->where('owner_id','=', $getData->owner_id)->first();
        $this->validate($requests, [
            'dn_doc' => 'required|mimes:jpeg,png,jpg,gif,pdf,PDF|max:2048'
        ]);

        $filedn = $requests->file('dn_doc');
        $new_name = $ownerData->owner_id.'_'.$getData->dn .'_paytaxland_'.date('Y-m-d').'.png';
        $filedn->move(public_path("landeditinfo/dn"),$new_name);
        $ownerData = DB::table('img_paytax_land')->updateOrInsert(['owner_id'=>$ownerData->owner_id,'dn'=>$getData->dn,'status'=>1,'img_paytax_land'=>$new_name]);

        return back()->with('success','อัพโหลดสลิปธนาคารสำเร็จ กรุณารอการตรวจสอบของเจ้าหน้าที่ เจ้าหน้าที่จะติดต่อกลับภายใน 1-2 วันทำการ')->with('path',$new_name);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function LandcheckIndex()
    {
        Auth::logout();

        return view('land.login');
    }

    public function LandcheckLogin(Request $request)
    {

        $getpop = $request->post('username');

        $pop_id = DB::table('ltax_owner')->where('pop_id', '=', $getpop)->get('owner_id')->first();
        if ($pop_id === null) {
            return redirect()->back()->with(['error_login' => 'กรุณาตรวจสอบชื่อผู้ใช้ หรือรหัสผ่าน']);
        }
        $user = Land::where([
            'owner_id' => $pop_id->owner_id,
            'dn' => $request->password
        ])
            ->latest('annual')
            ->first();

        if ($user) {
            Auth::guard('land')->login($user);
//            session(['popId' => $getpop]);
            return redirect()->route('land');
        }
    }


}
