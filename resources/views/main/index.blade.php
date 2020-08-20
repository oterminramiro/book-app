@extends('template')

@section('content')

<!-- Main container -->
<div class="header bg-primary pt-5 pb-7">
	<div class="container">
		<div class="header-body">
			<div class="row align-items-center">

				<!-- Main Promo -->
				<div class="col-lg-6">
					<div class="pr-5">
						<h1 class="display-2 text-white font-weight-bold mb-0">Crear tu libro personalizado nunca fue tan facil</h1>
						<h2 class="display-4 text-white font-weight-light">Elegi tus recetas favoritas.</h2>
						<p class="text-white mt-4">Una vez terminado nosotros te lo armamos y llevamos hasta tu casa.</p>
						<div class="mt-5">
							<a href="/index" class="btn btn-neutral my-2">Arma tu libro</a>
							<a href="{{ route('register') }}" class="btn btn-default my-2">Registrate</a>
						</div>
					</div>
				</div>

				<!-- Widgets -->
				<div class="col-lg-6">
					<div class="row pt-5">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-4">
										<i class="ni ni-active-40"></i>
									</div>
									<h5 class="h3">Components</h5>
									<p>Argon comes with over 70 handcrafted components.</p>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow mb-4">
										<i class="ni ni-active-40"></i>
									</div>
									<h5 class="h3">Plugins</h5>
									<p>Fully integrated and extendable third-party plugins that you will love.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 pt-lg-5 pt-4">
							<div class="card mb-4">
								<div class="card-body">
									<div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow mb-4">
										<i class="ni ni-active-40"></i>
									</div>
									<h5 class="h3">Pages</h5>
									<p>From simple to complex, you get a beautiful set of 15+ page examples.</p>
								</div>
							</div>
							<div class="card mb-4">
								<div class="card-body">
									<div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow mb-4">
									  <i class="ni ni-active-40"></i>
									</div>
									<h5 class="h3">Documentation</h5>
									<p>You will love how easy is to to work with Argon.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<!-- Secondary container -->
<div class="container py-5 text-center">
	<h2>Un libro para cada gusto.</h2>
	<p>Seleccioná 24 recetas, la tapa y el título que más te gusten.<br>¡Podés poner tu nombre en la tapa!</p>
	<a href="/index" class="btn btn-neutral my-2">Arma tu libro</a>
</div>

<!-- How to container -->
<div class="container py-5">
	<div class="row">
		<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 px-0">
			<img src="{{ asset('img/home/1.jpg') }}" alt="" class="mb-2">
			<p style="font-size: 14px;">Registrate</p>
		</div>
		<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 px-0">
			<img src="{{ asset('img/home/2.jpg') }}" alt="" class="mb-2">
			<p style="font-size: 14px;">Seleccioná las 24 recetas</p>
		</div>
		<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 px-0">
			<img src="{{ asset('img/home/3.gif') }}" alt="" class="mb-2">
			<p style="font-size: 14px;">Personalizá el título y el nombre en la tapa</p>
		</div>
		<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 px-0">
			<img src="{{ asset('img/home/4.jpg') }}" alt="" class="mb-2">
			<p style="font-size: 14px;">Pagá online</p>
		</div>
		<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 px-0">
			<img src="{{ asset('img/home/5.jpg') }}" alt="" class="mb-2">
			<p style="font-size: 14px;">Recibí de regalo la versión digital</p></div>
		<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6 px-0">
			<img src="{{ asset('img/home/6.jpg') }}" alt="" class="mb-2">
			<p style="font-size: 14px;">¡Recibilo en tu casa o retíralo en nuestro local!</p>
		</div>
	</div>
</div>

<div class="container py-5">
	<div class="row">
		<div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12 my-auto">
			<img src="{{ asset('img/home/mail.png') }}" alt="" class="img-fluid">
		</div>
		<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 my-auto text-xl-left text-lg-left text-md-left text-sm-center text-center p-0"><h2>¡Suscribite a nuestro newsletter!</h2> <p>Enterate, antes que nadie, de nuestras mejores promociones dejando directamente tu correo electrónico.</p></div>
		<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 my-auto p-0">
			<form method="post" class="form-inline">
				<input type="hidden" name="_token" value="LQcIfLT79FvxZzGL0x1CS8TuRikDyOS8TrZx0Bzo">
				<div class="row w-100">
					<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 text-right">
						<input type="email" name="email" placeholder="Ingresá tu email" required="required" class="form-control">
					</div>
					<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
						<button type="button" class="btn btn-default">Suscribirme</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="container text-center py-3">
	<a target="_blank" href="protecciondatos" style="color:#929191">Políticas de protección de datos Personales</a>
	<span class="d-none d-sm-none d-md-none d-lg-inline-block d-xl-inline-block" style="color:#929191"> | </span>
	<a target="_blank" href="legales" style="color:#929191">Legales de venta</a>
</div>
@endsection

@section('js')
<script src="/vendor/jquery/dist/jquery.min.js"></script>
<script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
@endsection
