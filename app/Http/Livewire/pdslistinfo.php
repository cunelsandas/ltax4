<?php

namespace App\Http\Livewire;

use App\Models\Owners;
use App\Models\Status;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class pdslistinfo extends Component
{
    use WithPagination;

    public $searchTerm = "";
    public $getData;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->getData = DB::table('ltax_owner')
            ->join('ltax_ownertype','ltax_owner.owner_type','=','ltax_ownertype.ot_id')
            ->join('ltax_title_code','ltax_owner.title','=','ltax_title_code.ot_id')
            ->join('ltax_sys_province','ltax_owner.province_id','=','ltax_sys_province.province_id')
            ->join('ltax_sys_amphoe','ltax_owner.amphoe_id','=','ltax_sys_amphoe.amphoe_id')
            ->join('ltax_sys_tambon','ltax_owner.tambon_id','=','ltax_sys_tambon.tambon_id')
            ->where('first_name', 'like', $searchTerm)
            ->orWhere('last_name', 'like', $searchTerm)
            ->orWhere('pop_id', 'like', $searchTerm)
            ->orWhere('codept4', 'like', $searchTerm)
            ->orWhere('address', 'like', $searchTerm)
            ->limit(10)
            ->orderBy('owner_id','asc')
            ->get();

        $getData2 = DB::table('ltax_owner')->join('ltax_ownertype','ltax_owner.owner_type','=','ltax_ownertype.ot_id')
            ->join('ltax_title_code','ltax_owner.title','=','ltax_title_code.ot_id')
            ->join('ltax_sys_province','ltax_owner.province_id','=','ltax_sys_province.province_id')
            ->join('ltax_sys_amphoe','ltax_owner.amphoe_id','=','ltax_sys_amphoe.amphoe_id')
            ->join('ltax_sys_tambon','ltax_owner.tambon_id','=','ltax_sys_tambon.tambon_id')
            ->paginate( 50 );

        return view('livewire.pds6listinfo',['getData2'=>$getData2]);
    }
}
