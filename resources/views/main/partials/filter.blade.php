
<div class="form-group" id="filter-type" >
	<h2>Book Type:</h2>
	@foreach ($bookType as $type)
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" value="{{ $type->guid }}" id="{{ $type->guid }}">
			<label class="custom-control-label" for="{{ $type->guid }}">{{ $type->name }}</label>
		</div>
	@endforeach
</div>

<div class="form-group" id="filter-ed" >
	<h2>Editorial:</h2>
	@foreach ($editorial as $ed)
		<div class="custom-control custom-checkbox">
			<input type="checkbox" class="custom-control-input" value="{{ $ed->guid }}" id="{{ $ed->guid }}">
			<label class="custom-control-label" for="{{ $ed->guid }}">{{ $ed->name }}</label>
		</div>
	@endforeach
</div>

<button id="filter-submit" type="button" class="btn btn-primary py-1 px-5">Submit</button>
