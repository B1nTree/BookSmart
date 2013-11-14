@extends('layout')

@section('content')

<div class="page-header">
	<h1>Details for Offer {{$offer->id}}</h1>
</div>

<table class = "table table-striped">
	<thead>
		<tr>
			<th>
				Field
			</th>
			<th>
				Value
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				Offered Date
			</td>
			<td>
				{{ $offer->offeredDate }}
			</td>
		</tr>
		<tr>
			<td>
				Guarantee
			</td>
			<td>
				{{ $offer->guaranttee }}
			</td>
		</tr>
		<tr>
			<td>
				Bonus
			</td>
			<td>
				{{ $offer->bonus }}
			</td>
		</tr>
		<tr>
			<td>
				Technical
			</td>
			<td>
				{{ $offer->technical }}
			</td>
		</tr>
		<tr>
			<td>
				Media Support
			</td>
			<td>
				{{ $offer->mediaSupport }}
			</td>
		</tr>
		<tr>
			<td>
				Sellable Cap
			</td>
			<td>
				{{ $offer->sellableCap }}
			</td>
		</tr>
		<tr>
			<td>
				Age Limit
			</td>
			<td>
				{{ $offer->ageLimit }}
			</td>
		</tr>
		<tr>
			<td>
				GA Ticket 1
			</td>
			<td>
				{{ $offer->gaTicket1 }}
			</td>
		</tr>
		<tr>
			<td>
				GA Ticket 2
			</td>
			<td>
				{{ $offer->gaTicket2 }}
			</td>
		</tr>
		<tr>
			<td>
				Load In
			</td>
			<td>
				{{ $offer->loadIn }}
			</td>
		</tr>
		<tr>
			<td>
				Doors
			</td>
			<td>
				{{ $offer->doors }}
			</td>
		</tr>
		<tr>
			<td>
				Set Time
			</td>
			<td>
				{{ $offer->setTime }}
			</td>
		</tr>
		<tr>
			<td>
				Set Length
			</td>
			<td>
				{{ $offer->setLength }}
			</td>
		</tr>
		<tr>
			<td>
				Curfew
			</td>
			<td>
				{{ $offer->curfew }}
			</td>
		</tr>
		<tr>
			<td>
				Note
			</td>
			<td>
				{{ $offer->note }}
			</td>
		</tr>
		<tr>
			<td>
				Additional terms
			</td>
			<td>
				{{ $offer->additionalTerms }}
			</td>
		</tr>
	</tbody>
</table>

@stop