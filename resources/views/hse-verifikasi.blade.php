@extends('superadmin.template.master')

@section('content')

@if(isset($data))
@if($data->posisi=='security')


<h5 class="fw-semibold">Verifikasi HSE</h5>
<div class="container">
        <div class="border p-2">
        <label for="">DOKUMEN SURAT JALAN</label>
                <div class="md-1">
                <label for="">Nomor SPA:</label>
                    <input type="text" id="" value="{{ $data->no_spa }}" readonly>
                    <label for="">Nomor SPI:</label>
                    <input type="text" id="" value="{{ $data->no_spi}}"readonly>
                </div>
        </div>
        <div class="border p-2">
        <label for="">DRIVER</label>
                <div class="md-2">
                    <label for="">Nomor SIM:</label>
                    <input type="text" id="" value="{{ $data->no_sim }}" readonly>
                    <label for="">No. Kartu Ijin Masuk:</label>
                    <input type="text" id="" value="{{ $data->no_kartu_ijin_masuk}}"readonly>
                    <label for="">Nama:</label>
                    <input type="text" id="" value="{{ $data->nama_driver}}"readonly>
                </div>
                
                </div>
        </div>
        <div class="border p-2">
        <label for="">Data Kendaraan</label>
        <div class="md-1">
                    <label for="">Nomor Polisi:</label>
                    <input type="text" id="" value="{{ $data->no_pol }}" readonly>
                    <label for="">kir_head_truck:</label>
                    <input type="text" id="" value="{{ $data->kir}}"readonly>
                    <label for="">BAN:</label>
                    <input type="text" id="" value="{{ $data->ban}}"readonly>
                    <label for="">REM:</label>
                    <input type="text" id="" value="{{ $data->rem}}"readonly>
                    
                </div>
                </div>
                <div class="border p-2">
                <label for="">Safety</label>
                <div class="md-1">
                    <label for="">Sepatu Safety:</label>
                    <input type="text" id="" value="{{ $data->sepatu_safety }}" readonly>
                    <label for="">Rompi:</label>
                    <input type="text" id="" value="{{ $data->rompi}}"readonly>
                    <label for="">Helm:</label>
                    <input type="text" id="" value="{{ $data->helm}}"readonly>
                    <label for="">APAR:</label>
                    <input type="text" id="" value="{{ $data->apar}}"readonly>
                    
                </div>
                </div>
<div class="row">
    <div class="col-md-4">
        <form method="POST" action="{{ url('acc_hse') }}">
            @csrf

            <div class="form-group">
                <input type="hidden" name="security_id" class="form-control" required value="{{$data->id}}">
                <label>Cek Fisik Armada</label>
                <br>

                <div>
                    <input type="radio" id="cek_fisik_armada_ya" name="checklist[cek_fisik_armada]" value="Ya">
                    <label for="cek_fisik_armada_ya">Ya</label>
                </div>
                <div>
                    <input type="radio" id="cek_fisik_armada_tidak" name="checklist[cek_fisik_armada]" value="Tidak">
                    <label for="cek_fisik_armada_tidak">Tidak</label>
                </div>
            </div>

            <div class="form-group">
                <label>KIR Head Truck</label>
                <div>
                    <input type="radio" id="kir_head_truck_ya" name="checklist[kir_head_truck]" value="Ya">
                    <label for="kir_head_truck_ya">Ya</label>
                </div>
                <div>
                    <input type="radio" id="kir_head_truck_tidak" name="checklist[kir_head_truck]" value="Tidak">
                    <label for="kir_head_truck_tidak">Tidak</label>
                </div>
            </div>
            <div class="form-group">
                <label>Aproval</label>
                <br>
                <div>
                    <input type="radio" id="aproval" name="checklist[aproval]" value="Ya">
                    <label for="amd_ya">Ya</label>
                </div>
                <div>
                    <input type="radio" id="aproval" name="checklist[aproval]" value="Tidak">
                    <label for="amd_tidak">Tidak</label>
                </div>
            </div>

    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>TKIR Tangki</label>
            <br>
            <div>
                <input type="radio" id="tkir_tangki_ya" name="checklist[tkir_tangki]" value="Ya">
                <label for="tkir_tangki_ya">Ya</label>
            </div>
            <div>
                <input type="radio" id="tkir_tangki_tidak" name="checklist[tkir_tangki]" value="Tidak">
                <label for="tkir_tangki_tidak">Tidak</label>
            </div>
        </div>

        <div class="form-group">
            <label>Ijin Katup Pengaman</label>
            <div>
                <input type="radio" id="ijin_katup_pengaman_ya" name="checklist[ijin_katup_pengaman]" value="Ya">
                <label for="ijin_katup_pengaman_ya">Ya</label>
            </div>
            <div>
                <input type="radio" id="ijin_katup_pengaman_tidak" name="checklist[ijin_katup_pengaman]" value="Tidak">
                <label for="ijin_katup_pengaman_tidak">Tidak</label>
            </div>
        </div>
        <div class="form-group">
            <label>AMD</label>
            <br>
            <div>
                <input type="radio" id="amd_ya" name="checklist[amd]" value="Ya">
                <label for="amd_ya">Ya</label>
            </div>
            <div>
                <input type="radio" id="amd_tidak" name="checklist[amd]" value="Tidak">
                <label for="amd_tidak">Tidak</label>
            </div>


        </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">


        <label>Catatan</label>
        <div>
            <input type="text" id="aproval" name="catatan" class="form-control">

        </div>
        <label>Kelengkapan</label>
        <div>
            <input type="text" id="aproval" name="kelengkapan" class="form-control">

        </div>


        <label for="hse">List HSE</label>
        <select id="hse" name="list_hse" class="form-control">
            <option value="armada_dd">Armada DD</option>
            <option value="new">New</option>
            <option value="repair">Repair</option>
        </select>



    </div>

    </div>
    <div class="col-md-12" style="margin-top: 10px;"> 
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
@elseif($data->posisi=='HSE')
<div class="container">
        <div class="border p-10">
        <h2><label for="">Data Selesai diproses di HSE, dan lanjut di validasi Admin IN</label></h2>
        </div>
@else
<div class="container">
        <div class="border p-10">
        <h2><label for="">Maaf Belum ada data yang diproses di Posisi HSE</label></h2>
        </div>

@endif
 
    @else

 <div class="container">
        <div class="border p-10">
        <h2><label for="">Maaf Belum ada data yang dibuat</label></h2>
        </div>
@endif



@endsection

@push('js')
<script>
    new DataTable('#example');
</script>
@endpush