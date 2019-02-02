@extends('layouts.main')

@section('content')

<div class="container-fluid">
	<div class="row">
		<form action="{{ URL::to('/myActivity/add') }}" method="POST" role="form">
			<legend>Add activity</legend>
			<div class="form-group">
				<div class="form-group">
					<label for="input" class="col-sm-2 control-label">Title:</label>
					<div class="col-sm-10">
						<input type="text" name="title" id="title" class="form-control" value="{{$title}}" required="required" pattern="" title="">
					</div>
				</div>
				<div class="form-group">
					<label for="input" class="col-sm-2 control-label">start_time:</label>
					<div class="col-sm-10">
						<input type="date" name="start_time" id="start_time" class="form-control" value="{{$start_time}}" required="required" title="">
					</div>
				</div>
				<div class="form-group">
					<label for="input" class="col-sm-2 control-label">end_time:</label>
					<div class="col-sm-10">
						<input type="date" name="end_time" id="end_time" class="form-control" value= "{{$end_time}}" required="required" title="">
					</div>
				</div>
				<div class="form-group">
					<label for="input" class="col-sm-2 control-label">description:</label>
					<div class="col-sm-10">
						<input type="text" name="description" id="description" class="form-control" value= "{{$description}}" required="required" pattern="" title="">
					</div>
				</div>
				<div class="form-group">
					<label for="input" class="col-sm-2 control-label">location:</label>
					<div class="col-sm-10">
						<input type="text" name="location" id="location" class="form-control" value="{{$location}}" required="required" pattern="" title="">
					</div>
				</div>
				
			</div>
			<button type="submit" class="btn btn-primary">Confirm</button>
		</form>


	</div>
</div> 

@stop