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

                            <div class="dropdown">
                                <a
                                    class="dropdown-toggle d-flex p-3 position-relative"
                                    href="#!"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <img
                                        src="assets/images/flags/1x1/br.svg"
                                        class="flag-img"
                                        alt="Brazil"
                                    />
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-end shadow-sm dropdown-menu-mini"
                                >
                                    <div class="country-container">
                                        <a href="index.html" class="py-2">
                                            <img src="assets/images/flags/1x1/us.svg" alt="USA" />
                                        </a>
                                        <a href="index.html" class="py-2">
                                            <img
                                                src="assets/images/flags/1x1/in.svg"
                                                alt="India"
                                            />
                                        </a>
                                        <a href="index.html" class="py-2">
                                            <img
                                                src="assets/images/flags/1x1/tr.svg"
                                                alt="Turkey"
                                            />
                                        </a>
                                        <a href="index.html" class="py-2">
                                            <img
                                                src="assets/images/flags/1x1/gb.svg"
                                                alt="Great Britain"
                                            />
                                        </a>
                                        <a href="index.html" class="py-2">
                                            <img
                                                src="assets/images/flags/1x1/id.svg"
                                                alt="Indonesia"
                                            />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown d-sm-block d-none">
                                <a
                                    class="dropdown-toggle d-flex p-3 position-relative"
                                    href="#!"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <i class="icon-mail fs-4 lh-1"></i>
                                    <span class="count rounded-circle bg-danger">9</span>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm"
                                >
                                    <h5 class="fw-semibold px-3 py-2 m-0">Messages</h5>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-start py-2">
                                            <div class="p-3 bg-danger rounded-circle me-3">
                                                MS
                                            </div>
                                            <div class="m-0">
                                                <h6 class="mb-1 fw-semibold">Moory Sammy</h6>
                                                <p class="mb-1">Sent a mail.</p>
                                                <p class="small m-0 opacity-50">3 Mins Ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-start py-2">
                                            <div class="p-3 bg-primary rounded-circle me-3">
                                                KY
                                            </div>
                                            <div class="m-0">
                                                <h6 class="mb-1 fw-semibold">Kyle Yomaha</h6>
                                                <p class="mb-1">Need support.</p>
                                                <p class="small m-0 opacity-50">5 Mins Ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-start py-2">
                                            <div class="p-3 bg-success rounded-circle me-3">
                                                SB
                                            </div>
                                            <div class="m-0">
                                                <h6 class="mb-1 fw-semibold">Srinu Basava</h6>
                                                <p class="mb-1">Purchased a NotePad.</p>
                                                <p class="small m-0 opacity-50">7 Mins Ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-grid p-3 border-top">
                                        <a
                                            href="javascript:void(0)"
                                            class="btn btn-outline-primary"
                                        >View all</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown d-sm-block d-none">
                                <a
                                    class="dropdown-toggle d-flex p-3 position-relative"
                                    href="#!"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <i class="icon-twitch fs-4 lh-1"></i>
                                    <span class="count rounded-circle bg-danger">5</span>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm"
                                >
                                    <h5 class="fw-semibold px-3 py-2 m-0">Notifications</h5>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-start py-2">
                                            <img
                                                src="assets/images/user.png"
                                                class="img-3x me-3 rounded-3"
                                                alt="Admin Themes"
                                            />
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-start py-2">
                                            <img
                                                src="assets/images/user2.png"
                                                class="img-3x me-3 rounded-3"
                                                alt="Admin Theme"
                                            />
                                            <div class="m-0">
                                                <h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
                                                <p class="mb-1">Congratulate, James for new job.</p>
                                                <p class="small m-0 opacity-50">Today, 08:00pm</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item">
                                        <div class="d-flex align-items-start py-2">
                                            <img
                                                src="assets/images/user1.png"
                                                class="img-3x me-3 rounded-3"
                                                alt="Admin Theme"
                                            />
                                            <div class="m-0">
                                                <h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
                                                <p class="mb-1">
                                                    Lewis added new schedule release.
                                                </p>
                                                <p class="small m-0 opacity-50">Today, 09:30pm</p>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="d-grid p-3 border-top">
                                        <a
                                            href="javascript:void(0)"
                                            class="btn btn-outline-primary"
                                        >View all</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown ms-2">
                                <a
                                    class="dropdown-toggle d-flex align-items-center user-settings"
                                    href="#!"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >
                                    <span class="d-none d-md-block">

                                        {{ Auth::user()->prenom }} {{ Auth::user()->nom }}

                                    </span>
                                    <img
                                        src="assets/images/user3.png"
                                        class="img-3x m-2 me-0 rounded-5"
                                        alt="Bootstrap Gallery"
                                    />
                                </a>
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
                                        href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                    ><i class="icon-log-out fs-4 me-3"></i>Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
        <nav class="navbar navbar-expand-lg p-0">
            <div class="container">
                <div class="offcanvas offcanvas-end" id="MobileMenu">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title semibold">Navigation</h5>
                        <button
                            type="button"
                            class="btn btn-danger btn-sm"
                            data-bs-dismiss="offcanvas"
                        >
                            <i class="icon-clear"></i>
                        </button>
                    </div>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Dashboards
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="index.html">
                                        <span>Analytics</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="reports.html">
                                        <span>Reports</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Tickets
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="all-tickets.html">
                                        <span>All Tickets</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="open-tickets.html"
                                    ><span>Open Tickets</span></a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pending-tickets.html"
                                    ><span>Pending Tickets</span></a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="closed-tickets.html"
                                    ><span>Closed Tickets</span></a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="solved-tickets.html"
                                    ><span>Solved Tickets</span></a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item active-link">
                            <a class="nav-link " href="{{ route('clients.index') }}"> Clients </a>
                        </li>
                        <li class="nav-item active-link">
                            <a class="nav-link" href="{{ route('users.index') }}"> Utilisateurs </a>
                        </li>
                        <li class="nav-item dropdown active-link">
                            <a
                                class="nav-link dropdown-toggle "
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Boutiques
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item " href="{{ route('categories.index') }}">
                                        <span>Categories</span></a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('produits.index') }}">
                                        <span>Produits</span></a
                                    >
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown active-link">
                            <a
                                class="nav-link dropdown-toggle "
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Commande
                            </a>
                            <ul class="dropdown-menu mega-menu">
                                <li>
                                    <a class="dropdown-item" href="accordions.html">
                                        <span>Nouvelle Commande</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="accordions.html">
                                        <span>En cours</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="alerts.html">
                                        <span>Validés</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Forms
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('roles.index') }}"
                                    ><span>Roles</span></a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="form-checkbox-radio.html"
                                    ><span>Checkbox &amp; Radio</span></a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="form-file-input.html"
                                    ><span>File Input</span></a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="form-validations.html"
                                    ><span>Validations</span></a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="form-layouts.html"
                                    >Form Layouts</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Plugins
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="apex.html"
                                    ><span>Apex Graphs</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="morris.html"
                                    ><span>Morris Graphs</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="editor.html"
                                    ><span>Editor</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar.html"
                                    ><span>Calendar Daygrid View</span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="calendar-external-draggable.html"
                                    ><span>Calendar External Draggable</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar-google.html"
                                    ><span>Calendar Google</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar-list-view.html"
                                    ><span>Calendar List View</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="calendar-selectable.html"
                                    ><span>Calendar Selectable</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="date-time-pickers.html"
                                    ><span>Date Time Pickers</span></a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="datatables.html"
                                    ><span>Data Tables</span></a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="maps.html"
                                    ><span>Maps</span></a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Login
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="login.html">
                                        <span>Login</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="signup.html">
                                        <span>Signup</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="forgot-password.html">
                                        <span>Forgot Password</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="page-not-found.html">
                                        <span>Page Not Found</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="maintenance.html">
                                        <span>Maintenance</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
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
                                <a href="index.html" class="text-decoration-none">Home</a>
                            </li>
                            <li class="breadcrumb-item text-light">Agents</li>
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
                <span>© Bootstrap Gallery 2024</span>
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
