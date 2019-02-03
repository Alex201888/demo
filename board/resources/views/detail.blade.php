@extends('layouts.main')

@section('content')

<link rel="stylesheet" type="text/css" href="https://jetsport.com.au/assets/frontend/css/core.css?id=27f868e2a7773bc00755">

<link rel="stylesheet" type="text/css" href="https://jetsport.com.au/assets/frontend/css/core.css?id=27f868e2a7773bc00755">

<div class="container">
	<section class="activity-head">	
		<div class="container">
			<div class="activity-head-copy">
				<div class="col-sm-12 col-md-7 no-padding">
					<img src="../upload/{{$activity[0]->pictures}}" class="img-responsive" alt="Image">
				</div>
				<div class="col-sm-12 col-md-5 no-padding">

					<p class="time"  style="margin-top:30px;">{{$activity[0]->start_time}} </p>
					<p class="time" ' style="margin-top:30px;">{{$activity[0]->end_time}} </p>
					<div class="col-sm-12 col-md-5 no-padding">
						<h3 for="title" class="activity-title"> {{$activity[0]->title}}</h3>

						<p class="author">{{$activity[0]->location}}</p>
					</div>


				</div>
			</div>
		</div>
	</section>
	<section class="activity-details m-b-30">
		
		
		
		<div class="container">

			
			<div class="p-t-30">
				<div class="title-with-line">
					<h4 class="blue-txt">activity details</h4>
				</div>
			</div>

			<div class="row description-activity">
				<div class="col-sm-8 description">
					<h4 class="green-txt"><i>DESCRIPTION</i></h4>
					<div class="content">
						{{$activity[0]->description}}
					</div>
				</div>
				<div class="col-sm-4 p-l-0">
					Discussion Borad is Comming Soon 
				</div>
			</div>
		</div>
	</section>


<!-- 

	<h3 for="start_time" class="">Start time: {{$activity[0]->start_time}}</h3> -->



	<!-- <h3 for="end_time" class="">End Time: {{$activity[0]->end_time}}</h3>



		<h3 for="description" class="">Description: {{$activity[0]->description}}</h3> -->
<!-- 
	<h3 for="location" class="">Location:{{$activity[0]->location}}</h3> -->



</div>	
<iframe width='100%' height='250' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q={{$activity[0]->location}}&z=16&output=embed&t='></iframe>

@stop
