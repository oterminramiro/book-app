@extends('template')

@section('content')

<div class="container-fluid">
	<div class="row p-5">
		<!-- Cart Info -->
		<div class="col-lg-6 px-5">
			<div class="card">
				<div class="card-header bg-transparent">
					<h3 class="mb-0">Your cart</h3>
				</div>
				<div class="card-body pt-0">
					<div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
						<?php #var_dump($session_decoded) ?>
						@foreach ( $response as $item )
						<div class="timeline-block" style="margin: 0.5rem 0">

							<div class="timeline-content">

								<div class="row">
									<div class="col-2 text-center px-0">
										<img class="avatar avatar-xl mt-4" src="{{ asset('uploads/'. $item['img'] .'') }}" alt="Image placeholder">
									</div>
									<div class="col">
										<h5 class=" mt-3 mb-0">{{ $item['name'] }}</h5>
										<p class=" text-sm mt-1 mb-0">{{ $item['description'] }}</p>
										<div class="mt-3">
											<span class="badge badge-pill badge-success">{{ $item['editorial'] }}</span>
											<span class="badge badge-pill badge-success">{{ $item['booktype'] }}</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<!-- Shopping form -->
		<div class="col-lg-6 px-5">
			<div class="card">
				<div class="card-header bg-transparent">
					<h3 class="mb-0">Shipping</h3>
				</div>
				<div class="card-body">
					<form>
						<div class="form-group">
							<label class="form-control-label" for="exampleFormControlInput1">Email address</label>
							<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
						</div>
						<div class="form-group">
							<label class="form-control-label" for="exampleFormControlSelect1">Example select</label>
							<select class="form-control" id="exampleFormControlSelect1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="form-group">
							<label class="form-control-label" for="exampleFormControlSelect2">Example multiple select</label>
							<select multiple="" class="form-control" id="exampleFormControlSelect2">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="form-group">
							<label class="form-control-label" for="exampleFormControlTextarea1">Example textarea</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection

@section('js')
<script src="/vendor/jquery/dist/jquery.min.js"></script>
<script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="/views/books/main.js"></script>
@endsection
