@extends('template')

	@section('css')
		<meta name="csrf-token" content="{{ csrf_token() }}">
		@include(backpack_view('inc.head'))
	@endsection


	@section('content')
	<div class="mt-5">


		<!-- Page content -->
		<main class="main py-2">
			@yield('header')


		</main>

		<div class="container-fluid animated fadeIn py-2">

			@yield('before_content_widgets')

			@yield('content')

			@yield('after_content_widgets')

		</div>
		<div class="container-fluid text-left">
			@yield('before_breadcrumbs_widgets')

			@includeWhen(isset($breadcrumbs), backpack_view('inc.breadcrumbs'))

			@yield('after_breadcrumbs_widgets')
		</div>

	</div>
	@endsection

	@section('js')
	<!-- ./app-body -->
	@yield('before_scripts')
	@stack('before_scripts')

	@include(backpack_view('inc.scripts'))

	@yield('after_scripts')
	@stack('after_scripts')

	@endsection
