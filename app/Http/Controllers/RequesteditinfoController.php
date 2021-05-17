<?php

namespace App\Http\Controllers;

use App\Models\Land;
use App\Models\Owners;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Notes;
use App\Models\Status;
use function PHPUnit\Framework\isNull;

class RequesteditinfoController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yearNow = Carbon::now()->year+543;
        $getData = DB::table('ltax_land_edit_info')->paginate( 100 );

        return view('dashboard.requesteditinfo.requesteditinfoList',['getData'=>$getData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Status::all();
        return view('dashboard.paytaxs.create', [ 'statuses' => $statuses ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'             => 'required|min:1|max:64',
            'content'           => 'required',
            'status_id'         => 'required',
            'applies_to_date'   => 'required|date_format:Y-m-d',
            'note_type'         => 'required'
        ]);
        $user = auth()->user();
        $note = new Notes();
        $note->title     = $request->input('title');
        $note->content   = $request->input('content');
        $note->status_id = $request->input('status_id');
        $note->note_type = $request->input('note_type');
        $note->applies_to_date = $request->input('applies_to_date');
        $note->users_id = $user->id;
        $note->save();
        $request->session()->flash('message', 'Successfully created note');
        return redirect()->route('paytaxs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Notes::with('user')->with('status')->find($id);
        return view('dashboard.paytaxs.noteShow', [ 'note' => $note ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $dn
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $yearNow = Carbon::now()->year+543;
        $getData = Auth::guard('lands')->user();


        dd($getData);
        return view('dashboard.requesteditinfo.edit', []);
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
        //var_dump('bazinga');
        //die();
        $validatedData = $request->validate([
            'title'             => 'required|min:1|max:64',
            'content'           => 'required',
            'status_id'         => 'required',
            'applies_to_date'   => 'required|date_format:Y-m-d',
            'note_type'         => 'required'
        ]);
        $note = Notes::find($id);
        $note->title     = $request->input('title');
        $note->content   = $request->input('content');
        $note->status_id = $request->input('status_id');
        $note->note_type = $request->input('note_type');
        $note->applies_to_date = $request->input('applies_to_date');
        $note->save();
        $request->session()->flash('message', 'Successfully edited note');
        return redirect()->route('paytaxs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Notes::find($id);
        if($note){
            $note->delete();
        }
        return redirect()->route('paytaxs.index');
    }
}
