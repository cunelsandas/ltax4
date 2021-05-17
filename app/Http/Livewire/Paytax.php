<?php

namespace App\Http\Livewire;

use App\Models\Owners;
use App\Models\Status;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Paytax extends Component
{
    use WithPagination;

    public $searchTerm = "";
    public $getData2;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->getData2 = DB::table('owner')
            ->where('fname', 'like', $searchTerm)
            ->orWhere('lname', 'like', $searchTerm)
            ->orWhere('pop_id', 'like', $searchTerm)
            ->orWhere('codept4', 'like', $searchTerm)
            ->orWhere('address', 'like', $searchTerm)
            ->limit(100)
            ->orderBy('owner_id','desc')
            ->get();
      //  dd($this->getData);
        return view('livewire.paytax');
    }
}
