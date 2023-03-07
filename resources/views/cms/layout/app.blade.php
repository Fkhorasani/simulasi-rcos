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

    <!-- Custom CSS -->
    @yield('styles')
  </head>
  <body>
    @yield('content')

    

    <!-- Custom JS -->
    @yield('scripts')


  </body>
</html>