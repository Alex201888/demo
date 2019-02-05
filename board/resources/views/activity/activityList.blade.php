@extends('layouts.main')

@section('content')
<div lass="table-responsive">
	<table class="table ">
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
							<a href="{{ URL::to('/myActivity/updateActivity') }}/{{ $value->id }}" >Update</a>
							<a href="{{ URL::to('/myActivity/delete') }}/{{ $value->id }}" >Delete</a>
						</td>
					</tr>
					@endforeach  
				</tbody>
			</table>
		</tbody>
	</table>
	<center>
	<a href="{{ URL::to('/myActivity/addNewActivity') }}" class="btn btn-sm btn-default ">Add Acivity</a>
	</center>
</div>

@stop
