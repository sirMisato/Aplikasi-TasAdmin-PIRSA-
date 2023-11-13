<?php

namespace App\Http\Controllers;

use App\Models\AdminIn;
use App\Models\AdminOut;
use App\Models\HSE;
use App\Models\LoadingBay;
use App\Models\Log;
use App\Models\Security;
use App\Models\TimbanganIn;
use App\Models\TimbanganOut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $log = Log::orderBy('id','desc')->get();
        foreach($log as $s){
            list($date, $time) = explode(' ', $s->updated_at);
            $s->tanggal =$date ;
            $s->waktu = $time;
        }
        // return $security;

        return view('superadmin.dashboard',compact('security','log'));
    }

    public function security(){
        return view('security-verifikasi');

    }

    public function acc_security(Request $request){
        $req= $request->all();
        
        $req['posisi'] = auth()->user()->role;
        $req['status'] = 'start';
        $req['qrcode'] = strtoupper(Str::random(8));


       

       Security::create($req);
        
        // return $s;
        return redirect('dashboard')->with('success','Data Security Berhasil Ditambahkan');


    }

    public function hse(){
        $data =Security::orderBy('id','desc')->first();
        return view('hse-verifikasi',compact('data'));

    }
    public function acc_hse(Request $request){
        $data = $request->all(); 
        $checklistData = $request->input('checklist', []);
        // $data['status'] = 'start';


        // return $request->list_hse;

        // return $checklistData['ijin_katup_pengaman'];
        $Data_HSE = [
            'security_id' => $data['security_id'],
            'kelengkapan' => $data['kelengkapan'],
            'list_hse' =>$request->list_hse,
            'catatan' => $data['catatan'],
           
            'cek_fisik_armada' => $checklistData['cek_fisik_armada'], // Checkbox
            'kir_head_truck' =>$checklistData['kir_head_truck'], // Checkbox
            'tkir_tangki' => $checklistData['tkir_tangki'], // Checkbox
            'ijin_katup_pengaman' => $checklistData['ijin_katup_pengaman'], // Checkbox
            'amd' => $checklistData['amd'], // Checkbox
            'aproval' => $checklistData['aproval'], //
        ];

        Security::where('id',$request->security_id)->update([
            'posisi'=>'HSE',
             'status' => 'start',
        ]);

        // return $securityData;
    
        // Membuat model Security dan mengisinya dengan data dari form
         HSE::create($Data_HSE);
         return redirect('dashboard')->with('success','Data HSE Berhasil Ditambahkan');


    }

    public function admin_in(){
        $data =HSE::orderBy('id','desc')->first();
        $data2 =Security::orderBy('id','desc')->first();
        return view('admin_in-verifikasi',compact('data','data2'));

    }
    public function acc_admin_in(Request $request){

        $data = $request->all(); 
        $checklistData = $request->input('checklist', []);
     
       $Data_AdminIn = [
        'hse_id' => $data['hsee_id'],
        'no_sim' => $checklistData['no_sim'],
        'no_kartu_ijin_masuk' =>$checklistData['no_kartu_ijin_masuk'],
        'nama_driver' => $checklistData['nama_driver'],
        'status' => $request->validasi,
        'no_pol' => $checklistData['no_pol'], // Checkbox
        'kir' =>$checklistData['kir'], // Checkbox
        'ban' => $checklistData['ban'], // Checkbox
        'rem' => $checklistData['rem'], // Checkbox

    ];
    AdminIn::create($Data_AdminIn);
    // return $Data_AdminIn;
    Security::where('id',$request->security_id)->update([
        'posisi'=>'Admin In',
        'status' => $request->validasi,
    ]);
    return redirect('dashboard')->with('success','Data Admin In Berhasil Ditambahkan');
 

        // return $securityData;

    }

    public function timbangan_in(){
        $admin_in =AdminIn::orderBy('id','desc')->first();
        $timbangan =TimbanganIn::orderBy('id','desc')->first();
        $data =Security::orderBy('id','desc')->first();
        return view('timbangan_in-verifikasi',compact('timbangan','admin_in','data'));

    }
    public function acc_timbangan_in(Request $request){
        $data = $request->all(); 
     
        $timbanganin= [
         'admin_in_id' => $data['admin_in_id'],
         'berat_bersih' => $data['berat_bersih'],
         'status' => 'done',
 
 
     ];
     TimbanganIn::create($timbanganin);
     Security::where('id',$request->security_id)->update([
         'posisi'=>'Timbangan In',
         'status' => 'done',
     ]);
     return redirect('dashboard')->with('success','Data Admin Berhasil Ditambahkan');

    }

    public function loading_bay(){
        $data = DB::table('admin_ins')
        ->leftJoin('h_s_e_s','admin_ins.hse_id','h_s_e_s.id')
        ->leftJoin('securities','h_s_e_s.security_id','securities.id')
        ->select('h_s_e_s.*','securities.*','admin_ins.*')
        ->first();
        // return $data;
        $timbangan =TimbanganIn::orderBy('id','desc')->first();
        $data =Security::orderBy('id','desc')->first();
        return view('loading_bay-verifikasi',compact('data','timbangan','data'));

    }
    public function acc_loading_bay(Request $request){
        $data = $request->all(); 

    
     
       $loadingbay= [
        'timbangan_in_id' => $data['timbangan_in_id'],
        'status' => 'start',


    ];

    LoadingBay::create($loadingbay);
    Security::where('id',$request->security_id)->update([
        'posisi'=>'Loading Bay',
        'status' => 'start',
    ]);
    return redirect('dashboard')->with('success','Data Loading Bay Berhasil Ditambahkan');
 

    }
    public function timbangan_out(){
        $loadingbay =LoadingBay::orderBy('id','desc')->first();
        // $timbangan =TimbanganIn::orderBy('id','desc')->first();
        $data =Security::orderBy('id','desc')->first();
        return view('timbangan_out-verifikasi',compact('data','loadingbay'));

    }
    public function acc_timbangan_out(Request $request){
        $data = $request->all(); 
     
        $timbanganout= [
         'loading_bay_id' => $data['loading_bay_id'],
         'berat_kotor' => $data['berat_kotor'],
         'status' => 'done',
 
 
     ];
    //  return $timbanganout;
     TimbanganOut::create($timbanganout);
     Security::where('id',$request->security_id)->update([
         'posisi'=>'Timbangan Out',
         'status' => 'done',
     ]);
     return redirect('dashboard')->with('success','Data Timbangan Out Berhasil Ditambahkan');

    }
    public function admin_out(){
        $data = DB::table('admin_ins')
        ->leftJoin('h_s_e_s','admin_ins.hse_id','h_s_e_s.id')
        ->leftJoin('securities','h_s_e_s.security_id','securities.id')
        ->select('h_s_e_s.*','securities.*','admin_ins.*')
        ->first();

        $timbangan =TimbanganOut::orderBy('id','desc')->first();
        $data2 =Security::orderBy('id','desc')->first();

        return view('admin_out-verifikasi',compact('data','data2','timbangan'));

    }
    public function acc_admin_out(Request $request){
        $data = $request->all();
        $Data_AdminOut = [
            'timbangan_out_id' => $data['timbangan_out_id'],
            'status'=> $request->validasi

    
        ];
        // return $Data_AdminOut;
        AdminOut::create($Data_AdminOut);
    
        // return $Data_AdminIn;
        Security::where('id',$request->security_id)->update([
            'posisi'=>'Admin Out',
            'status' => $request->validasi,
        ]);

        return redirect('dashboard')->with('success','Data Admin Out Berhasil Ditambahkan');

    }
    

}
