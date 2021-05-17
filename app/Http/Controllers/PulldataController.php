<?php

namespace App\Http\Controllers;

use App\Models\PullModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use \jdavidbakr\ReplaceableModel\ReplaceableModel;
use Exception;

class PulldataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {


        return view('pull');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Select platform only 1 use
        //TODO command for Windows
        //$mysqldump = "C:\\xampp\mysql\bin\mysqldump";
        //$mysqlexec = "C:\\xampp\mysql\bin\mysql";

        //TODO command for linux
        $mysqldump = "mysqldump";
        $mysqlexec = "mysql";
        //--------------------------------------------End Select platform ------------------------------------------

        //TODO All table name in use in project
        $l_owner = "owner";
  


        //--------------------------------------------End tablename in use ------------------------------------------
        //LTAX 4 Dont need
        //TODO create clone table name for use in project from local ltax
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_owner . " LIKE owner");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_owner . " SELECT * FROM owner");
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_building . " LIKE building");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_building . " SELECT * FROM building");
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_ownt . " LIKE owner_type");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_ownt . " SELECT * FROM owner_type");
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_land . " LIKE land");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_land . " SELECT * FROM land");
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_title_code . " LIKE title_code");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_title_code . " SELECT * FROM title_code");
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_b_mat . " LIKE b_mat");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_b_mat . " SELECT * FROM b_mat");
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_b_type . " LIKE b_type");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_b_type . " SELECT * FROM b_type");
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_b_price . " LIKE bprice");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_b_price . " SELECT * FROM bprice");
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_sign_board . " LIKE sign_board");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_sign_board . " SELECT * FROM sign_board");
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_sign_type . " LIKE sign_type");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_sign_type . " SELECT * FROM sign_type");
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_sys_amphoe . " LIKE sys_amphoe");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_sys_amphoe . " SELECT * FROM sys_amphoe");
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_sys_bank . " LIKE sys_bank");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_sys_bank . " SELECT * FROM sys_bank");
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_sys_province . " LIKE sys_province");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_sys_province . " SELECT * FROM sys_province");
        // DB::connection('taxloc')->statement("CREATE TABLE IF NOT EXISTS " . $l_sys_tambon . " LIKE sys_tambon");
        // DB::connection('taxloc')->statement("INSERT IGNORE INTO " . $l_sys_tambon . " SELECT * FROM sys_tambon");

        //--------------------------------------------End clone table name for use in project form local ltax------------------------------------------

        $returnVar = NULL;
        $output = NULL;

        //TODO start dump mysql form local ltax
        try {
            exec("$mysqldump --user=" . config('database.connections.taxloc.username') . " --password=" . config('database.connections.taxloc.password') . " --port=" . config('database.connections.taxloc.port') . " --host=" . config('database.connections.taxloc.host') . " " . config('database.connections.taxloc.database') . " " . $l_owner . " > " . storage_path() . "/" . $l_owner . "", $output, $returnVar);
        } catch (Exception $e) {
            return "0 " . $e->errorInfo; //some error
        }
        //--------------------------------------------End dump mysql form local ltax------------------------------------------

        //TODO start execute mysql to our db
        try {
            exec("$mysqlexec --user=" . config('database.connections.mysql.username') . " --password=" . config('database.connections.mysql.password') . " --host=" . config('database.connections.mysql.host') . " --port=" . config('database.connections.mysql.port') . " --database=" . config('database.connections.mysql.database') . " < " . storage_path() . "/" . $l_owner . "", $output, $returnVar);
        } catch (Exception $e) {
            return "0 " . $e->errorInfo; //some error
        }
        //--------------------------------------------End execute mysql to our db------------------------------------------

        $update = DB::table('ltax_update')->where('id', 1)->get();
        foreach ($update as $v) {
            $plus = $v->update_count + 1;
        }
        $goplus = [
            'update_count' => $plus
        ];
        DB::table('ltax_update')->where('id', 1)->update($goplus);

        foreach ($update as $v) {
            $date = Carbon::parse($v->updated_at)->locale('th_TH')->isoFormat('LL LTS');
            $update->updated_at = $date;
        }

        $result = [
            'update' => $update->updated_at
        ];

        return response()->json($result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dateget = DB::table('ltax_update')->where('id', 1)->get('updated_at');
        foreach ($dateget as $v) {
            $date = Carbon::parse($v->updated_at)->locale('th_TH')->isoFormat('LL LTS');
        }
        $result = [
            'update' => $date
        ];

        return response()->json($result);
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

    public function pulldata()
    {
    }

    public function getdate()
    {
    }

    public function test()
    {
    }
}
