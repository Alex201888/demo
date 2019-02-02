@extends('layouts.main')

@section('content')
<div class="container-fluid">
	<div class="row">

		<div class="form-group">
					<label for="title" class="col-sm-2 control-label">Title:</label>
					<div class="col-sm-10">
						<label id="title" class="col-sm-2 control-label">{{$activity[0]->title}}</label>
					</div>
				</div>
					<label for="start_time" class="col-sm-2 control-label">Start time:</label>
					<div class="col-sm-10">
						<label  id="start_time" class="col-sm-2 control-label">{{$activity[0]->start_time}}</label>
					</div>
				</div>
					<label for="end_time" class="col-sm-2 control-label">End Time:</label>
					<div class="col-sm-10">
						<label   id="end_time" class="col-sm-2 control-label">{{$activity[0]->end_time}}</label>
						
					</div>
				</div>
					<label for="description" class="col-sm-2 control-label">Description:</label>
					<div class="col-sm-10">
						<label  id="description" class="col-sm-2 control-label">{{$activity[0]->description}}</label>
				
					</div>
				</div>
					<label for="location" class="col-sm-2 control-label">Location:</label>
					<div class="col-sm-10">
						<label id="location"  class="col-sm-2 control-label">{{$activity[0]->location}}</label>
				
					</div>
				</div>
		<iframe width='100%' height='250' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q={{$activity[0]->location}}&z=16&output=embed&t='></iframe>
	</div>
@stop
