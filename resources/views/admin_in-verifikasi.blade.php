@extends('superadmin.template.master')

@section('content')

<h5 class="fw-semibold">Admin IN</h5>


@if(isset($data2))
@if($data2->posisi=='HSE')

<div class="row">
    <div class="col-md-4">
        <form method="POST" action="{{ url('acc_admin_in') }}">
            @csrf
            <input type="hidden" name="hsee_id" class="form-control" required value="{{$data->id}}">
            <input type="hidden" name="security_id" class="form-control" required value="{{$data->id}}">
            <div class="form-group">
               
                <label>Cek Nomor Sim</label>
                <br>

                <div>
                    <input type="radio" id="" name="checklist[no_sim]" value="1">
                    <label for="cek_fisik_armada_ya">Ya</label>
                </div>
                <div>
                    <input type="radio" id="" name="checklist[no_sim]" value="0">
                    <label for="">Tidak</label>
                </div>
            </div>

            <div class="form-group">
                <label>No. Kartu Ijin Masuk</label>
                <div>
                    <input type="radio" id="" name="checklist[no_kartu_ijin_masuk]" value="1">
                    <label for="">Ya</label>
                </div>
                <div>
                    <input type="radio" id="" name="checklist[no_kartu_ijin_masuk]" value="0">
                    <label for="">Tidak</label>
                </div>
            </div>
            <div class="form-group">
                <label>Nama DRIVER</label>
                <br>
                <div>
                    <input type="radio" id="" name="checklist[nama_driver]" value="1">
                    <label for="">Ya</label>
                </div>
                <div>
                    <input type="radio" id="" name="checklist[nama_driver]" value="0">
                    <label for="">Tidak</label>
                </div>
            </div>

    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>NOPOL</label>
            <br>
            <div>
                <input type="radio" id="" name="checklist[no_pol]" value="1">
                <label for="">Ya</label>
            </div>
            <div>
                <input type="radio" id="" name="checklist[no_pol]" value="0">
                <label for="">Tidak</label>
            </div>
        </div>

        <div class="form-group">
            <label>KIR</label>
            <div>
                <input type="radio" id="" name="checklist[kir]" value="1">
                <label for="">Ya</label>
            </div>
            <div>
                <input type="radio" id="" name="checklist[kir]" value="0">
                <label for="">Tidak</label>
            </div>
        </div>
        <div class="form-group">
            <label>BAN</label>
            <br>
            <div>
                <input type="radio" id="" name="checklist[ban]" value="1">
                <label for="amd_ya">Ya</label>
            </div>
            <div>
                <input type="radio" id="" name="checklist[ban]" value="0">
                <label for="">Tidak</label>
            </div>
            


        </div>
    </div>


    <div class="col-md-4">

    <div class="form-group">
            <label>REM</label>
            <br>
            <div>
                <input type="radio" id="amd_ya" name="checklist[rem]" value="1">
                <label for="amd_ya">Ya</label>
            </div>
            <div>
                <input type="radio" id="amd_tidak" name="checklist[rem]" value="0">
                <label for="amd_tidak">Tidak</label>
            </div>
            


        </div>
    <div class="form-group">


        <label for="validasi">validasi</label>
        <select id="validasi" name="validasi" class="form-control">
            <option value="start"> START</option>
            <option value="stop">STOP</option>
            <option value="done">DONE</option>
        </select>



    </div>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@elseif($data2->posisi=='Admin In')
<div class="container">
        <div class="border p-10">
        <h2><label for="">Data Selesai diproses di Admin In, dan lanjut di validasi Timbangan IN</label></h2>
        </div>
@else
<div class="container">
        <div class="border p-10">
        <h2><label for="">Maaf Belum ada data yang diproses di Posisi Admin In</label></h2>
        </div>
</div>
@endif

@endif
<div class="container">
        <div class="border p-10">
        <h2><label for="">Maaf Belum ada data yang diproses di Posisi Admin In</label></h2>
        </div>
</div>

@endsection

@push('js')
<script>
    new DataTable('#example');


</script>
@endpush