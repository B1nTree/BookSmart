@extends('layout')

@section('content')
	<div class = "page-header">
		<h1>All Offers <small>big and small</small></h1>
	</div>

	<div class = "panel panel-default">
		<div class= "panel-body">
			<a href = "{{ action('OfferController@create') }}" class = "btn btn-primary">Create Offer</a>
		</div>
	</div>

	@if ($offers->isEmpty())
		<p>Sorry, no offers recieved yet!</p>
	@else
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Offer ID</th>
					<th>For Date</th>
					<th>Guarantee</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach($offers as $offer)
				<tr>
					<td><a href = "{{ action('OfferController@detail', $offer->id)}}">{{ $offer->id }}</a></td>
					<td>{{ $offer->offeredDate }}</td>
					<td>{{ $offer->guarantee }}</td>
					<td>{{ $offer->status }}</td>
					<td><a href = "{{ action('OfferController@edit', $offer->id) }}" class = "btn btn-primary">Edit</a></td>
					<td><a href = "{{ action('OfferController@delete', $offer->id) }}" class = "btn btn-danger">Delete</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@endif
	@stop