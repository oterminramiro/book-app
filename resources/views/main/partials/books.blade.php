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
