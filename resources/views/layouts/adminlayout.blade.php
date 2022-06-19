
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Admin Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">
    <meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('admin/assetss/img/favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/assetss/img/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assetss/img/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('admin/assetss/img/favicon/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('admin/assetss/img/favicon/safari-pinned-tab.svg')}}" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{asset('admin/vendor/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{asset('admin/vendor/notyf/notyf.min.css')}}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{asset('admin/css/volt.css')}}" rel="stylesheet">


</head>

<body>

<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="../../index.html">

    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi,{{-- {Auth::user()->name}}--}}</h2>
                    <a href="../../pages/examples/sign-in.html" class="btn btn-secondary btn-sm d-inline-flex align-items-center" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        Sign Out
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse"
                   data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                   aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item  active ">
                <a href="{{--{{route('dashboard')}}--}}" class="nav-link">
          <span class="sidebar-icon">
            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
          </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
                <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
            </li>
            <li class="nav-item">
        <span
            class="nav-link  collapsed  d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#submenu-app">
          <span>
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
            </span>
            <span class="sidebar-text">Users</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          </span>
        </span>
                <div class="multi-level collapse "
                     role="list" id="submenu-app" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{--{{route('user.index')}}--}}">
                                <span class="sidebar-text">All Users</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
        <span
            class="nav-link  collapsed  d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#submenu-posts">
          <span>
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
            </span>
            <span class="sidebar-text">Posts</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          </span>
        </span>
                <div class="multi-level collapse " role="list"
                     id="submenu-posts" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{--{{route('post.index')}}--}}">
                                <span class="sidebar-text">All Posts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('blog.create')}}">
                                <span class="sidebar-text">Create Post</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>
            <li class="nav-item">
        <span
            class="nav-link  collapsed  d-flex justify-content-between align-items-center"
            data-bs-toggle="collapse" data-bs-target="#submenu-pages">
          <span>
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
            </span>
            <span class="sidebar-text">Pages</span>
          </span>
          <span class="link-arrow">
            <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
          </span>
        </span>
                <div class="multi-level collapse " role="list"
                     id="submenu-pages" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="{{route('/')}}">
                                <span class="sidebar-text">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="{{route('about')}}">
                                <span class="sidebar-text">About</span>
                            </a>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="{{route('blog.index')}}">
                                <span class="sidebar-text">Blog</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="{{route('contact.index')}}">
                                <span class="sidebar-text">Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<main class="content">

</main>
<main class="content">

    <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
        <div class="container-fluid px-0">
            <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                <div class="d-flex align-items-center">
                </div>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item dropdown ms-lg-3">
                        <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="media d-flex align-items-center">
                                <img class="avatar rounded-circle" alt="Image placeholder" src="{{--{{Auth::user()->profileImage()}}--}}">
                                <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                    <span class="mb-0 font-small fw-bold text-gray-900">{{--{{Auth::user()->name}}--}}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                            <a class="dropdown-item d-flex align-items-center" href="{{--{{route('user.show', Auth::user()->id)}}--}}">
                                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path></svg>
                                My Profile
                            </a>
                            <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="py-4">
      @yield('content')
    </div>
</main>

<!-- Core -->
<script src="{{asset('admin/vendor/@popperjs/core/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- Vendor JS -->
<script src="{{asset('admin/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>

<!-- Slider -->
<script src="{{asset('admin/vendor/nouislider/distribute/nouislider.min.js')}}"></script>

<!-- Smooth scroll -->
<script src="{{asset('admin/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js')}}"></script>

<!-- Charts -->
<script src="{{asset('admin/vendor/chartist/dist/chartist.min.js')}}"></script>
<script src="{{asset('admin/vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>

<!-- Datepicker -->
<script src="{{asset('admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

<!-- Sweet Alerts 2 -->
<script src="{{asset('admin/vendor/sweetalert2/dist/sweetalert2.all.min.js')}}"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js')}}"></script>

<!-- Vanilla JS Datepicker -->
<script src="{{asset('admin/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>

<!-- Notyf -->
<script src="{{asset('admin/vendor/notyf/notyf.min.js')}}"></script>

<!-- Simplebar -->
<script src="{{asset('admin/vendor/simplebar/dist/simplebar.min.js')}}"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js')}}"></script>

<!-- Volt JS -->
<script src="{{asset('admin/assets/js/volt.js')}}"></script>

{{-- @include('components.head.tinymce-config') --}}
</body>

</html>