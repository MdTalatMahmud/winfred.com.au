<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     @include('includes.meta')
     @yield('page_meta')
     @yield('title')    

    <!-- Styles -->    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{mix('css/app.css')}}" />
</head>


<body>




  @include ('layouts.header')
  @yield ('content')
  @include ('layouts.footer')


    <!-- Scripts -->
    <script src="{{mix('js/manifest.js')}}"></script>
    <script src="{{mix('js/vendor.js')}}"></script>
    <script src="{{mix('js/app.js')}}"></script>
    <script>
       function menuFunction() {
        var x = document.getElementById("sidebar-ul");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }
    </script>
    <script>
  $(window).scroll(function() {
    console.log('100');
});
    
   </script>
</body>
</html>
