<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('logins/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('logins/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('logins/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('logins/css/style.css')}}">

    <title>Login | Peduli Diri</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container" >
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('logins/images/undraw_remotely_2j6y.svg')}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Registrasi</h3>
              <p class="mb-4">buat akun mu dan dapatkan hadiah jutaan miliyar.</p>
            </div>
            <form class="row g-3 needs-validation" action="/storeregis" method="post">
              @csrf
             

            <div class="col-12 form-group first" >
              <label for="yournik" class="form-label">Your nik</label>
              <input type="number" name="nik" class="form-control" id="yournik" required>
              <div class="invalid-feedback">Please, enter your nik!</div>
            </div>
            <div class="col-12 form-group first" >
              <label for="yournik" class="form-label">Your name</label>
              <input type="text" name="name" class="form-control" id="yournik" required>
              <div class="invalid-feedback">Please, enter your nik!</div>
            </div>


            <div class="col-12 form-group first ">
              <label for="yourEmail" class="form-label">Your Email</label>
              <input type="email" name="email" class="form-control" id="yourEmail" required>
              <div class="invalid-feedback">Please enter a valid Email adddress!</div>
            </div>

            

            <div class="col-12 form-group first ">
              <label for="yourPassword" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="yourPassword" required>
              <div class="invalid-feedback">Please enter your password!</div>
            </div>

            
            <div class="col-12 form-group first ">
              <label for="">confirm Password</label>
            <input id="pasworsd-confirm" type="password" class="form-control" name="password_confirmation">
              </div>
            
              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            <div class="col-12 form-group first ">
              <p class="small mb-0">Already have an account? <a href="/login">Log in</a></p>
            </div>
          </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="{{asset('logins/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('logins/js/popper.min.js')}}"></script>
    <script src="{{asset('logins/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('logins/js/main.js')}}"></script>
  </body>
</html>