@extends('layout')

@section('content')
<div class = 'page-header'>
	<h1>Edit Offer {{ $offer->id }}</h1>
</div>
		{{ Form::open(array (
			'action' => 'OfferController@handleEdit',
			'method' => 'post'
		))}}

		{{ Form::label('For_Date', 'For Date') }}
		{{ Form::text('offeredDate', $offer->offeredDate) }}

		{{ Form::label('Guarantee', 'Guarantee') }}
		{{ Form::text('guarantee', $offer->guarantee) }}

		{{ Form::label('bonus','Bonus') }}
		{{ Form::text('bonus', $offer->bonus) }}

		{{ Form::label('Technical','Technical') }}
		{{ Form::text('technical', $offer->technical) }}

		{{ Form::label('media_support', 'Media Support') }}
		{{ Form::text('mediaSupport', $offer->mediaSupport) }}

		{{ Form::label('Sellable Cap') }}
		{{ Form::text('sellableCap', $offer->sellableCap) }}

		{{ Form::label('Age Limit') }}
		{{ Form::text('ageLimit', $offer->ageLimit) }}

		{{ Form::label('GA Ticket 1') }}
		{{ Form::text('gaTicket1', $offer->gaTicket1) }}

		{{ Form::label('GA Ticket 2') }}
		{{ Form::text('gaTicket2', $offer->gaTicket2) }}

		{{ Form::label('Load in') }}
		{{ Form::text('loadIn', $offer->loadIn) }}

		{{ Form::label('Doors') }}
		{{ Form::text('doors', $offer->doors) }}

		{{ Form::label('Set Time') }}
		{{ Form::text('setTime', $offer->setTime) }}

		{{ Form::label('set_length', 'Set Length') }}
		{{ Form::text('setLength', $offer->setLength) }}

		{{ Form::label('Curfew') }}
		{{ Form::text('curfew', $offer->curfew) }}

		{{ Form::label('Leave a note') }}
		{{ Form::textarea('note', $offer->note) }}

		{{ Form::label('Additional Terms')}}
		{{ Form::textarea('additionalTerms', $offer->additionalTerms)}}

		{{ Form::submit('Submit Offer') }}
	{{ Form::close() }}
</form>
</div>
@stop