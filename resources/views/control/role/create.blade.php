@extends('template.master-admin')
@section('title','Add Role')
@section('title-page-admin','Add Role')
@section('head-resource')
{{-- @livewireStyles --}}
@endsection
@section('content-admin')
<div class="col-12">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title py-2">Add Role</h3>
                    <div class="card-tools">
                        <a href={{ route('role.index') }} class="float-right btn btn-warning"><i
                                class="nav-icon fas fa-shield-alt mr-2"></i> See All Role
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form method="post" action="{{ route('role.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name" class='font-weight-bold'>Role</label>
                            <input id="name" class="form-control" type="text" name="name" autocomplete="off">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <h2>Assign Permission</h2>
                        <div class="form-check ml-1">
                            @forelse ($permissions as $permission)
                            <div>
                                <input id="{{ $permission->name }}" class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}">
                                <label for="{{ $permission->name }}" class="form-check-label">{{ $permission->name }}</label>
                            </div>
                            @empty
                            No Record Saved
                            @endforelse

                        </div>
                        <button class="btn btn-info mt-2" type="submit"><i class="nav-icon fas fa-save mr-2"></i>Create
                            Role</button>
                    </form>
                    {{-- @livewire('roles.index') --}}
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@endsection
@section('script')
{{-- @livewireScripts --}}
@endsection
