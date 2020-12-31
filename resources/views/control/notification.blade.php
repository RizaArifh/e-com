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
                            <h1 class="m-0">Notification</h1>
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

    </script>

</body>

@endsection
@endsection
