<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
	<meta name="author" content="Creative Tim">
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
</head>

<body>

	@auth
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
								<span class="nav-link-text">Dashboards</span>
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
							<a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard-pro/docs/getting-started/overview.html" target="_blank">
								<i class="ni ni-spaceship"></i>
								<span class="nav-link-text">Getting started</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	@endauth
	<!-- Main content -->
	<div class="main-content" id="panel">
	<!-- Topnav -->
	<nav class="navbar navbar-top navbar-expand navbar-light bg-secondary border-bottom">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">


				@auth
				<!-- Search form -->
				<form class="navbar-search navbar-search-dark form-inline mr-sm-3" id="navbar-search-main">
					<div class="form-group mb-0">
						<div class="input-group input-group-alternative input-group-merge">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-search"></i></span>
							</div>
							<input class="form-control" placeholder="Search" type="text">
						</div>
					</div>
					<button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
					  <span aria-hidden="true">×</span>
					</button>
				</form>


				<!-- Navbar links -->
				<ul class="navbar-nav align-items-center  ml-md-auto ">
					<li class="nav-item d-xl-none">
						<!-- Sidenav toggler -->
						<div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">
							<div class="sidenav-toggler-inner">
								<i class="sidenav-toggler-line"></i>
								<i class="sidenav-toggler-line"></i>
								<i class="sidenav-toggler-line"></i>
							</div>
						</div>
					</li>
					<li class="nav-item d-sm-none">
						<a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
							<i class="ni ni-zoom-split-in"></i>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="ni ni-cart"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
							<!-- Dropdown header -->
							<div class="px-3 py-3">
								<h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
							</div>
							<!-- List group -->
							<div class="list-group list-group-flush">
								<a href="#!" class="list-group-item list-group-item-action">
									<div class="row align-items-center">
										<div class="col-auto">
											<!-- Avatar -->
											<img alt="Image placeholder" src="{{ asset('img/theme/team-1.jpg') }}" class="avatar rounded-circle">
										</div>
										<div class="col ml--2">
											<div class="d-flex justify-content-between align-items-center">
												<div>
													<h4 class="mb-0 text-sm">John Snow</h4>
												</div>
												<div class="text-right text-muted">
													<small>2 hrs ago</small>
												</div>
											</div>
											<p class="text-sm mb-0">Lets meet at Starbucks at 11:30. Wdyt?</p>
										</div>
									</div>
								</a>
							</div>
							<!-- View all -->
							<a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
						</div>
					</li>
				</ul>
				@endauth

				@guest
					<ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
					</ul>
				@else
				<ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
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
				@endguest
			</div>
		</div>
	</nav>
	<!-- Page content -->
		<div class="container-fluid">

			@yield('content')

		</div>
	</div>
	<!-- Argon Scripts -->
	<!-- Core -->
	<script src="/vendor/jquery/dist/jquery.min.js"></script>
	<script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="/vendor/js-cookie/js.cookie.js"></script>
	<script src="/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
	<script src="/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
	<!-- Optional JS -->
	<script src="/vendor/chart.js/dist/Chart.min.js"></script>
	<script src="/vendor/chart.js/dist/Chart.extension.js"></script>
	<script src="/vendor/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="/js/vendor/jvectormap/jquery-jvectormap-world-mill.js"></script>
	<!-- Argon JS -->
	<script src="/js/argon.js?v=1.2.0"></script>
	<!-- Demo JS - remove this in your project -->
	<script src="/js/demo.min.js"></script>

</body>

</html>
