@extends('template.master-admin')

@section('title','Permission')
@section('title-page-admin','Permission Panel')
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
          <h3 class="card-title py-2"><i class="nav-icon fas fa-book mr-2"></i>Permission</h3>

          <div class="card-tools">
            <a href={{ route('permission.create') }} class="float-right btn btn-success"><i
                class="nav-icon fas fa-plus-square mr-2"></i> Add New Permission</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 350px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Created</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>
              @forelse ($permissions as $p)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->created_at }}</td>
                <td>
                  <a href="{{ route('permission.show',$p->id) }}" class="btn btn-info">Show Permission</a>
                  <a href="{{ route('permission.edit',$p->id) }}" class="btn btn-warning">Edit Permission</a>
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
