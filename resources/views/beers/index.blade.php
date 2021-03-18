<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
		<title>Beers - Table</title>
	</head>
	<body>

		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Image</th>
		      <th scope="col">Brand</th>
		      <th scope="col">Price</th>
		    </tr>
		  </thead>
		  <tbody>
				@foreach ($beers as $beer)
					<tr>
						<th scope="row">{{$beer->id}}</th>
						<td><img src="{{$beer->image}}" alt="beer" width="130px" height="150px" /></td>
						<td>{{$beer->brand}}</td>
						<td>{{$beer->price}}€</td>
					</tr>
				@endforeach
		  </tbody>
		</table>

	</body>
</html>
