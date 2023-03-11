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

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://rcos.umn.ac.id/css/font-awesome.css" type="text/css" media="all">

    <!-- Custom CSS -->
    @yield('styles')
  </head>
  <body class="overflow-x-hidden">
    @yield('content')

    

    <!-- Custom JS -->
    @yield('scripts')


  </body>
</html>