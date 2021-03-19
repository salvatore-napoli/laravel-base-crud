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
				</tr>
			@endforeach
	  </tbody>
	</table>
