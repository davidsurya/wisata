@extends('admin.index')

@section('content2')
<div class="col-sm-12">
	<strong><i class="glyphicon glyphicon-map-marker"></i> Tambah Lokasi</strong>
	<hr>	
	{!! Form::open(['url' => '/lokasi', 'class' => 'form-horizontal']) !!}
		@include('admin.form', ['submitButtonText' => 'Tambah'])
	{!! Form::close() !!}
</div>
@stop