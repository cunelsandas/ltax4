<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Condo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CondocheckController extends Controller
{
    public function CondocheckIndex()
    {

        Auth::guard('condo')->logout();
        return view('condo.login');
    }

    public function CondocheckLogin(Request $request)
    {
        Auth::guard('condo')->logout();
        $getpop = $request->post('username');
        $getln =  $request->post('password');

        $pop_id = DB::table('owner')->where('pop_id', '=', $getpop)->first();
        if ($pop_id === null) {
            return redirect()->back()->with(['error_login' => 'กรุณาตรวจสอบเลขบัตรประชาชน หรือเลขที่ดินให้ถูกต้อง']);
        }



        $cd_id = DB::table('cd_room')
            ->join('condo_owner', 'cd_room.cdrid', '=', 'condo_owner.cdroid')
            ->where([
                ['address', '=', $getln],
                ['owner_id','=', $pop_id->owner_id],
            ])
            ->first();

            if ($cd_id === null) {
                return redirect()->back()->with(['error_login' => 'กรุณาตรวจสอบเลขบัตรประชาชน หรือเลขที่ดินให้ถูกต้อง']);
            }
        $user = Condo::where([
            'owner_id' =>  $cd_id->owner_id,
            'cdroid' => $cd_id->cdroid,
        ])
            ->first();

        if ($user) {
            Auth::guard('condo')->login($user);
            session(['popId' => $getpop]);
            return redirect('/condo');
        } else {
            return redirect()->back()->withInput($request->all())->with(['error_login' => 'กรุณาตรวจสอบเลขบัตรประชาชน หรือเลขที่ดินให้ถูกต้อง']);
        }
    }
}
