<?php

namespace App\Http\Livewire;

use App\Models\Owners;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Requesteditinfo extends Component
{
    use WithPagination;

    public $searchTerm = "";
    public $getData;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->getData = DB::table('ltax_land_edit_info')
            ->where('first_name', 'like', $searchTerm)
            ->orWhere('last_name', 'like', $searchTerm)
            ->orWhere('pop_id', 'like', $searchTerm)
            ->orWhere('address', 'like', $searchTerm)
            ->limit(30)
            ->orderBy('owner_id','asc')
            ->get();

        $yearNow = Carbon::now()->year+543;
        $getData2 = DB::table('ltax_land_edit_info')->paginate( 100 );


      //  dd($this->getData);
        return view('livewire.requesteditinfo',['getData2'=>$getData2]);
    }
}
