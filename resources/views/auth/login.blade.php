<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap Gallery - Support Desk Admin Template</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    <!-- *************
        ************ CSS Files *************
    ************* -->
    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.min.css" />
</head>

<body class="bg-one">
    <!-- Container start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-sm-6 col-12">
                <form action="{{ route('login') }}" method="post" class="my-5">
                    @csrf
                    <div class="card p-md-4 p-sm-3">
                        <div class="login-form">
                            <a href="index.html" class="mb-4 d-flex">
                                <img src="assets/images/logo-sm.svg" class="img-fluid login-logo" alt="Bootstrap Gallery" />
                            </a>
                            <h2 class="mt-4 mb-4">Login</h2>
                            <div class="mb-3">
                                <label class="form-label" for="email">{{ __('Email Address') }}</label>
                                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <div class="input-group">
                                    <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password" />
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <a href="#" class="input-group-text">
                                        <i class="icon-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check m-0">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberPassword" />
                                    <label class="form-check-label" for="rememberPassword">Remember</label>
                                </div>
                                <a href="forgot-password.html" class="text-success text-decoration-underline">Lost password?</a>
                            </div>
                            <div class="d-grid py-3 mt-3">
                                <button type="submit" class="btn btn-lg btn-success">
                                    LOGIN
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="text-center pt-4">
                                <span>Not registered?</span>
                                <a href="signup.html" class="text-success text-decoration-underline">
                                    SignUp</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Container end -->
</body>

</html>
