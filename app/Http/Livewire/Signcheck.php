<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Signcheck extends Component
{

    public $searchTerm;
    public $address;
    public $aa;

    public function render()
    {

        $searchTerm = $this->searchTerm;
        $aa = DB::table('signboard')->where('address', '=', $searchTerm)->latest('id')->first();
        if ($searchTerm == "") {
            $this->address = "";
        } elseif (!is_null($aa)) {
            $this->address = $aa->s_name;
            if ($aa->s_name == "") {
                $this->address = "บ้านเลขที่ " . $searchTerm . "";
            }
        } else {
            $this->address = "";
        }


//        $this->address = Sign::where('address','LIKE',$searchTerm)->get();
//        $searchTerm = '%' . $this->searchTerm . '%';
//        $this->address = DB::table('ltax_sign_board')->where('address','like',$searchTerm)->get();
//        $this->address = DB::select("SELECT * FROM `ltax_sign_board` WHERE address LIKE $searchTerm" );


        return view('livewire.signcheck');
    }
}
