@extends('template')

@section('content')


<div class="row p-5">
	<!-- Cart Info -->
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header bg-transparent">
				<h3 class="mb-0">Your cart</h3>
			</div>
			<div class="card-body">
				<div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
					<div class="timeline-block">
						<span class="timeline-step badge-success">
							<i class="ni ni-bell-55"></i>
						</span>
						<div class="timeline-content">
							<small class="text-muted font-weight-bold">10:30 AM</small>
							<h5 class=" mt-3 mb-0">New message</h5>
							<p class=" text-sm mt-1 mb-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
							<div class="mt-3">
								<span class="badge badge-pill badge-success">design</span>
								<span class="badge badge-pill badge-success">system</span>
								<span class="badge badge-pill badge-success">creative</span>
							</div>
						</div>
					</div>
					<div class="timeline-block">
						<span class="timeline-step badge-danger">
							<i class="ni ni-html5"></i>
						</span>
						<div class="timeline-content">
							<small class="text-muted font-weight-bold">10:30 AM</small>
							<h5 class=" mt-3 mb-0">Product issue</h5>
							<p class=" text-sm mt-1 mb-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
							<div class="mt-3">
								<span class="badge badge-pill badge-danger">design</span>
								<span class="badge badge-pill badge-danger">system</span>
								<span class="badge badge-pill badge-danger">creative</span>
							</div>
						</div>
					</div>
					<div class="timeline-block">
						<span class="timeline-step badge-info">
							<i class="ni ni-like-2"></i>
						</span>
						<div class="timeline-content">
							<small class="text-muted font-weight-bold">10:30 AM</small>
							<h5 class=" mt-3 mb-0">New likes</h5>
							<p class=" text-sm mt-1 mb-0">Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
							<div class="mt-3">
								<span class="badge badge-pill badge-info">design</span>
								<span class="badge badge-pill badge-info">system</span>
								<span class="badge badge-pill badge-info">creative</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Shopping form -->
	<div class="col-lg-6">
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


@endsection

@section('js')
<script src="/vendor/jquery/dist/jquery.min.js"></script>
<script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="/views/books/main.js"></script>
@endsection
