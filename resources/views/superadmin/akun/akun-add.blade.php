@extends('superadmin.template.master')

@section('content')

<h5 class="fw-semibold">
<a href="{{url('superadmin/akun')}}"><i class="ti ti-arrow-left bg-danger rounded-circle text-white"></i></a>
Tambah User</h5>

<div class="card">
    <div class="card-body">
        <form action="{{url('superadmin/akun/tambah')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
            </div>
    
            <div class="form-group">
                <label for="" class="form-label">Role/Posisi</label>
                <select name="role" class="form-control @error('role') is-invalid @enderror">
                            <option value="super_admin">super_admin</option>
                            <option value="security">security</option>
                            <option value="hse">hse</option>
                            <option value="admin_in">admin_in</option>
                            <option value="admin_out">admin_out</option>
                            <option value="timbangan_in">timbangan_in</option>
                            <option value="timbanganout">timbanganout</option>
                            <option value="loadingbay">loadingbay</option>
                        </select>
                <!-- <input type="text" class="form-control @error('jenis_ternak') is-invalid @enderror" name="jenis_ternak"> -->
            </div>
            <div class="form-group">
                <label for="" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email">
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control @error('password') is-invalid @enderror" name="password">
            </div>
    

            <button type="submit" class="btn btn-primary float-end mt-3">Tambah</button>

        </form>
    </div>
</div>

@endsection

@push('js')

@endpush