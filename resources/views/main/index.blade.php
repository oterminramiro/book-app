@extends('template')

@section('content')

<div class="header bg-primary pt-5 pb-7">
  <div class="container">
	<div class="header-body">
	  <div class="row align-items-center">
		<div class="col-lg-6">
		  <div class="pr-5">
			<h1 class="display-2 text-white font-weight-bold mb-0">Argon Dashboard PRO</h1>
			<h2 class="display-4 text-white font-weight-light">A beautiful premium dashboard for Bootstrap 4.</h2>
			<p class="text-white mt-4">Argon perfectly combines reusable HTML and modular CSS with a modern styling and beautiful markup throughout each HTML template in the pack.</p>
			<div class="mt-5">
			  <a href="./pages/dashboards/dashboard.html" class="btn btn-neutral my-2">Explore Dashboard</a>
			  <a href="https://www.creative-tim.com/product/argon-dashboard-pro" class="btn btn-default my-2">Purchase now</a>
			</div>
		  </div>
		</div>
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

@endsection

@section('js')
<script src="/vendor/jquery/dist/jquery.min.js"></script>
<script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
@endsection
