@extends('admin.index')

@section('content2')
<div class="col-sm-12">
	<strong><i class="glyphicon glyphicon-map-marker"></i> Lokasi</strong>
	<hr>
	
	@if (Session::has('flash_message'))
		<div class="alert alert-success">
			{{ Session::get('flash_message') }}
		</div>
	@endif

	<a href="/lokasi/create" class="btn btn-info" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Data</a>
	
	<div class="panel panel-success">
		<div class="panel-body">
			<table class="table table-hover">
				<!-- Header tabel -->
				<thead>
					<tr>
						<td class="col-md-2">Nama</td>
						<td class="col-md-2">Deskripsi</td>
						<td class="col-md-1">Latitude</td>
						<td class="col-md-1">Longitude</td>
						<td class="col-md-1">Tiket</td>
						<td class="col-md-2">Fasilitas</td>
						<td class="col-md-2"><center>Aksi</center></td>
					</tr>
				</thead>

				<!-- Bodi tabel -->
				@foreach ($locations as $location)
				<tbody>
					<tr>						
						<td class="col-md-2">{{ $location->name }}</td>
						<td class="col-md-2">{{ $location->description }}</td>
						<td class="col-md-1">{{ $location->latitude }}</td>
						<td class="col-md-1">{{ $location->longitude }}</td>
						<td class="col-md-1">{{ $location->ticket }}</td>
						<td class="col-md-2">{{ $location->facilities }}</td>
						<td class="col-md-2">
							{!! Form::open(['url' => '/lokasi/'.$location->id, 'method' => 'DELETE']) !!}
							<a href="/lokasi/{{ $location->id }}" class="btn btn-success"><i class="glyphicon glyphicon-camera"></i></a>
							<a href="/lokasi/{{ $location->id }}/edit" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
							{!! Form::button('<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
							{!! Form::close() !!}
						</td>
					</tr>
				</tbody>
				@endforeach
				
			</table>
		</div>
	</div>
</div>
@stop