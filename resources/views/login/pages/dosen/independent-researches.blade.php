@extends ("login.layout.app")

@section('styles')
  <link href="{{ asset('css/dosen.css') }}" rel="stylesheet"/>
  <link href="{{ asset('css/table.css') }}" rel="stylesheet"/>
@endsection

@section("content")
  @include("login.layout.navbar")
  @include("login.component.independent-researches")
  @include("login.component.form.independent-researches")
@endsection

@section('scripts')
  <script>
    AOS.init();
  </script>
  <script src={{ asset("js/loading.js") }}></script>
  <script src={{ asset("js/hamburger.js") }}></script>
  <script src={{ asset("js/sidenav.js") }}></script>
  <script src={{ asset("js/profile.js") }}></script>
  <script src={{ asset("js/form.js") }}></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection