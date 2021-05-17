<?php

namespace App\Http\Controllers;

use App\Models\Land;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LandcheckController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/land';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        //
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

        Auth::guard('lands')->logout();
        return view('land.login');
    }

    public function LandcheckLogin(Request $request)
    {
        Auth::guard('lands')->logout();
        $getpop = $request->post('username');
        $getln =  $request->post('password');

        $pop_id = DB::table('owner')->where('pop_id', '=', $getpop)->first();
        if ($pop_id === null) {
            return redirect()->back()->with(['error_login' => 'กรุณาตรวจสอบเลขบัตรประชาชน หรือเลขที่ดินให้ถูกต้อง']);
        }



        $land_id = DB::table('land')
            ->join('land_owner', 'land.lid', '=', 'land_owner.lid')
            ->where([
                ['ln', '=', $getln],
                ['owner_id','=', $pop_id->owner_id],
            ])
            ->first();

            if ($land_id === null) {
                return redirect()->back()->with(['error_login' => 'กรุณาตรวจสอบเลขบัตรประชาชน หรือเลขที่ดินให้ถูกต้อง']);
            }
        $user = Land::where([
            'owner_id' =>  $land_id->owner_id,
            'lid' => $land_id->lid,
        ])
            ->first();

        if ($user) {
            Auth::guard('lands')->login($user);
            session(['popId' => $getpop]);
            return redirect('/land');
        } else {
            return redirect()->back()->withInput($request->all())->with(['error_login' => 'กรุณาตรวจสอบเลขบัตรประชาชน หรือเลขที่ดินให้ถูกต้อง']);
        }
    }
}
