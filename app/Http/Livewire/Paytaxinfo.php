<?php

namespace App\Http\Livewire;

use App\Models\Owners;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Paytaxinfo extends Component
{
    use WithPagination;

    public $searchTerm = "";
    public $getData;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->getData = DB::table('owner')
            ->where('fname', 'like', $searchTerm)
            ->orWhere('lname', 'like', $searchTerm)
            ->orWhere('pop_id', 'like', $searchTerm)
            ->orWhere('codept4', 'like', $searchTerm)
            ->orWhere('address', 'like', $searchTerm)
            ->limit(30)
            ->orderBy('owner_id','asc')
            ->get();

        $yearNow = Carbon::now()->year+543;
        $getData2 = DB::table('owner')->paginate( 100 );

        $getstatuspayland = DB::table('payment_pds')->join('owner','payment_pds.owner_id','=','owner.owner_id')
            ->get();
        $getstatuspaybuild = DB::table('payment_pds')->join('owner','payment_pds.owner_id','=','owner.owner_id')
            ->get();

        $getstatuspaysign = DB::table('payment_pds')->join('owner','payment_pds.owner_id','=','owner.owner_id')
            ->get();
      //  dd($this->getData);
        return view('livewire.paytaxinfo',['getData2'=>$getData2,'getstatuspayland'=>$getstatuspayland,
            'getstatuspaybuild'=>$getstatuspaybuild,'getstatuspaysign'=>$getstatuspaysign]);
    }
}
