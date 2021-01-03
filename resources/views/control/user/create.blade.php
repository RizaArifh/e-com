@extends('template.master-admin')

@section('title','Add User')
@section('head-resource')
@include('template.micro_source.momentjs.momentjs')
@include('template.micro_source.mini-function.getdate')

@endsection
@section('title-page-admin','Users Panel')
@section('content-admin')
<div class="col-12">
    @if(Session::has('success_create'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <i class="nav-icon fas fa-save mr-2"></i> {{Session::get('success_create')}}
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title py-2"><i class="nav-icon fas fa-users mr-2"></i> Add New User</h3>

                    <div class="card-tools">
                        <a href={{ route('user.create') }} class="float-right btn btn-success">
                            <i class="nav-icon fas fa-plus-square mr-2"></i> Add New User</a>
                        <a href={{ route('user.index') }} class="float-right btn btn-info mr-2">
                            <i class="nav-icon fas fa-users mr-2"></i> All User</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 350px;">

                    <form class="row g-3 px-3 py-3" action="{{ route('user.store') }}" method="post">
                    @csrf
                    <label for="fullname" class="form-label">Data</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" placeholder="Masukan Nama Lengkap . . ." name="name">
                            @error('name')
                            <div class="">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Masukan Email . . ." name="email">
                            @error('email')
                            <div class="">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" id="phone" placeholder="Masukan No.Telp . . . ( Optional )" name="phone">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Masukan Password . . ." name="password">
                            @error('password')
                            <div class="">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="role" class="form-label">Assigning Role</label>
                            <select id="role" class="form-select" name="role">
                            @forelse ($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @empty
No Record Has Been Saved
                            @endforelse

                            </select>
                            @error('role')
                            <div class="">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $(".alert").delay(2000).slideUp(500, function() {
    $(this).alert('close');
});

</script>
@endsection
