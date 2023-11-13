<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoadingBay extends Model
{
    use HasFactory;
    protected $fillable =[
        'timbangan_in_id','status'
    ];
}
