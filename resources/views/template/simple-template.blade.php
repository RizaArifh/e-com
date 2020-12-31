@extends('template.master')
{{-- @extends('layouts.navb') --}}
@section('title','judul')
{{-- section head --}}
@section('headcontent')
@include('template.micro_source.adminlte.adminlte_css')
@endsection

@section('body')

{{-- body class --}}
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

@section('content')

{{-- isi --}}

  @include('template.segment.footer')
  @endsection

    </div>

{{-- section add cdn --}}
    @section('add-cdn')
    @include('template.micro_source.adminlte.adminlte_js')

    <script>
    </script>

</body>

{{-- end of secttion contend --}}
@endsection
{{-- end of section body --}}
@endsection
