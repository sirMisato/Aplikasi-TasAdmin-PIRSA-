@extends('superadmin.template.master')

@section('content')

<h5 class="fw-semibold">Verifikasi Security</h5>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('acc_security') }}" method="POST">
            @csrf
            <!-- Sisi Pertama (6 Kolom) -->
            <br>
            <b><label for="no_kartu_ijin_masuk">Dokumen Surat Jalan</label></b>
            <div class="form-group">
                <label for="no_spa">No. SPA</label>
                <input type="text" name="no_spa" class="form-control" required>
            </div>
           
            <div class="form-group">
                <label for="no_spi">No. SPI</label>
                <input type="text" name="no_spi" class="form-control"required>
            </div>

            <br>
            <b><label for="no_kartu_ijin_masuk">Data Kendaraan</label></b>
            <div class="form-group">
                <label for="nopol">NOPOL</label>
                <input type="text" name="no_pol" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="kir">KIR</label>
                <input type="text" name="kir" class="form-control"required>
            </div>
            <div class="form-group">
                <label for="ban">Ban</label>
                <input type="text" name="ban" class="form-control"required>
            </div>
            <div class="form-group">
                <label for="rem">Rem</label>
                <input type="text" name="rem" class="form-control"required>
            </div>

           
        
    </div>
    <div class="col-md-6">
       
            <!-- Sisi Kedua (6 Kolom) -->
            <br>
            <b><label for="no_kartu_ijin_masuk">DRIVER</label></b>
            <div class="form-group">
                <label for="no_sim">No. SIM</label>
                <input type="text" name="no_sim" class="form-control" required>
            </div>
   
            <div class="form-group">
                <label for="no_kartu_ijin_masuk">No. Kartu Ijin Masuk</label>
                <input type="text" name="no_kartu_ijin_masuk" class="form-control"required>
            </div>
            <div class="form-group">
                <label for="nama_driver">Nama Driver</label>
                <input type="text" name="nama_driver" class="form-control"required>
            </div>
        
           
            <br>
            <b><label for="no_kartu_ijin_masuk">Safety</label></b>
            <div class="form-group">
                <label for="apar">Sepatu Safety</label>
                <input type="text" name="sepatu_safety" class="form-control"required>
            </div>
            <div class="form-group">
                <label for="apar">Rompi</label>
                <input type="text" name="rompi" class="form-control"required>
            </div>
            <div class="form-group">
                <label for="helm">Helm</label>
                <input type="text" name="helm" class="form-control "required>
            </div>
            <div class="form-group">
                <label for="apar">APAR</label>
                <input type="text" name="apar" class="form-control"required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</div>



@endsection

@push('js')
<script>
    new DataTable('#example');


</script>
@endpush