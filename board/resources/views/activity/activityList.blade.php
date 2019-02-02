@extends('layouts.main')

@section('content')
<table class="table table-striped table-hover">
	<a href="{{ URL::to('/myActivity/addNewActivity') }}" class="btn btn-sm btn-primary ">Add Acivity</a>
	<thead>
		<tr>
			<th></th>
		</tr>
	</thead>
	<tbody>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($activities as $key => $value)
						<tr>
							<td>{{ $value->id }}</td>
							<td>{{ $value->title }}</td>
							<td>
								<a href="{{ URL::to('/myActivity/updateActivity') }}/{{ $value->id }}" class="btn btn-sm btn-primary">Update</a>
								<a href="{{ URL::to('/myActivity/delete') }}/{{ $value->id }}" class="btn btn-sm btn-primary ">Delete</a>
							</td>
						</tr>
					@endforeach  
				</tbody>
			</table>
	</tbody>
</table>
@stop
