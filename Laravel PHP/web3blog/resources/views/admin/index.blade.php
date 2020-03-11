@extends('main')

@section('title', '| Admin page')

@section('content')

	<div>
		<h1>ADMIN PANEL</h1>
	</div>
	
	<div class="row">
		<div class="col-md-8">
			<h1>All Users</h1>
		</div>

		<div class="col-md-4">
			<a href="{{ url('/getExportUsers') }}" class="btn btn-lg btn-block btn-success btn-h1-spacing">Export to Excel </a>
		</div>

		<div class="col-md-12">
			<hr>			
		</div>
	</div> <!-- end of row-->

	<div class="row">
		<div class="col-md-12">
		<table class="table">
			<thead>
					<th>#</th>
					<th>Facebook ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Created At</th>
					<th></th>
					<th></th>
			</thead>

			<tbody>

				@foreach ($users as $user)
				<tr>
					<th>{{ $user->id }}</th>
					<td>{{ $user->facebook_id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ date('M j, Y', strtotime($user->created_at)) }}</td>
					<td ><a href="{{ route('admin.show', $user->id) }}" class="btn btn-default btn-sm btn-block">View</a></td>
					<td>
					{!! Form::open(['route' => ['admin.destroy', $user->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm btn-block']) !!}
					{!! Form::close() !!}</td> 
				</tr>
				@endforeach

			</tbody>
		</table>

		<div class="text-center">
		{!! $users->links(); !!}
			
		</div>
			
		</div>
		
	</div>

@endsection