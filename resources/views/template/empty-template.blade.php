@extends('template.master')
{{-- section title and head --}}
@section('title','judul')
@section('headcontent')

@endsection

@section('body')

{{-- body class --}}
<body class="">


@section('content')

{{-- isi --}}

  @endsection


    @section('add-cdn')
    @include('template.micro_source.adminlte.adminlte_js')

    <script>
    </script>

</body>

{{-- end of secttion contend --}}
@endsection
{{-- end of section body --}}
@endsection
