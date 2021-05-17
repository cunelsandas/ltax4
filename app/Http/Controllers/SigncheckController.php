<?php

namespace App\Http\Controllers;

use App\Models\Sign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SigncheckController extends Controller
{
    public function SigncheckIndex()
    {


        return view('sign.login');
    }

    public function SigncheckLogin(Request $request)
    {
        Auth::guard('signs')->logout();
        $getpop = $request->post('username');
        $pop_id = DB::table('owner')->where('pop_id', '=', $getpop)->get('owner_id')->first();
        if ($pop_id === null) {
            return redirect()->back()->with(['error_login' => 'กรุณาตรวจสอบเลขบัตรประชาชน บ้านเลขที่']);
        }
        $user = Sign::where([
            'owner_id' => $pop_id->owner_id,
            'address' => $request->password
        ])
//            ->latest('annual')
            ->first();

        if ($user) {
            Auth::guard('signs')->login($user);
            session(['popId' => $getpop]);
            return redirect('/sign');
        } else {
            return redirect()->back()->withInput($request->all())->with(['error_login' => 'กรุณาตรวจสอบเลขบัตรประชาชน บ้านเลขที่']);
        }
    }
}
