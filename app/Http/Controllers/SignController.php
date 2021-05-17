<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getData = Auth::guard('signs')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();

//        $getSignData10 = DB::table('signboard')->where('owner_id','=', $getData->owner_id)->orderBy('id','desc')->get()->unique('s_name')->toArray();
        $getSignData10 = DB::table('signboard')->where('owner_id','=', $getData->owner_id)->orderBy('id','desc')->get()->toArray();
        $getSignData = DB::table('signboard')->where('owner_id','=', $getData->owner_id)->first();
        $getDistrict = DB::table('districts')->where('district_code','=', $getSignData->tambon_id)->first();

        return view('sign.index',['getData'=>$getData,'ownerData'=>$ownerData,'getSignData10'=>$getSignData10,'getSignData'=>$getSignData,'getDistrict'=>$getDistrict]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
