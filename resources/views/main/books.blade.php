@extends('template')

@section('content')
<div class="px-8 mt-5">
	<div class="row">
		@foreach ($books as $book)
		<div class="col-3">
			<!-- Image-Text card -->
			<div class="card">
				<!-- Card image -->
				<img class="card-img-top" src="{{ asset('img/theme/'. $book->image .'') }}" alt="Image placeholder">
				<!-- Card body -->
				<div class="card-body">
					<h5 class="h2 card-title mb-0 text-center">{{ $book->name }}</h5>
					<p class="text-center card-text mt-2">{{ $book->description }}</p>
					<button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>


@endsection
