@extends('superadmin.template.master')

@section('content')

<h5 class="fw-semibold">Dashboard - History Kendaraan</h5>

<div class="card">
    <div class="card-body p-4">

        <div class="table-responsive">
            <table id="example" class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Date</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Time</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">No.SPA</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0"> NOPOL</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Driver</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Posisi</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Status</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Keterangan</h6>
                        </th>

                    </tr>
                </thead>
                <tbody>

                    @foreach($security as $no=>$data)
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">{{$no++}}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">{{$data->tanggal}}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$data->waktu}}</p>
                        </td>

                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$data->no_spa}}</p>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$data->no_pol}}</p>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$data->nama_driver}}</p>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$data->posisi}}</p>
                        </td>
                        <td class="border-bottom-0">

                            @if($data->status=='start')
                            <div>
                                <a href="#" aria-disabled="true"><span class="badge bg-gray rounded-3 fw-semibold text-black">{{$data->status}}</span></a>
                            </div>
                            @elseif($data->status=='stop')
                            <div>
                                <a href="#" aria-disabled="true"><span class="badge bg-danger rounded-3 fw-semibold text-black">{{$data->status}}</span></a>
                            </div>
                            @elseif($data->status=='done')
                            <div>
                                <a href="#" aria-disabled="true"><span class="badge bg-success rounded-3 fw-semibold text-black">{{$data->status}}</span></a>
                            </div>
                            @endif


                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">APD Tidak Lengkap</p>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection

@push('js')
<script>
    new DataTable('#example');
</script>
@endpush