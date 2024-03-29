<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel = "icon" href ="images/draw.png" type = "image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

  
  <div class="content">
    <div class="container">

      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="images/draw.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>LOGIN<strong> USER</strong></h3>
              <p class="mb-4">Silakan Login dengan Username dan Password Anda!!</p>
            </div>

            @if(session('error'))
            <div class="text-danger text-center">{{session('error')}}</div>
            @endif
            @if(session('success'))
            <div class="text-success text-center">{{session('success')}}</div>
            @endif

            {{-- @if($errors->any())
              {{ implode('', $errors->all('<div>:message</div>')) }}
            @endif  --}}
            <form action="{{route('postLogin')}}" method="post">
              @csrf
              @if (Session::has('url.intended'))
              <input type="hidden" name="previous_url" value="{{ Session::get('url.intended') }}">
              @endif

       
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" name ="username" class="form-control" id="username">
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name ="password" class="form-control" id="password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                {{-- <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>  --}}
              </div>

              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>