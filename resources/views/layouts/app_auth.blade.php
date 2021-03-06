

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
   <!-- NProgress -->
     <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
   <!-- Animate.css -->
    <link href="{{ asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">

     <link href="{{asset('build/css/custom.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
  
  
    
  </head>


</head>
<div class="nav-md">
    
    <!-- body section -->

    <div class="container body">
      <div class="main_container">
         
           
         @yield("content")
          <!-- page content -->
        


         
      </div>
    </div>



   
  </div>
</html>

 <!-- jQuery -->