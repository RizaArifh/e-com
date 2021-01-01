@extends('template.master-admin')

@section('title','Role')
@section('title-page-admin','Role')
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
                    <h3 class="card-title py-2">Permission Table</h3>

                    <div class="card-tools">
                        <a href={{ route('role.create') }} class="float-right btn btn-success"><i
                                class="nav-icon fas fa-plus-square mr-2"></i> Add New Role</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 350px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Permission</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($roles as $role)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    @foreach ($role->permissions as $permission)
                                    <button class="btn btn-warning" role="button"><i
                                            class="nav-icon fas fa-shield-alt mr-2"></i>{{ $permission->name }}</button>
                                    @endforeach

                                </td>
                                <td>{{ $role->created_at }}</td>
                                <td>
                                    <a href="{{ route('permission.show',$role->id) }}" class="btn btn-info">Show
                                        Permission</a>
                                    <a href="{{ route('permission.edit',$role->id) }}" class="btn btn-warning">Edit
                                        Permission</a>
                                </td>

                            </tr>
                            @empty
                            <tr>
                                <td><i class="nav-icon fas fa-folder-open mr-2"></i>
                                Data Not Found</td>
                            </tr>
                            @endforelse

                        </tbody>
                    </table>
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
