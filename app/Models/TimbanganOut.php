<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimbanganOut extends Model
{
    use HasFactory;
    protected $fillable =[
'loading_bay_id','status','berat_kotor'
    ];
}
