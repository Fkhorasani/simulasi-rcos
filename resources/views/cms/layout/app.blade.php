<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Page Title -->
    <title>{{ $title }}</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- Navbar --}}
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet"/>

    <!-- Custom CSS -->
    @yield('styles')
  </head>
  <body>
    @include("cms.layout.navbar")
    @yield('content')
    @include('cms.layout.footer')
    

    <!-- Custom JS -->
    @yield('scripts')


  </body>
</html>