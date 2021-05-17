<?php

namespace App\Http\Livewire;

use App\Models\Owners;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class pds6listinfo extends Component
{
    use WithPagination;

    public $searchTerm = "";
    public $getData;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->getData = DB::table('owner')->join('pds3','owner.owner_id','=','pds3.l_owner_id')
            ->join('districts','owner.tambon_id','=','districts.district_code')
            ->join('ltax_ownertype','owner.o_type','=','ltax_ownertype.ot_id')
            ->where('owner.fname', 'like', $searchTerm)
            ->orWhere('owner.lname', 'like', $searchTerm)
            ->orWhere('owner.pop_id', 'like', $searchTerm)
            ->orWhere('owner.codept4', 'like', $searchTerm)
            ->orWhere('owner.address', 'like', $searchTerm)
            ->limit(10)
            ->orderBy('owner.owner_id','desc')
            ->groupBy('owner.owner_id')
            ->get();


        $getData2 = DB::table('owner')->join('pds3','owner.owner_id','=','pds3.l_owner_id')
            ->join('districts','owner.tambon_id','=','districts.district_code')
            ->join('ltax_ownertype','owner.o_type','=','ltax_ownertype.ot_id')
            ->orderBy('owner.owner_id','desc')
            ->groupBy('owner.owner_id')
            ->paginate( 50 );



        return view('livewire.pds6listinfo',['getData2'=>$getData2]);
    }
}
