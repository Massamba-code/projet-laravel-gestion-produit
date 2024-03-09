<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Meta -->
    <meta
        name="description"
        content="Marketplace for Bootstrap Admin Dashboards"
    />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/" />
    <meta property="og:url" content="https://www.bootstrap.gallery" />
    <meta
        property="og:title"
        content="Admin Templates - Dashboard Templates | Bootstrap Gallery"
    />
    <meta
        property="og:description"
        content="Marketplace for Bootstrap Admin Dashboards"
    />
    <meta property="og:type" content="Website" />
    <meta property="og:site_name" content="Bootstrap Gallery" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    <!-- *************
			************ CSS Files *************
		************* -->
    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.min.css" />

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link
        rel="stylesheet"
        href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css"
    />
</head>

<body>
<!-- Page wrapper start -->
<div class="page-wrapper">
    <!-- App container starts -->
    <div class="app-container">
        <!-- App header starts -->
        <div class="app-header d-flex align-items-center">
            <!-- Container starts -->
            <div class="container">
                <!-- Row starts -->
                <div class="row">
                    <div class="col-md-3 col-2">
                        <!-- App brand starts -->
                        <div class="app-brand">
                            <a href="index.html" class="d-lg-block d-none">
                                <img
                                    src="assets/images/logo.svg"
                                    class="logo"
                                    alt="Bootstrap Gallery"
                                />
                            </a>
                            <a href="index.html" class="d-lg-none d-md-block">
                                <img
                                    src="assets/images/logo-sm.svg"
                                    class="logo"
                                    alt="Bootstrap Gallery"
                                />
                            </a>
                        </div>
                        <!-- App brand ends -->
                    </div>

                    <div class="col-md-9 col-10">
                        <!-- App header actions start -->
                        <div
                            class="header-actions d-flex align-items-center justify-content-end"
                        >
                            <!-- Search container start -->
                            <div class="search-container d-none d-lg-block">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Search"
                                />
                                <i class="icon-search"></i>
                            </div>
                            <!-- Search container end -->


                            <div class="dropdown ms-2">

                                <div
                                    class="dropdown-menu dropdown-menu-end dropdown-menu-sm shadow-sm gap-3"
                                    style=""
                                >
                                    <a
                                        class="dropdown-item d-flex align-items-center py-2"
                                        href="agent-profile.html"
                                    ><i class="icon-smile fs-4 me-3"></i>User Profile</a
                                    >
                                    <a
                                        class="dropdown-item d-flex align-items-center py-2"
                                        href="account-settings.html"
                                    ><i class="icon-settings fs-4 me-3"></i>Account
                                        Settings</a
                                    >
                                    <a
                                        class="dropdown-item d-flex align-items-center py-2"
                                        href="{{ route('login') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('login-form').submit();"
                                    ><i class="icon-log-out fs-4 me-3"></i>Login</a>
                                    <form id="logout-form" action="{{ route('login') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>

                            <!-- Toggle Menu starts -->
                            <button
                                class="btn btn-success btn-sm ms-3 d-lg-none d-md-block"
                                type="button"
                                data-bs-toggle="offcanvas"
                                data-bs-target="#MobileMenu"
                            >
                                <i class="icon-menu"></i>
                            </button>
                            <!-- Toggle Menu ends -->
                        </div>
                        <!-- App header actions end -->
                    </div>
                </div>
                <!-- Row ends -->
            </div>
            <!-- Container ends -->
        </div>
        <!-- App header ends -->

        <!-- App navbar starts -->

        <!-- App Navbar ends -->

        <!-- App body starts -->
        <div class="app-body">
            <!-- Container starts -->
            <div class="container">
                <!-- Row start -->
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <!-- Breadcrumb start -->
                        <ol class="breadcrumb mb-3">
                            <li class="breadcrumb-item">
                                <i class="icon-home lh-1"></i>
                                <a href="{{ route('login') }}" class="text-decoration-none">Projet</a>
                            </li>
                            <li class="breadcrumb-item text-light">Login</li>
                        </ol>
                        <!-- Breadcrumb end -->
                    </div>
                </div>
                <!-- Row end -->

                <!-- Row start -->
                <div id="container">@yield('container')</div>
                <!-- Row end -->
            </div>
            <!-- Container ends -->
        </div>
        <!-- App body ends -->

        <!-- App footer start -->
        <div class="app-footer">
            <div class="container">
                <span>© Massamba DIOUF 2024</span>
            </div>
        </div>
        <!-- App footer end -->
    </div>
    <!-- App container ends -->
</div>
<!-- Page wrapper end -->

<!-- *************
        ************ JavaScript Files *************
    ************* -->
<!-- Required jQuery first, then Bootstrap Bundle JS -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!-- *************
        ************ Vendor Js Files *************
    ************* -->

<!-- Overlay Scroll JS -->
<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

<!-- Custom JS files -->
<script src="assets/js/custom.js"></script>
</body>
</html>
