@extends('layouts.main')

@section('content')
<div class="container">
	<table class="table table-striped table-hover">
		<a href="{{ URL::to('/myActivity/addNewActivity') }}" class="btn btn-sm btn-default ">Add Acivity</a>
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
						<th class="text-right">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($activities as $key => $value)
					<tr>
						<td>{{ $value->id }}</td>
						<td>{{ $value->title }}</td>
						<td class="text-right">
							<a href="{{ URL::to('/myActivity/updateActivity') }}/{{ $value->id }}" class="btn btn-sm btn-default">Update</a>
							<a href="{{ URL::to('/myActivity/delete') }}/{{ $value->id }}" class="btn btn-sm btn-default">Delete</a>
						</td>
					</tr>
					@endforeach  
				</tbody>
			</table>
		</tbody>
	</table>
</div>

@stop
