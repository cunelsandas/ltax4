<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandModel extends Model
{
    use HasFactory;

    protected $table = 'ltax_land';

    protected $fillable = [
        'dn'
    ];



}
