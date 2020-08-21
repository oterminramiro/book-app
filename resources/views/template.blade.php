<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @yield('css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <!-- Favicon -->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('css/argon.css?v=1.2.0') }}" type="text/css">

    <style>
        #cart-btn:hover
        {
            transform: translateY(0px);
            box-shadow: none;
        }
        #cart-badge
        {
            margin-top:.6rem;
            margin-left:.15rem;
            height: 1.25rem;
            width: 1.25rem;
        }
        #cart-btn:focus,
        #cart-btn.focus
        {
            outline: 0;
            box-shadow: none;
        }
    </style>
</head>

<body>
    @auth
	@if ( checkRole(['ADMIN','OPERATOR']) )
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  d-flex  align-items-center">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
                </a>
                <div class=" ml-auto ">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-dashboards">
                                <i class="ni ni-shop text-primary"></i>
                                <span class="nav-link-text">Admin</span>
                            </a>
                            <div class="collapse" id="navbar-dashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ backpack_url('dashboard') }}" class="nav-link">
                                            <span class="sidenav-mini-icon"> D </span>
                                            <span class="sidenav-normal"> Dashboard </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ backpack_url('book') }}" class="nav-link">
                                            <span class="sidenav-mini-icon"> B </span>
                                            <span class="sidenav-normal"> Books </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ backpack_url('booktype') }}" class="nav-link">
                                            <span class="sidenav-mini-icon"> BT </span>
                                            <span class="sidenav-normal"> Book Type </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ backpack_url('editorial') }}" class="nav-link">
                                            <span class="sidenav-mini-icon"> E </span>
                                            <span class="sidenav-normal"> Editorial </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../../pages/calendar.html">
                              <i class="ni ni-calendar-grid-58 text-red"></i>
                              <span class="nav-link-text">Calendar</span>
                            </a>
                        </li>

                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                      <span class="docs-normal">Documentation</span>
                      <span class="docs-mini">D</span>
                    </h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/index">
                                <i class="ni ni-spaceship"></i>
                                <span class="nav-link-text">Getting started</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
	@endif
	@endauth
    <!-- Main content -->
    <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-light bg-secondary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse row" id="navbarSupportedContent">

				<div class="col-2">
					<a class="btn btn-default" href="/">Home</a>
				</div>

				@auth
					<div class="col-8 text-center">
						<a href="/index">Crea tu libro</a>
					</div>
					<div class="col-2">
						<!-- Navbar links -->
						<ul class="navbar-nav align-items-center  ml-md-auto ">
							<li class="nav-item dropdown">
								<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<button id="cart-btn" type="button" class="btn">
										<span>
											<i class="ni ni-cart"></i>
										</span>
										<?php $session = json_decode(Session::get('cart'),true) ?>
										<?php if ($session != NULL): ?>
											<span id="cart-badge" class="badge badge-md badge-circle badge-floating badge-danger border-white"><i class="fas fa-bell" style="font-size:.55rem"></i></span>
										<?php endif ?>
									</button>
								</a>
								<div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
									<!-- List group -->
									<div id="shoppingcart-div" class="list-group list-group-flush">
										@include('main.partials.cart')
									</div>
								</div>
							</li>
		                    <li class="nav-item dropdown">
		                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                            <div class="media align-items-center">
		                                <span class="avatar avatar-sm rounded-circle">
		                                    <img alt="Image placeholder" src="{{ asset('img/theme/team-4.jpg') }}">
		                                </span>
		                                <div class="media-body  ml-2  d-none d-lg-block">
		                                    <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
		                                </div>
		                            </div>
		                        </a>
		                        <div class="dropdown-menu  dropdown-menu-right ">
		                            <div class="dropdown-header noti-title">
		                                <h6 class="text-overflow m-0">Welcome!</h6>
		                            </div>
		                            <a href="#!" class="dropdown-item">
		                                <i class="ni ni-single-02"></i>
		                                <span>My profile</span>
		                            </a>
		                            <a href="#!" class="dropdown-item">
		                                <i class="ni ni-calendar-grid-58"></i>
		                                <span>Activity</span>
		                            </a>
		                            <a href="#!" class="dropdown-item">
		                                <i class="ni ni-support-16"></i>
		                                <span>Support</span>
		                            </a>
		                            <div class="dropdown-divider"></div>
		                            <a href="{{ route('logout') }}" class="dropdown-item"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
		                                <i class="ni ni-user-run"></i>
		                                <span>Logout</span>
		                            </a>

		                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		                                @csrf
		                            </form>
		                        </div>
		                    </li>
		                </ul>
					</div>
				@else
					<div class="col-10 text-right">
						<a class="btn btn-default" href="{{ route('login') }}">
							{{ __('Login') }}
						</a>
						<a class="btn btn-default" href="{{ route('register') }}">
							{{ __('Register') }}
						</a>
					</div>
                @endguest
            </div>
        </div>
    </nav>
    <!-- Page content -->
        <div class="container-fluid" style="padding-left:0px !important; padding-right:0px !important">

            @yield('content')

        </div>
    </div>
    @yield('js')
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="/vendor/js-cookie/js.cookie.js"></script>
    <script src="/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="/js/argon.js?v=1.2.0"></script>

</body>

</html>
