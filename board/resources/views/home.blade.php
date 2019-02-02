@extends('layouts.main')

@section('content')
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th></th>
		</tr>
	</thead>
	<tbody>
		
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Title</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($activities as $key => $value)
						<tr>
							<td>{{ $value->title }}</td>
							<td>
								<a href="{{ URL::to('/detail') }}/{{ $value->id }}" class="btn btn-sm btn-primary">Detail</a>
							</td>
						</tr>
					@endforeach  
				</tbody>
			</table>
	</tbody>
</table>
@stop
