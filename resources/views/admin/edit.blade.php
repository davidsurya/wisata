@extends('admin.index')

@section('content2')
<div class="col-sm-12">
	<strong><i class="glyphicon glyphicon-map-marker"></i> Edit Lokasi : {{ $location->name }}</strong>
	<hr>
	{!! Form::model($location, ['method' => 'PATCH', 'url' => '/lokasi/'.$location->id, 'class' => 'form-horizontal']) !!}
		@include('admin.form', ['submitButtonText' => 'Update'])
	{!! Form::close() !!}
</div>
@stop