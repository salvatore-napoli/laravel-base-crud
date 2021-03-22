@extends('beers.base')

@section('head')
	@section('title', 'Beers - Table')

@section('body')
	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">#</th>
	      <th scope="col">Image</th>
	      <th scope="col">Brand</th>
	      <th scope="col">Price</th>
	      <th scope="col">Actions</th>
	    </tr>
	  </thead>
	  <tbody>
			@foreach ($beers as $beer)
				<tr>
					<th scope="row">{{$beer->id}}</th>
					<td>
						<a href="{{ route('beers.show', compact('beer')) }}">
						<img src="{{$beer->image}}" alt="beer" width="130px" height="150px" />
						</a>
						</td>
					<td>{{$beer->brand}}</td>
					<td>{{$beer->price}}€</td>
					<td>
						<a href="{{ route('beers.show', compact('beer')) }}">
							<i class="far fa-eye"></i>
						</a>
						<a href="{{ route('beers.edit', compact('beer')) }}">
							<i class="far fa-edit"></i>
						</a>
						<form action="{{ route('beers.destroy', compact('beer')) }}" method="post">
							@csrf
							@method('DELETE')

							<button type="submit" name="btn btn-danger">
								<i class="far fa-trash-alt"></i>
							</button>
						</form>
					</td>
				</tr>
			@endforeach
	  </tbody>
	</table>
