@extends('layouts.main')

@section('content')

<div class="container-fluid">
	<div class="row">
		
		@if($code==1)
		<form action="{{ URL::to('/myActivity/update') }}" method="POST" role="form">
			<input type="hidden" name="id"  class="form-control" value="{{$id}}" required="required" >
			@else
			<form action="{{ URL::to('/myActivity/add') }}" method="POST" role="form">
				@endif	
				<div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title:</label>
					<div class="col-sm-10">
						<input type="string" name="title"  class="form-control" value="{{$title}}" required="required" >
					</div>
				</div>
				@csrf
				<div class="form-group">
					<label for="start_time" class="col-sm-2 control-label">Start time:</label>
					<div class="col-sm-10">
						<input type="date" name="start_time" id="start_time" class="form-control" value="{{$start_time}}" required="required" >
					</div>
				</div>
				<div class="form-group">
					<label for="end_time" class="col-sm-2 control-label">End Time:</label>
					<div class="col-sm-10">
						<input type="date" name="end_time" id="end_time" class="form-control" value= "{{$end_time}}" required="required" >
					</div>
				</div>
				<div class="form-group">
					<label for="description" class="col-sm-2 control-label">Description:</label>
					<div class="col-sm-10">
						<input type="string" name="description" id="description" class="form-control" value= "{{$description}}" required="required"  >
					</div>
				</div>
				<div class="form-group">
					<label for="location" class="col-sm-2 control-label">Location:</label>
					<div class="col-sm-10">
						<input type="string" name="location" id="location" class="form-control" value="{{$location}}" required="required"  >
					</div>
				</div>
				
				<button type="submit" class="btn btn-primary">Confirm</button>
			</form>


		</div>
	</div> 

	@stop