@extends('template.master')
{{-- @extends('layouts.navb') --}}
@section('title')
    @yield('title')
@endsection
@section('headcontent')
@include('template.micro_source.adminlte.adminlte_css')
@yield('head-resource')
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
            <h1 class="m-0">@yield('title-page-admin')</h1>
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

          @yield('content-admin')

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  <!-- /.content-wrapper -->


  @include('template.segment.control-sidebar')

  </div>

  @include('template.segment.footer')

  @endsection


    @section('add-cdn')
    @include('template.micro_source.adminlte.adminlte_js')

    <script>

    </script>
@yield('scripts')
</div>
</body>

@endsection
@endsection
