<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Inputs;


class BankaccountsController extends Controller
{
    function index(){
        $bankac = DB::table('img_bank_account')->get();

        return view('dashboard.bankaccounts.bankaccountsList',['bankac'=>$bankac]);
    }

    function upload(Request $requests)
    {
        $num = rand(1,999);
        $bankac = DB::table('img_bank_account')->get();
        $this->validate($requests, [
            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bank_name' => 'required'
        ]);

        $bankname = $requests->input('bank_name');
        $image = $requests->file('select_file');
        $new_name = '_bankaccount_'.date('Y-m-d').$num.'.png';
        $image->move(public_path("_bankaccount/images"),$new_name);
        $bankData = DB::table('img_bank_account')->Insert(['bank_name'=>$bankname,'bank_image'=>$new_name]);

        return back()->with('success','อัพโหลดสำเร็จ')->with('path',$new_name);
    }
//    public function destroy($id)
//    {
//        $bankac = DB::table('img_bank_account')->find($id);
//        if($bankac){
//            $bankac->delete();
//        }
//        return redirect()->route('paytaxs.index');
//    }
    public function destroy($id) {
        $query = DB::table('img_bank_account')->where('id', '=', $id);
        $image = $query->first();
        //print_r($image);
        //return 'end';
        \Illuminate\Support\Facades\File::delete(public_path("_bankaccount/images/".$image->bank_image));
        $query->delete();
        return redirect()->route('bankaccount.index');
    }
}
