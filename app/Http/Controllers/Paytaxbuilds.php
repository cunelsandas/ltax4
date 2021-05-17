<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Inputs;


class Paytaxbuilds extends Controller
{
    function index(){
        $getData = Auth::guard('bus')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();
        $titleData = DB::table('title_code')->where('ot_id','=', $ownerData->title)->first();
        $tambonData = DB::table('sys_tambon')->where('tambon_id','=', $ownerData->tambon_id)->first();
        $amphoeData = DB::table('sys_amphoe')->where('amphoe_id','=', $ownerData->amphoe_id)->first();
        $provinceData = DB::table('sys_province')->where('province_id','=', $ownerData->province_id)->first();

        $getdate = DB::table('img_paytax_build')->where('owner_id','=', $getData->owner_id)->first();
        $getBankAcc = DB::table('img_bank_account')->get();

        return view('paytaxbuild',['getData'=>$getData,'ownerData'=>$ownerData,'titleData'=>$titleData,'tambonData'=>$tambonData,
            'amphoeData'=>$amphoeData,'provinceData'=>$provinceData,'getdate'=>$getdate,'getBankAcc'=>$getBankAcc]);
    }

    function upload(Request $requests)
    {
        $getData = Auth::guard('bus')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();
        $this->validate($requests, [
            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $requests->file('select_file');
        $new_name = $ownerData->owner_id .'_paytaxbuild_'.date('Y-m-d').'.png';
        $image->move(public_path("paytaxbuild/images"),$new_name);
        $ownerData = DB::table('img_paytax_build')->updateOrInsert(['owner_id'=>$ownerData->owner_id,'status'=>1,'img_paytax_build'=>$new_name]);

        return back()->with('success','อัพโหลดสลิปธนาคารสำเร็จ กรุณารอการตรวจสอบของเจ้าหน้าที่ เจ้าหน้าที่จะติดต่อกลับภายใน 1-2 วันทำการ')->with('path',$new_name);
    }
}
