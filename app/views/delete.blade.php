@extends('layout')

@section('content')
<div class = "div-header">
	<h1>Delete {{ $offer->id}} <small>are you sure?</small></h1>
</div>

{{ Form::open(array(
	'action' => 'OfferController@handleDelete',
	'method' => 'post'
	))}}

	{{Form::submit('Delete')}}
	<a href="{{ action('OfferController@index') }}" class = 'btn btn-primary'>Cancel</a>
{{Form::close() }}

@stop