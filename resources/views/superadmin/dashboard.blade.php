@extends('superadmin.template.master')

@section('content')

<h5 class="fw-semibold">Dashboard</h5>

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
                
                 
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">1</h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">21/10/2023</h6>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">11.00</p>
                        </td>
                   
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">abc123</p>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">Anam</p>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">Pos Security</p>
                        </td>
                        <td class="border-bottom-0">
                            
                             <div>
                                <a href="#" aria-disabled="true"><span class="badge bg-danger rounded-3 fw-semibold">Stop</span></a>
                                </div>
                     
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">APD Tidak Lengkap</p>
                        </td>
                      
                    </tr>
               
                    
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