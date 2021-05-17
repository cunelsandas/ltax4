<?php

namespace App\Http\Livewire;

use App\Models\Owners;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class pds8listinfo extends Component
{
    use WithPagination;

    public $searchTerm = "";
    public $getData;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->getData = DB::table('owner')->join('districts','owner.tambon_id','=','districts.district_code')
            ->join('ltax_ownertype','owner.o_type','=','ltax_ownertype.ot_id')
            ->where('fname', 'like', $searchTerm)
            ->orWhere('lname', 'like', $searchTerm)
            ->orWhere('pop_id', 'like', $searchTerm)
            ->orWhere('codept4', 'like', $searchTerm)
            ->orWhere('address', 'like', $searchTerm)
            ->limit(10)
            ->orderBy('owner_id','desc')
            ->get();

        $getData2 = DB::table('owner')->join('districts','owner.tambon_id','=','districts.district_code')
            ->join('ltax_ownertype','owner.o_type','=','ltax_ownertype.ot_id')
            ->orderBy('owner_id','desc')
            ->paginate( 50 );

        return view('livewire.pds8listinfo',['getData2'=>$getData2]);
    }
}
