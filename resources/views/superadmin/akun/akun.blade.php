@extends('superadmin.template.master')

@section('content')

<h5 class="fw-semibold">Verifikasi Akun</h5>

<div class="card">
    <div class="card-body p-4">
    <h5 class="card-title fw-semibold mb-4 mb-5">
            <a href="{{('akun/tambah')}}"
                class="btn btn-sm btn-primary float-end">Tambah User</a>
        </h5>
        <div class="table-responsive">
            <table id="example" class="table text-nowrap mb-0 align-middle">
                <thead class="text-dark fs-4">
                    <tr>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">No</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Nama</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Role</h6>
                        </th>
                        
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Opsi</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>
                
                    @foreach($akun as $no=>$a)
                    <tr>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">{{$no+1}}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <h6 class="fw-semibold mb-1">{{$a->name}}</h6>
                        </td>
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$a->email}}</p>
                        </td>
                   
                        <td class="border-bottom-0">
                            <p class="mb-0 fw-normal">{{$a->role}}</p>
                        </td>
                        
                        <td>
        
                            <a href="{{url('superadmin/akun/edit/'.$a->id)}}" class="btn btn-sm btn-warning">
                                <i class="ti ti-pencil"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" onClick="opsi_hapus('{{$a->id}}')">
                                <i class="ti ti-trash"></i>
                            </a>

                         
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="hapus_data" tabindex="-1" aria-labelledby="hapus_dataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center d-block w-100" id="hapus_dataLabel">Mau Menghapus Data User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a class="btn btn-danger" id="linkhapus">Hapus</a>
      </div>
    </div>
  </div>
</div>

@endsection

@push('js')
<script>
    new DataTable('#example');

    let opsi_hapus = (id)=>{
        $("#hapus_data").modal("show")
        $("#hapus_data #linkhapus").attr('href',`{{url('superadmin/akun/delete')}}/${id}`)
    }

</script>
@endpush