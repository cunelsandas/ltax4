<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Inputs;
use function Couchbase\defaultDecoder;


class Paytaxlands extends Controller
{
    function index(){
        $yearNow = \Carbon\Carbon::now()->year+543-1;
        $getData = Auth::guard('lands')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();
        $getLandOwnerData = DB::table('land_owner')->where('lid','=', $getData->lid)->first();
        $getLandData = DB::table('land')->where('lid','=', $getLandOwnerData->lid)->first();
        $getDistrict = DB::table('districts')->where('district_code','=', $getLandData->tambon_id)->first();

        $getFromPDS3 = DB::table('pds3')->where('lid','=', $getLandOwnerData->lid)->orderBy('id','desc')->get();
        $getBuildingJoinPDS3 = DB::table('building')->join('pds3','pds3.bid','=','building.bid')->where('lid','=', $getLandOwnerData->lid)->get();

        //dd($getFromPDS3);

        $getdate = DB::table('img_paytax_land')->where('owner_id','=', $getData->owner_id)->where('lid','=',$getData->lid)->first();
        $getBankAcc = DB::table('img_bank_account')->get();



       // dd($getData);
        return view('paytaxland',['getData'=>$getData,'ownerData'=>$ownerData,'getLandData'=>$getLandData,'getDistrict'=>$getDistrict, 'getdate'=>$getdate,'getBankAcc'=>$getBankAcc,'getFromPDS3'=>$getFromPDS3,'getBuildingJoinPDS3'=>$getBuildingJoinPDS3]);
    }

    function upload(Request $requests)
    {
        $getData = Auth::guard('lands')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();
        $getLandOwnerData = DB::table('land_owner')->where('lid','=', $getData->lid)->first();
        $getLandData = DB::table('land')->where('lid','=', $getLandOwnerData->lid)->first();
        //dd($getLandData);
        $this->validate($requests, [
            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $requests->file('select_file');
        $new_name = $ownerData->owner_id.'_'.$getLandData->lid .'_'.$getLandData->ln.'_paytaxland_'.date('Y-m-d').'.png';
        $image->move(public_path("paytaxland/images"),$new_name);
        $ownerData = DB::table('img_paytax_land')->update(['owner_id'=>$ownerData->owner_id,'pop_id'=>$ownerData->pop_id,'lid'=>$getLandData->lid,'ln'=>$getLandData->ln,'status'=>1,'status_backend'=>1,'img_paytax_land'=>$new_name]);

        return back()->with('success','อัพโหลดสลิปธนาคารสำเร็จ กรุณารอการตรวจสอบของเจ้าหน้าที่ เจ้าหน้าที่จะติดต่อกลับภายใน 1-2 วันทำการ')->with('path',$new_name);
    }

    function confirmland(Request $requests)
    {
        $getData = Auth::guard('lands')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();
        $getLandOwnerData = DB::table('land_owner')->where('lid','=', $getData->lid)->first();
        $getLandData = DB::table('land')->where('lid','=', $getLandOwnerData->lid)->first();

        $cffe = $requests->input('confirm');

        $ownerData = DB::table('img_paytax_land')->updateOrInsert(['owner_id'=>$ownerData->owner_id,'pop_id'=>$ownerData->pop_id,'lid'=>$getLandData->lid,'ln'=>$getLandData->ln,'status'=>1,'status_backend'=>0,'img_paytax_land'=>'']);

        return back();
    }
}
