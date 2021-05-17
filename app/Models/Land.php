<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Land extends Authenticatable
{
    use HasFactory;
    use Notifiable;


    protected $table = 'land_owner';
    protected $primaryKey = 'id';
    protected $fillable = [
        'owner_id',
        'lid',
    ];


}
