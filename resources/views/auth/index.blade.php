<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('logins/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('logins/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('logins/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('logins/css/style.css') }}">

    <title>Login | Peduli Diri</title>
</head>

<body id="oke">



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign In</h3>
                                <p class="mb-4" style="color: black;">Login akun peduli diri mu.</p>
                            </div>
                            <form action="/postlogin" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="email" name="email" class="form-control" id="username">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">

                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="/formregis" class="forgot-pass">create your
                                            account</a></span>
                                </div>

                                <input type="submit" value="Log In" class="btn btn-block btn-primary">


                            </form>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>


    <script src="{{ asset('logins/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('logins/js/popper.min.js') }}"></script>
    <script src="{{ asset('logins/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('logins/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.globe.min.js"></script>
    <script>
        VANTA.GLOBE({
            el: "#oke",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x6675c0,
            color2: 0x69bebe,
            size: 0.50,
            backgroundColor: 0xe7e5f0
        })
    </script>
</body>

</html>
