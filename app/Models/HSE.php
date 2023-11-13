<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HSE extends Model
{
    use HasFactory;
    protected $fillable =[
        'security_id',
    'cek_fisik_armada',
    'kir_head_truck',
        'tkir_tangki',
        'ijin_katup_pengaman',
        'amd',
        'kelengkapan',
       'catatan',
        'status','list_hse','aproval'


    ];
}
