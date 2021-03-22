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

						<button type="button" name="btn btn-danger" data-toggle="modal" data-target="#deleteItem{{$beer->id}}">
							<i class="far fa-trash-alt"></i>
						</button>

						<!-- Modal -->
						<form action="{{ route('beers.destroy', compact('beer')) }}" method="post">
							@csrf
							@method('DELETE')

							<div class="modal fade" id="deleteItem{{$beer->id}}" tabindex="-1" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title">Confirm deletion</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">
							        Are you sure you want to delete this item?
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Go back</button>
							        <button type="submit" class="btn btn-primary">Confirm</button>
							      </div>
							    </div>
							  </div>
							</div>
						</form>
					</td>
				</tr>
			@endforeach
	  </tbody>
	</table>
