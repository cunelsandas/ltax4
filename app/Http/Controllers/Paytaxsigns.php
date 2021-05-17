<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Inputs;


class Paytaxsigns extends Controller
{
    function index(){
        $getData = Auth::guard('signs')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();

//        $getSignData10 = DB::table('signboard')->where('owner_id','=', $getData->owner_id)->orderBy('id','desc')->get()->unique('s_name')->toArray();
        $getSignData10 = DB::table('signboard')->where('owner_id','=', $getData->owner_id)->orderBy('id','desc')->get()->toArray();
        $getSignData = DB::table('signboard')->where('owner_id','=', $ownerData->owner_id)->first();
        $getDistrict = DB::table('districts')->where('district_code','=', $getSignData->tambon_id)->first();

        $getdate = DB::table('img_paytax_sign')->where('owner_id','=', $getData->owner_id)->first();
        $getBankAcc = DB::table('img_bank_account')->get();

        //dd($getSignData10);



        return view('paytaxsign',['getData'=>$getData,'ownerData'=>$ownerData,
           'getSignData10'=>$getSignData10,'getSignData'=>$getSignData,'getdate'=>$getdate,'getBankAcc'=>$getBankAcc,'getDistrict'=>$getDistrict]);
    }

    function upload(Request $requests)
    {
        $getData = Auth::guard('signs')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();
        $this->validate($requests, [
            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = $requests->file('select_file');
        $new_name = $ownerData->owner_id .'_paytaxsign_'.date('Y-m-d').'.png';
        $image->move(public_path("paytaxsign/images"),$new_name);
        $ownerData = DB::table('img_paytax_sign')->update(['owner_id'=>$ownerData->owner_id,'pop_id'=>$ownerData->pop_id,'sid'=>$getData->id,'address'=>$getData->address,'status'=>1,'status_backend'=>1,'img_paytax_sign'=>$new_name]);

        return back()->with('success','อัพโหลดสลิปธนาคารสำเร็จ กรุณารอการตรวจสอบของเจ้าหน้าที่ เจ้าหน้าที่จะติดต่อกลับภายใน 1-2 วันทำการ')->with('path',$new_name);
    }

    function confirmsign(Request $requests)
    {
        $getData = Auth::guard('signs')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();

        $cffe = $requests->input('confirm');

        $ownerData = DB::table('img_paytax_sign')->updateOrInsert(['owner_id'=>$ownerData->owner_id,'pop_id'=>$ownerData->pop_id,'sid'=>$getData->id,'address'=>$getData->address,'status'=>1,'status_backend'=>0,'img_paytax_sign'=>'']);

        return back();
    }
}
