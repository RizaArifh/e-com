@extends('template.master')
{{-- @extends('layouts.navb') --}}
@section('title','Control Dashboard')
@section('headcontent')
@include('template.micro_source.adminlte.adminlte_css')
@endsection

@section('body')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @section('content')

        @include('template.segment.navbar')
        @include('template.segment.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Profile</h1>

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @if(Session::has('profile_updated'))
                            <div class="col-md-12">
                            <div class="alert alert-success" role="alert">
                                {{Session::get('profile_updated')}}
                            </div>
                            </div>
                            @endif
                        <div class="col-lg-4">

                            <!-- Profile Image -->
                            <div class="card card-primary ">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{asset('AdminLTE/dist/img/'.Auth()->user()->photo )}}" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">{{ Auth()->user()->name }}</h3>

                                    <p class="text-muted text-center">Software Engineer</p>

                                </div>
                                <!-- /.card profile -->

                            </div>
                            <!-- /.col -->
                        </div>

                        <div class="col-md-8">
                            <div class="card card-primary">

                                <div class="card-header ">
                                    Edit Profile
                                </div>

                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('user.post_profile') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="" value="{{ Auth()->user()->name }}" name="name">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                value="{{ Auth()->user()->email }}" name="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="inputphone">Phone</label>
                                            <input type="text" class="form-control" id="inputphone"
                                            value="{{ Auth()->user()->phone }}" name="phone" autocomplete="off">
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">
              <i class="nav-icon fas fa-user-edit mr-1"></i>

                                        Update Profile</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->

                        </div>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        @include('template.segment.footer')
        @endsection

    </div>

    @section('add-cdn')
    @include('template.micro_source.adminlte.adminlte_js')

    <script>
$(".alert").delay(500).slideUp(500, function() {
    $(this).alert('close');
});
    </script>

</body>

@endsection
@endsection
