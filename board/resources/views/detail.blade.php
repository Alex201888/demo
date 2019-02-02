@extends('layouts.main')

@section('content')
<div class="container-fluid">
	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<label for="">title</label>
			<span class="label label-default">{{$activity[0]->title}}</span>
			<span class="label label-default">{{$activity[0]->location}}</span>
			<span class="label label-default">{{$activity[0]->end_time}}</span>
			<span class="label label-default">{{$activity[0]->description}}</span>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<label for="">title2</label>
					<span class="label label-default">{{$activity[0]->location}}</span>
				</div>
			</div>
		</div>
		
	</div>
	@stop
