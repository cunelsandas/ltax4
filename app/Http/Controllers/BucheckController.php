<?php

namespace App\Http\Controllers;

use App\Models\Bu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BucheckController extends Controller
{
    public function BucheckIndex()
    {

        Auth::guard('bus')->logout();
        return view('bu.login');
    }

    public function BucheckLogin(Request $request)
    {
        Auth::guard('bus')->logout();
        $getpop = $request->post('username');

        $pop_id = DB::table('owner')->where('pop_id', '=', $getpop)->get('owner_id')->first();
        if ($pop_id === null) {
            return redirect()->back()->with(['error_login' => 'กรุณาตรวจสอบเลขบัตรประชาชน บ้านเลขที่']);
        }
        $user = Bu::where([
            'oid' => $pop_id->owner_id,
            'address' => $request->password
        ])
            ->latest('annual')
            ->first();

        if ($user) {
            Auth::guard('bus')->login($user);
            session(['popId' => $getpop]);
            return redirect('/bu');
        } else {
            return redirect()->back()->withInput($request->all())->with(['error_login' => 'กรุณาตรวจสอบเลขบัตรประชาชน หรือรหัสผ่าน']);
        }

    }
}
