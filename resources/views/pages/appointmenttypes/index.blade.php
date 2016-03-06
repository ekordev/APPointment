@extends('layouts.layout', ['page' => 'Appointment types'])

@section('content')

	<a href="{{ url('appointmenttypes/create') }}" class="btn btn-default create">Create appointment type</a>
	<div class="table-responsive">
		<table class="table-responsive table table-hover">
			<h1>Appointment types</h1>
			<thead>
				<tr>
					<th>Name</th>
					<th>Time (minutes)</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($appointment_types as $appointment_type)
					<tr>
						<td>{{ $appointment_type->name }}</td>
						<td>{{ $appointment_type->time }}</td>
						<td>
							<a href="{{ url('/appointmenttypes/' . $appointment_type->id . '/edit') }}"><i class="material-icons">edit</i></a>
							<a href="{{ url('/appointmenttypes/' . $appointment_type->id . '/delete') }}"><i class="material-icons">delete</i></a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@stop