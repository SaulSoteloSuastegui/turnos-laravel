<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Scripts         <script src="{{ asset('js/app.js') }}" defer></script>  <script src="{{ asset(mix('js/app.js')) }}"></script>  -->

       <link href="{{ asset('boostrap5/bootstrap.min.css') }}" rel="stylesheet">
      <!-- <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css') }}" rel="stylesheet">-->
       <script src="{{ asset('boostrap5/bootstrap.bundle.min.js') }}" defer></script>
       
   @yield('css')
   <!-- Styles  <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <title>Document</title>
</head>
<body>
@include('nav')
@yield('conten')

@yield('js')
</body>
</html>