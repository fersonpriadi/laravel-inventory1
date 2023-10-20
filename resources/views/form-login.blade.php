
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>
    <meta name="theme-color" content="#7952b3">

    <!-- Custom styles for this template -->
  <link rel="stylesheet" href="{{asset('Bootstrap/css/bootstrap.min.css')}}">
  <link rel="shortcut icon" href="{{asset('image/logo1.png')}}" type="image/x-icon">

  </head>
  <body class="text-center">
    
<main class="form-signin form w-25 m-auto mt-5">
  <form method="post" action="{{route('kirim-data-login')}}">
    @csrf
    <img class="mb-4" src="{{asset('image/logo1.png')}}" alt="" width="90" height="70">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    {{$errors->first('email')}}

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-50 btn btn-lg btn-primary mt-4" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>
<script src="{{asset('Bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    
  </body>
</html>
