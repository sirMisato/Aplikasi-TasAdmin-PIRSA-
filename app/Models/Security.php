<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Security extends Model
{
    use HasFactory;
    protected $fillable =[
        'qrcode',
    'no_spa',
        'no_spi',
        'no_pol',
        'kir',
       'ban',
        'rem',
        'no_sim',
        'no_kartu_ijin_masuk',
       'nama',
        'sepatu_safety',
        'rompi',
       'helm','nama_driver',
        'apar','posisi','status'
    ];
}
