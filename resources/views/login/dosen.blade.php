@extends ("login.layout.app")

@section('styles')
  <link href="{{ asset('css/dosen.css') }}" rel="stylesheet"/>
@endsection

@section("content")
@endsection

@section('scripts')
  <script>
    AOS.init();
  </script>
  <script src={{ asset("js/loading.js") }}></script>
  <script src={{ asset("js/hamburger.js") }}></script>
@endsection