@extends('cms.layout.app')

@section('styles')
  <link href="{{ asset('css/home.css') }}" rel="stylesheet"/>
@endsection

@section('content')
  <!-- LOADING ------------------------------------------------------------------------------------------------------------------->
  @include("cms.component.home.loading")

  <!-- LANDING PAGE ------------------------------------------------------------------------------------------------------------------->
  @include("cms.component.home.landing-page")

  <!-- PROGRAM KERJA ------------------------------------------------------------------------------------------------------------------->
  @include("cms.component.home.proker")

  <!-- FASILITAS ------------------------------------------------------------------------------------------------------------------->
  @include("cms.component.home.fasilitas")
  
  <!-- KEGIATAN ------------------------------------------------------------------------------------------------------------------->
  @include("cms.component.home.kegiatan")
  <hr>
  <!-- PORTOFOLIO PROGRAM ------------------------------------------------------------------------------------------------------------------->
  @include("cms.component.home.portofolio")

  <!-- TEAM MEMBER ------------------------------------------------------------------------------------------------------------------->
  @include("cms.component.home.team-member")
@endsection

@section('scripts')
  <script>
    AOS.init();
  </script>
  <script src={{ asset("js/loading.js") }}></script>
  <script src={{ asset("js/hamburger.js") }}></script>
@endsection
