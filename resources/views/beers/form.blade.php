@php
	// edit
	if (isset($edit) && !empty($edit)) {
	 	$method = 'PUT';
		$url = route('beers.update', compact('beer'));
	} else {
		// create
		$method = 'POST';
		$url = route('beers.store');
	}
@endphp


<form action="{{ $url }}" method="post" class="needs-validation" novalidate>
	@csrf
	@method($method)
	<div class="form-group">
		<label for="image">Image URL</label>
		<input type="text" class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" name="image" placeholder="Image URL" value="{{ isset($beer) ? $beer->image : ''}}">
		<div class="valid-feedback">
			<span>OK!</span>
		</div>
		<div class="invalid-feedback">
			<span>{{$errors->first('image')}}</span>
		</div>
	</div>

	<div class="form-group">
		<label for="brand">Brand</label>
		<input type="text" class="form-control {{$errors->has('brand') ? 'is-invalid' : ''}}" name="brand" placeholder="Brand" value="{{ isset($beer) ? $beer->brand : ''}}">
		<div class="valid-feedback">
			<span>OK!</span>
		</div>
		<div class="invalid-feedback">
			<span>{{$errors->first('brand')}}</span>
		</div>
	</div>

	<div class="form-group">
		<label for="price">Price</label>
		<input type="text" class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" name="price" placeholder="Price" value="{{ isset($beer) ? $beer->price : ''}}">
		<div class="valid-feedback">
			<span>OK!</span>
		</div>
		<div class="invalid-feedback">
			<span>{{$errors->first('price')}}</span>
		</div>
	</div>

	<button type="submit" class="btn btn-primary">Submit</button>
</form>


<script type="text/javascript">
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function () {
		'use strict'

		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.querySelectorAll('.needs-validation')

		// Loop over them and prevent submission
		Array.prototype.slice.call(forms)
			.forEach(function (form) {
				form.addEventListener('submit', function (event) {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					}

					form.classList.add('was-validated')
				}, false)
			})
	})()
</script>
