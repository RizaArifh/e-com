@extends('template.master-admin')

@section('title','Users')
@section('head-resource')
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
    @if(Session::has('user_created'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                <i class="nav-icon fas fa-save mr-2"></i> {{Session::get('user_created')}}
            </div>
        </div>
    </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title py-2"><i class="nav-icon fas fa-users mr-2"></i> Users</h3>

                    <div class="card-tools">
                        <a href={{ route('user.create') }} class="float-right btn btn-success"><i
                                class="nav-icon fas fa-plus-square mr-2"></i> Add New User</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 350px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Created</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->role }}</td>
                                <td>{{ convertHari($user->created_at) }}</td>
                                <td>
                                    <a href="javascript:void(0)" onclick="showUser({{$user->id}})" class="btn btn-info"><i class="nav-icon fas fa-eye mr-2"></i>View</a>
                                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-warning">Edit
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
@section('modals')
    <!-- Edit Teacher Modal -->
    <div class="modal fade" id="ShowUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
                <div class="col-md-6">
                
                </div>
                <div class="col-md-6">
                    <form action="" id="">
                        @csrf
                        <input type="hidden" id="mid" name="id">
                        <div class="form-group">
                            <label for="mname">Full Name</label>
                            <input id="mname" class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="mrole">Role</label>
                            <input id="mrole" class="form-control" type="text" name="role">
                        </div>
                        <div class="form-group">
                            <label for="memail">Email</label>
                            <input id="memail" class="form-control" type="email" name="email" disabled>
                        </div>
                        <div class="form-group">
                            <label for="mphone">Phone</label>
                            <input id="mphone" class="form-control" type="text" name="phone">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update</button>
                    </form>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    $(".alert").delay(2000).slideUp(500, function() {
    $(this).alert('close');
});

//show user
function showUser(id){
$.get('/userd/'+id,function(userd){
console.log(userd);
$('#mid').val(userd.id);
$('#mname').val(userd.name);
userd.roles.forEach(role => {
$('#mrole').val(role.name);
});
$('#memail').val(userd.email);
$('#mphone').val(userd.phone);
$('#ShowUserModal').modal('toggle');
})
}
</script>

@endsection
