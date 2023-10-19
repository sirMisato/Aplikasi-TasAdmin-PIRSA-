@extends('superadmin.template.master')

@section('content')

<h5 class="fw-semibold">
<a href="{{url('superadmin/akun')}}"><i class="ti ti-arrow-left bg-danger rounded-circle text-white"></i></a>
Edit User</h5>

<div class="card">
    <div class="card-body">
        <form action="{{url('superadmin/akun/update/'.$id)}}" method="post">
            @csrf

            <div class="form-group">
                <label for="" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$akun->name}}">
            </div>
    
            <div class="form-group">
                <label for="" class="form-label">Role/Posisi</label>
                <select name="role" class="form-control @error('role') is-invalid @enderror">
        
                            <option value="super_admin"{{ $akun->role == 'super_admin' ? 'selected' : '' }}>super_admin</option>
                            <option value="security"{{ $akun->role == 'security' ? 'selected' : '' }}>security</option>
                            <option value="hse"{{ $akun->role == 'hse' ? 'selected' : '' }}>hse</option>
                            <option value="admin_in"{{ $akun->role == 'admin_in' ? 'selected' : '' }}>admin_in</option>
                            <option value="admin_out"{{ $akun->role == 'admin_out' ? 'selected' : '' }}admin_out</option>
                            <option value="timbangan_in"{{ $akun->role == 'timbangan_in' ? 'selected' : '' }}>timbangan_in</option>
                            <option value="timbanganout"{{ $akun->role == 'timbanganout' ? 'selected' : '' }}>timbanganout</option>
                            <option value="loadingbay"{{ $akun->role == 'loadingbay' ? 'selected' : '' }}loadingbay</option>
                        </select>
                <!-- <input type="text" class="form-control @error('jenis_ternak') is-invalid @enderror" name="jenis_ternak"> -->
            </div>
            <div class="form-group">
                <label for="" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$akun->email}}">
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="text" class="form-control" name="password" >
            </div>
    

            <button type="submit" class="btn btn-primary float-end mt-3">Update</button>

        </form>
    </div>
</div>

@endsection

@push('js')

@endpush