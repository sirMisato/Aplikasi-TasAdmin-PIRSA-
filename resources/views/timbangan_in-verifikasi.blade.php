@extends('superadmin.template.master')

@section('content')

<h5 class="fw-semibold">Timbangan IN</h5>

@if($admin_in&&$data)
<h5 class="fw-semibold">Verifikasi Timbangan IN</h5>

<div class="row">
    <div class="col-md-6">
        <form action="{{ url('acc_timbangan_in') }}" method="POST">
            @csrf
            <!-- Sisi Pertama (6 Kolom) -->
         
            <input type="hidden" name="admin_in_id" class="form-control" required value="{{$admin_in->id}}">
            <input type="hidden" name="security_id" class="form-control" required value="{{$data->id}}">
    
          
            
            <br>
            <b><label for="no_kartu_ijin_masuk">Hasil Timbangan</label></b>
            <div class="form-group">
                <label for="no_spa">Berat Bersih</label>
                <input type="text" name="berat_bersih" class="form-control" required>
            </div>

    </div>

    <div class="col-md-12" style="margin-top: 10px;"> <!-- Sisi Tombol Submit -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@else
<h5 class="fw-semibold">Data Tidak ditemukan</h5>
             @endif
@endsection

@push('js')
<script>
    new DataTable('#example');
</script>
@endpush