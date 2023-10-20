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
        <link rel="stylesheet" href="{{'styles.css'}}">
        <link rel="shortcut icon" href="{{asset('image/logo1.png')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('fontawesome-web/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('fontawesome-web/js/all.min.js')}}">
        <script src="{{asset('Bootstrap/js/bootstrap.bundle.min.js')}}"></script>  
        <script src="{{('scripts.js')}}"></script>  
    </head>
    <body class="sb-nav-fixed">
        @include('template/navigasi-atas')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            @include('template/navigasi-kiri')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 pt-4">
                        @yield('konten')
                    </div>
                </main>
            @include('template/footer')
            </div>
           
        </div>
        
    </body>
</html>
