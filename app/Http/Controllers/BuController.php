<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getData = Auth::guard('bus')->user();
        $ownerData = DB::table('owner')->where('owner_id','=', $getData->owner_id)->first();
        $titleData = DB::table('title_code')->where('ot_id','=', $ownerData->title)->first();
        $tambonData = DB::table('sys_tambon')->where('tambon_id','=', $ownerData->tambon_id)->first();
        $amphoeData = DB::table('sys_amphoe')->where('amphoe_id','=', $ownerData->amphoe_id)->first();
        $provinceData = DB::table('sys_province')->where('province_id','=', $ownerData->province_id)->first();

        return view('bu.index',['getData'=>$getData,'ownerData'=>$ownerData,'titleData'=>$titleData,'tambonData'=>$tambonData,
            'amphoeData'=>$amphoeData,'provinceData'=>$provinceData]);
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
