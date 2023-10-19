<?php

namespace App\Http\Controllers;

use App\Models\Security;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TrakingKendaraanController extends Controller
{
    //
    public function dashboard(){
        $security = Security::orderBy('id','desc')->get();
        foreach($security as $s){
            list($date, $time) = explode(' ', $s->updated_at);
            $s->tanggal =$date ;
            $s->waktu = $time;
        }
        // return $security;

        return view('superadmin.dashboard',compact('security'));
    }

    public function security(){
        return view('security-verifikasi');

    }

    public function acc_security(Request $request){
        $req= $request->all();
        
        $req['posisi'] = auth()->user()->role;
        $req['status'] = 'start';
        $req['qrcode'] = strtoupper(Str::random(8));


       

       $s= Security::create($req);
        
        return $s;


    }

    public function hse(){
        return view('hse-verifikasi');

    }
    public function acc_hse(){

    }

    public function admin_in(){
        return view('admin-verifikasi');

    }
    public function acc_admin_in(){

    }

    public function timbangan_in(){
        return view('timbangan_in-verifikasi');

    }
    public function acc_timbangan_in(){

    }

    public function loading_bay(){
        return view('loading_bay-verifikasi');

    }
    public function acc_loading_bay(){

    }
    public function timbangan_out(){
        return view('timbangan_out-verifikasi');

    }
    public function acc_timbangan_out(){

    }
    public function admin_out(){
        return view('admin_out-verifikasi');

    }
    public function acc_admin_out(){

    }
  

}
