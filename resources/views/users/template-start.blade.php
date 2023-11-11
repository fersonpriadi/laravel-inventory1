<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inventory</title>
        <link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('styles.css')}}">
        <link rel="stylesheet" href="{{asset('styles-tambahan.css')}}">
        <link rel="shortcut icon" href="{{('image/logo1.png')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('fontawesome-web/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('fontawesome-web/js/all.min.js')}}">
        <script src="{{asset('Bootstrap/js/bootstrap.bundle.min.js')}}"></script>  
        <script src="{{asset('scripts.js')}}"></script>  
    </head>
    <body class="" id="landing-body">
             
        <div class="add-users" style="margin-top:3rem;" >
           @yield('konten-add-user')
        </div>
    </body>
</html>
