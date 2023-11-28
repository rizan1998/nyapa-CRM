<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href={{asset('auth/fonts/icomoon/style.css')}}>

    <link rel="stylesheet" href={{asset('auth/css/owl.carousel.min.css')}}>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{asset('auth/css/bootstrap.min.css')}}>

    <!-- Style -->
    <link rel="stylesheet" href={{asset('auth/css/style.css')}}>

    <title>Login</title>
</head>

<body>



    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src={{asset('auth/images/undraw_remotely_2j6y.svg')}} alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                @if(session('error'))
                                <div class="alert alert-danger">
                                    <b>Opps!</b> {{session('error')}}
                                </div>
                                @endif
                                <h3>Sign In</h3>
                                <p class="mb-4">Login untuk dapat menggunakan fitur aplikasi.</p>
                            </div>
                            <form method="POST" action="/login">
                                @csrf
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required autofocus>

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required="">

                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember
                                            me</span>
                                        <input type="checkbox" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                                {{-- <input type="submit" class="btn btn-block btn-primary">Masuk --}}
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src={{asset('auth/js/jquery-3.3.1.min.js')}}></script>
    <script src={{asset('auth/js/popper.min.js')}}></script>
    <script src={{asset('auth/js/bootstrap.min.js')}}></script>
    <script src={{asset('auth/js/main.js')}}></script>
</body>

</html>