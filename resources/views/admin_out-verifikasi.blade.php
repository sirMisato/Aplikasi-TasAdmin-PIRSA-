@extends('superadmin.template.master')

@section('content')

<h5 class="fw-semibold">Admin out</h5>
@if($data)

<div class="row">
    <div class="col-md-4">
        <table border="1" style="border-collapse: collapse; width: 70%;" class="form-table">

            Cek Kondisi
            <tr>
                <th>Kolom</th>
                <th>Validasi</th>
            </tr>

            <tr>
                <td>cek_fisik_armada</td>
                <td>{{ $data->cek_fisik_armada }}</td>
            </tr>
            <tr>
                <td>kir_head_truck</td>
                <td>{{ $data->kir_head_truck }}</td>
            </tr>
            <tr>
                <td>tkir_tangki</td>
                <td>{{ $data->tkir_tangki }}</td>
            </tr>
            <tr>
                <td>ijin_katup_pengaman</td>
                <td>{{ $data->ijin_katup_pengaman }}</td>
            </tr>
            <tr>
                <td>amd</td>
                <td>{{ $data->amd }}</td>
            </tr>
            <tr>
                <td>kelengkapan</td>
                <td>{{ $data->kelengkapan }}</td>
            </tr>
            <tr>
                <td>approval</td>
                <td>{{ $data->aproval }}</td>
            </tr>
            <tr>
                <td>catatan</td>
                <td>{{ $data->catatan }}</td>
            </tr>
            <tr>
                <td>list_hse</td>
                <td>{{ $data->list_hse }}</td>
            </tr>


        </table>

    </div>

    <div class="col-md-4">
        <table border="1" style="border-collapse: collapse; width: 70%;">
            Dokumen Surat Jalan dan Safety
            <tr>
                <th>Kolom</th>
                <th>Nilai</th>
            </tr>


            <tr>
                <td>no_spa</td>
                <td>{{ $data->no_spa }}</td>
            </tr>
            <tr>
                <td>no_spi</td>
                <td>{{ $data->no_spi }}</td>
            </tr>

            <tr>
                <td>sepatu_safety</td>
                <td>{{ $data->sepatu_safety }}</td>
            </tr>
            <tr>
                <td>rompi</td>
                <td>{{ $data->rompi }}</td>
            </tr>
            <tr>
                <td>helm</td>
                <td>{{ $data->helm }}</td>
            </tr>
            <tr>
                <td>apar</td>
                <td>{{ $data->apar }}</td>
            </tr>

            <tr>
                <td>status</td>
                <td>{{ $data->status }}</td>
            </tr>

        </table>

    </div>

    <div class="col-md-4">
        <table border="1" style="border-collapse: collapse; width: 70%;">
            Validasi Data Kendaraan dan Driver
            <tr>
                <th>Kolom</th>
                <th>Nilai</th>
            </tr>
            <tr>
                <td>no_pol</td>
                <td>{{ $data->no_pol }}</td>
            </tr>
            <tr>
                <td>kir</td>
                <td>{{ $data->kir }}</td>
            </tr>
            <tr>
                <td>ban</td>
                <td>{{ $data->ban }}</td>
            </tr>
            <tr>
                <td>rem</td>
                <td>{{ $data->rem }}</td>
            </tr>
            <tr>
                <td>no_sim</td>
                <td>{{ $data->no_sim }}</td>
            </tr>
            <tr>
                <td>no_kartu_ijin_masuk</td>
                <td>{{ $data->no_kartu_ijin_masuk }}</td>
            </tr>

            <tr>
                <td>nama_driver</td>
                <td>{{ $data->nama_driver }}</td>
            </tr>
            <tr>
                <td>posisi</td>
                <td>{{ $data->posisi }}</td>
            </tr>
            <tr>
                <td>status</td>
                <td>{{ $data->status }}</td>
            </tr>
            <tr>
                <td>hse_id</td>
                <td>{{ $data->hse_id }}</td>
            </tr>
        </table>

    </div>
</div>
<br>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('acc_admin_out') }}" method="POST">
            @csrf
            <input type="hidden" name="timbangan_out_id" class="form-control" required value="{{$timbangan->id}}">
            <input type="hidden" name="security_id" class="form-control" required value="{{$data2->id}}">
            <div class="form-group">


<label for="validasi">validasi</label>
<select id="validasi" name="validasi" class="form-control">
    <option value="start"> START</option>
    <option value="stop">STOP</option>
    <option value="done">DONE</option>
</select>



</div>
    </div>
    <div class="col-md-12" style="margin-top: 10px;"> 

    <button type="submit" class="btn btn-primary">VALIDASI</button>
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