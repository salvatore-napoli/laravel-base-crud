@extends('beers.base')

@section('head')
	@section('title', 'Beers - Create')

@section('body')
	<form action="{{ route('beers.store') }}" method="post">
		@csrf
		@method('POST')

	  <div class="form-group">
	    <label for="image">Image URL</label>
	    <input type="text" class="form-control" name="image" placeholder="Image URL">
	  </div>

	  <div class="form-group">
	    <label for="brand">Brand</label>
	    <input type="text" class="form-control" name="brand" placeholder="Brand">
	  </div>

	  <div class="form-group">
	    <label for="price">Price</label>
	    <input type="text" class="form-control" name="price" placeholder="Price">
	  </div>

	  <button type="submit" class="btn btn-primary">Create</button>
	</form>
