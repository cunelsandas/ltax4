<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Landeditinfo extends Model
{
    use HasFactory;
    use Notifiable;


    protected $table = 'ltax_land_edit_info';
    protected $primaryKey = 'id';


}
