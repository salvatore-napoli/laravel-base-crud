<!DOCTYPE html>
<html lang="en" dir="ltr">
	@section('head')
		<meta charset="utf-8">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
		<title>@yield('title')</title>
	@section('body')
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>
		@endif
</html>
