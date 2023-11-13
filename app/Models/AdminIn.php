<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminIn extends Model
{
    use HasFactory;
    protected $fillable =[
    
        'no_pol',
        'kir',
       'ban',
        'rem',
        'no_sim',
        'no_kartu_ijin_masuk',
      'nama_driver',
        'status','hse_id'
    ];
}
