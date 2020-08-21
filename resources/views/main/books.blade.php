@extends('template')

@section('content')
<div class="row">
	<div class="col-1 ml-3 mt-5">
		<div class="container text-left">
			@include('main.partials.filter')
		</div>
	</div>
	<div class="col pr-8 pl-6 mt-5">
		<div class="row" id="books-content">
			@include('main.partials.books')
		</div>
	</div>
</div>


@endsection

@section('js')
<script src="/vendor/jquery/dist/jquery.min.js"></script>
<script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="/views/books/main.js"></script>
@endsection
