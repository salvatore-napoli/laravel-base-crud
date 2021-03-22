@extends('beers.base')

@section('head')
	@section('title', 'Beers - Create')

@section('body')
	<form action="{{ route('beers.store') }}" method="post" class="needs-validation" novalidate>
		@csrf
		@method('POST')

	  <div class="form-group">
	    <label for="image">Image URL</label>
	    <input type="text" class="form-control" name="image" placeholder="Image URL" required>
			<div class="valid-feedback">
				<span>OK!</span>
			</div>
			<div class="invalid-feedback">
				<span>Please choose a Price.</span>
			</div>
	  </div>

	  <div class="form-group">
	    <label for="brand">Brand</label>
	    <input type="text" class="form-control" name="brand" placeholder="Brand" required>
			<div class="valid-feedback">
				<span>OK!</span>
			</div>
			<div class="invalid-feedback">
				<span>Please choose a Price.</span>
			</div>
	  </div>

	  <div class="form-group">
	    <label for="price">Price</label>
	    <input type="text" class="form-control" name="price" placeholder="Price" required>
			<div class="valid-feedback">
				<span>OK!</span>
			</div>
			<div class="invalid-feedback">
				<span>Please choose a Price.</span>
			</div>
	  </div>

	  <button type="submit" class="btn btn-primary">Create</button>
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
