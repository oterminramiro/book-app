@extends('template')

@section('content')
{{ Cookie::get('shoppingcart') }}
<div class="px-8 mt-5">
	<div class="row">
		@foreach ($books as $book)
		<div class="col-3">
			<!-- Image-Text card -->
			<div class="card">
				<!-- Card image -->
				<img class="card-img-top" src="{{ asset('uploads/'. $book->image .'') }}" alt="Image placeholder">
				<!-- Card body -->
				<div class="card-body">
					<h5 class="h2 card-title mb-0 text-center">{{ $book->name }}</h5>
					<p class="text-center card-text mt-2">{{ $book->description }}</p>
					<button id="{{ $book->guid }}" type="button" class="btn btn-primary btn-lg btn-block addtocart">Add to cart</button>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>


@endsection

@section('js')
<script src="/vendor/jquery/dist/jquery.min.js"></script>
<script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="/views/books/main.js"></script>
@endsection
