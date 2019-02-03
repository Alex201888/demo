@extends('layouts.main')

@section('content')
<div class="container">
	<div class="row">

		<div >
					<h3 for="title" class="">Title: {{$activity[0]->title}}</h3>
					
					
					
				
					<h3 for="start_time" class="">Start time: {{$activity[0]->start_time}}</h3>
					
					
				
					<h3 for="end_time" class="">End Time: {{$activity[0]->end_time}}</h3>
				
					
			
					<h3 for="description" class="">Description: {{$activity[0]->description}}</h3>
				
					<h3 for="location" class="">Location:{{$activity[0]->location}}</h3>

					<img src="../upload/{{$activity[0]->pictures}}" class="img-responsive" alt="Image">
				</div>
			</div>
		</div>		
		<iframe width='100%' height='250' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q={{$activity[0]->location}}&z=16&output=embed&t='></iframe>
	</div>
@stop
