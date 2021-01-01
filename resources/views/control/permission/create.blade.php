@extends('template.master-admin')
@section('title','Add Permission')
@section('title-page-admin','Permission')
    @section('content-admin')
          <div class="col-12">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title py-2">Add Permission</h3>

                <div class="card-tools">
                <a href={{ route('permission.index') }} class="float-right btn btn-danger"  ><i class="nav-icon fas fa-shield-alt mr-2"></i> See All Permission</a>
                  
                  
                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="post" action="{{ route('permission.store') }}">
              @csrf
                <div class="form-group">
                    <label for="name" class='font-weight-bold' >Permission Name</label>
                    <input id="name" class="form-control" type="text" name="name" autocomplete="off">
                    @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                </div>  
                <button class="btn btn-info" type="submit"><i class="nav-icon fas fa-save mr-2"></i>Create Permission</button>
              </form>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div></div>
    @endsection