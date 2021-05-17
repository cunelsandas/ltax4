<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Inputs;
use function Couchbase\defaultDecoder;


class Paytaxcondos extends Controller
{
    function index(){
        $yearNow = \Carbon\Carbon::now()->year+543;

        $getData = Auth::guard('condo')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();
        $getCondoData = DB::table('cd_room')->where('cdrid','=',$getData->cdroid)->first();
//        $getCondoFromPDS4 = DB::table('pds4')->where('ref_cdr_id','=', $getData->cdr_id)->orderBy('id','asc')->first();
        $getCondoFromPDS4 = DB::table('pds4')->where('ref_cdr_id','=', $getData->cdr_id)->orderBy('id','desc')->first();   //check total_tax check row ข้อมูลซ้ำ มีภาษีบ้างไม่มีภาษีบ้าง
        $getDistrict = DB::table('districts')->where('district_code','=', $ownerData->tambon_id)->first();

        $getdate = DB::table('img_paytax_condo')->where('owner_id','=', $getData->owner_id)->where('cdrid','=',$getCondoData->cdrid)->first();
        $getBankAcc = DB::table('img_bank_account')->get();



      //  dd($getCondoFromPDS4);
        return view('paytaxcondo',['getData'=>$getData,'ownerData'=>$ownerData,'getDistrict'=>$getDistrict, 'getdate'=>$getdate,'getBankAcc'=>$getBankAcc,'getCondoData'=>$getCondoData,'getCondoFromPDS4'=>$getCondoFromPDS4]);
    }

    function upload(Request $requests)
    {
        $getData = Auth::guard('condo')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();
        $getCondoData = DB::table('cd_room')->where('cdrid','=',$getData->cdroid)->first();
//        $getCondoFromPDS4 = DB::table('pds4')->where('ref_cdr_id','=', $getData->cdr_id)->orderBy('id','asc')->first();
        $getCondoFromPDS4 = DB::table('pds4')->where('ref_cdr_id','=', $getData->cdr_id)->orderBy('id','desc')->first();   //check total_tax check row ข้อมูลซ้ำ มีภาษีบ้างไม่มีภาษีบ้าง
        $this->validate($requests, [
            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $requests->file('select_file');
        $new_name = $ownerData->owner_id.'_'.$getCondoData->cdrid .'_'.$getCondoFromPDS4->id.'_paytaxcondo_'.date('Y-m-d').'.png';
        $image->move(public_path("paytaxcondo/images"),$new_name);
        $ownerData = DB::table('img_paytax_condo')->update(['owner_id'=>$ownerData->owner_id,'pop_id'=>$ownerData->pop_id,'cdrid'=>$getCondoData->cdrid,'address'=>$getCondoFromPDS4->condo_no,'status'=>1,'status_backend'=>1,'img_paytax_condo'=>$new_name]);

        return back()->with('success','อัพโหลดสลิปธนาคารสำเร็จ กรุณารอการตรวจสอบของเจ้าหน้าที่ เจ้าหน้าที่จะติดต่อกลับภายใน 1-2 วันทำการ')->with('path',$new_name);
    }

    function confirmcondo(Request $requests)
    {
        $getData = Auth::guard('condo')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();
        $getCondoData = DB::table('cd_room')->where('cdrid','=',$getData->cdroid)->first();
        $getCondoFromPDS4 = DB::table('pds4')->where('ref_cdr_id','=', $getData->cdr_id)->orderBy('id','desc')->first();   //check total_tax check row ข้อมูลซ้ำ มีภาษีบ้างไม่มีภาษีบ้าง
        $cffe = $requests->input('confirm');

        $ownerData = DB::table('img_paytax_condo')->updateOrInsert(['owner_id'=>$ownerData->owner_id,'pop_id'=>$ownerData->pop_id,'cdrid'=>$getCondoData->cdrid,'address'=>$getCondoFromPDS4->condo_no,'status'=>1,'status_backend'=>0,'img_paytax_condo'=>'']);

        return back();
    }
}
