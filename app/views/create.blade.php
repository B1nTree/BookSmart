@extends('layout')

@section('content')
	<div class = "page-header">
		<h1>Create an Offer</h1>
	</div>

	<table class = "table table-striped">
		{{ Form::open(array (
			'action' => 'OfferController@create',
			'method' => 'post'
		))}}

		{{ Form::label('For_Date', 'For Date') }}
		{{ Form::text('offeredDate') }}

		{{ Form::label('Guarantee', 'Guarantee') }}
		{{ Form::text('guarantee') }}

		{{ Form::label('bonus','Bonus') }}
		{{ Form::text('bonus') }}

		{{ Form::label('Technical','Technical') }}
		{{ Form::text('technical') }}

		{{ Form::label('media_support', 'Media Support') }}
		{{ Form::text('mediaSupport') }}

		{{ Form::label('Sellable Cap') }}
		{{ Form::text('sellableCap') }}

		{{ Form::label('Age Limit') }}
		{{ Form::text('ageLimit') }}

		{{ Form::label('GA Ticket 1') }}
		{{ Form::text('gaTicket1') }}

		{{ Form::label('GA Ticket 2') }}
		{{ Form::text('gaTicket2') }}

		{{ Form::label('Load in') }}
		{{ Form::text('loadIn') }}

		{{ Form::label('Doors') }}
		{{ Form::text('doors') }}

		{{ Form::label('Set Time') }}
		{{ Form::text('setTime') }}

		{{ Form::label('set_length', 'Set Length') }}
		{{ Form::text('setLength') }}

		{{ Form::label('Curfew') }}
		{{ Form::text('curfew') }}

		{{ Form::label('Leave a note') }}
		{{ Form::textarea('note') }}

		{{ Form::label('Additional Terms')}}
		{{ Form::textarea('additionalTerms')}}

		{{ Form::submit('Submit Offer') }}
	{{ Form::close() }}
</div>

@stop