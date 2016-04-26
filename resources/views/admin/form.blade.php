<!-- Kolom nama -->
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	{!! Form::label('name', 'Nama', ['class'=>'col-md-1 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('name', null, ['placeholder'=>'Nama Lokasi', 'class'=>'form-control']) !!}
		@if ($errors->has('name'))
		<span class="help-block">
			<strong>{{ $errors->first('name') }}</strong>
		</span>
		@endif
	</div>
</div>


<!-- Kolom deskripsi -->
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
	{!! Form::label('description', 'Deskripsi', ['class'=>'col-md-1 control-label']) !!}
	<div class="col-md-6">
		{!! Form::textarea('description', null, ['placeholder'=>'Deskripsi lokasi wisata', 'class'=> 'form-control', 'rows' => 6]) !!}
		@if ($errors->has('description'))
		<span class="help-block">
			<strong>{{ $errors->first('description') }}</strong>
		</span>
		@endif
	</div>
</div>


<!-- Kolom latitude -->
<div class="form-group{{ $errors->has('latitude') ? ' has-error' : '' }}">
	{!! Form::label('latitude', 'Latitude', ['class'=>'col-md-1 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('latitude', null, ['placeholder'=>'Latitude', 'class'=>'form-control']) !!}
		@if ($errors->has('latitude'))
		<span class="help-block">
			<strong>{{ $errors->first('latitude') }}</strong>
		</span>
		@endif
	</div>
</div>


<!-- Kolom longitude -->
<div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}">
	{!! Form::label('longitude', 'Longitude', ['class'=>'col-md-1 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('longitude', null, ['placeholder'=>'Longitude', 'class'=>'form-control']) !!}
		@if ($errors->has('longitude'))
		<span class="help-block">
			<strong>{{ $errors->first('longitude') }}</strong>
		</span>
		@else
		
		@endif
	</div>
</div>

<!-- Kolom bantuan penggunaan peta -->
<div class="form-group">	
	<span class="help-block col-md-offset-1">
		<strong>Gunakan menu peta untuk melihat latitude dan longitude lokasi wisata.</strong>
	</span>
</div>	


<!-- Kolom harga tiket -->
<div class="form-group{{ $errors->has('ticket') ? ' has-error' : '' }}">
	{!! Form::label('ticket', 'Harga', ['class'=>'col-md-1 control-label']) !!}
	<div class="col-md-6">
		{!! Form::text('ticket', null, ['placeholder'=>'Harga tiket masuk', 'class'=>'form-control']) !!}
		@if ($errors->has('ticket'))
		<span class="help-block">
			<strong>{{ $errors->first('ticket') }}</strong>
		</span>
		@endif
	</div>
</div>


<!-- Kolom fasilitas -->
<div class="form-group{{ $errors->has('facilities') ? ' has-error' : '' }}">
	{!! Form::label('facilities', 'Fasilitas', ['class'=>'col-md-1 control-label']) !!}
	<div class="col-md-6">
		{!! Form::textarea('facilities', null, ['placeholder'=>'Fasilitas', 'class'=>'form-control', 'rows'=>4]) !!}
		@if ($errors->has('facilities'))
		<span class="help-block">
			<strong>{{ $errors->first('facilities') }}</strong>
		</span>
		@endif
	</div>
</div>


<!-- Button -->
<div class="form-group col-md-7 pull-right">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
	{!! Form::reset('Reset', ['class' => 'btn btn-success']) !!}		
</div>