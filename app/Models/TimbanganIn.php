<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimbanganIn extends Model
{
    use HasFactory;
    protected $fillable =[
        'berat_bersih','admin_in_id'
    ];
}
