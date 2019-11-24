<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('')}}/public/asset/admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="{{url('')}}/public/asset/admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('')}}/public/asset/admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="{{url('')}}/public/asset/admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
<!-- ============================================================== -->
<!-- login page  -->
<!-- ============================================================== -->
<div class="splash-container">
    <div class="card ">
        <div class="card-header text-center"><a href="#"><img class="logo-img" src="{{url('')}}/public/asset/admin/assets/images/logo.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input required value="{{ old('email') }}" name="email" type="email" class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete>
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="password" name="password" required type="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input {{ old('remember') ? 'checked' : '' }}  name="remember" id="remember" class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </form>
        </div>
        <div class="card-footer bg-white p-0  ">
            <div class="card-footer-item card-footer-item-bordered">
                <a href="#" class="footer-link">Create An Account</a></div>
            <div class="card-footer-item card-footer-item-bordered">
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="footer-link">Forgot Password</a>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- end login page  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="{{url('')}}/public/asset/admin/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="{{url('')}}/public/asset/admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>

