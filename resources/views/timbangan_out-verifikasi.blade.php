@extends('superadmin.template.master')

@section('content')

<h5 class="fw-semibold">Timbangan Out</h5>

@if($data)

<h5 class="fw-semibold">Verifikasi Timbangan IN</h5>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('acc_timbangan_out') }}" method="POST">
            @csrf
            <!-- Sisi Pertama (6 Kolom) -->
            <input type="hidden" name="loading_bay_id" class="form-control" required value="{{$loadingbay->id}}">
            <input type="hidden" name="security_id" class="form-control" required value="{{$data->id}}">
            <br>
            <b><label for="no_kartu_ijin_masuk">Hasil Timbangan</label></b>
            <div class="form-group">
                <label for="no_spa">Berat Kotor</label>
                <input type="text" name="berat_kotor" class="form-control" required>
            </div>
        </div> <!-- Penutup div col-md-6 -->

        <div class="col-md-6"> <!-- Sisi Kedua (6 Kolom) -->
            <!-- Tempatkan elemen yang sesuai di sini -->
        </div> <!-- Penutup div col-md-6 -->

        <div class="col-md-12" style="margin-top: 10px;"> <!-- Sisi Tombol Submit -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div> <!-- Penutup div row -->
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