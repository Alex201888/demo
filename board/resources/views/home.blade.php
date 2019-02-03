@extends('layouts.main')

@section('content')
<div class="container">
	<section class="banner-intro">
		<div class="container no-padding">
			<!--<a href="https://jetsport.com.au/activity-details/7">-->
				<img src="https://jetsport.com.au/uploads/setting/2018-12/5c16095a6bfc6-origin.jpeg" width="100%">
				<!--</a>-->
			</div>
		</section>
		<div class="title-with-line">
			<h4 class="blue-txt">NEXT ACTIVITIES</h4>
		</div>
		
		<div class="activities-block activities-list-page">
			@foreach($activities as $key => $value)
			<div class="activities-item col-md-4 col-sm-4">
				<div class="item-image">
						<a href="{{ URL::to('/detail') }}/{{ $value->id }}">
						<!--<a href="#!" onclick="location.href='https://jetsport.com.au/activity-details/671'; return false;">-->
						<!-- hard code now   -->
							<img src="{{ 'upload/'.$value->pictures }}">
						</a>
						</div>
						<div class="item-info">
							<p class="time">{{ $value->start_time }}</p>
							<a href="{{ URL::to('/detail') }}/{{ $value->id }}">
								<h6 class="activity-title">
									<span class="activity-title-formatted">{{ $value->title }}</span>
								</h6>
							</a>
							<div class="desc">
								<div>
									<div class="activity-location"><p class="grey-txt activity-location-formatted">{{ $value->location }}</p></div>
									<div class="activity-organizer"><p><i class="blue-txt activity-organizer-formatted">User ID: {{ $value->user_id }}</i></p></div>
								</div>
								<a href="{{ URL::to('/detail') }}/{{ $value->id }}" class="btn btn-small">register</a>
							</div>
						</div>
					</div>
					@endforeach  
				</div>


		<!-- <table class="table table-striped table-hover">
			<thead>
				<tr>
					<th></th>
				</tr>
			</thead>
			<tbody>

				<table class="table table-hover">
					<thead>
						<tr class="table-primary">
							<th >Title</th>
							<th class="text-right">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($activities as $key => $value)
						<tr class="table-primary">
							<td class="table-primary">{{ $value->title }}</td>
							<td class="table-primary" align="right">
								<a href="{{ URL::to('/detail') }}/{{ $value->id }}" class="btn btn-sm btn-default">Detail</a>
							</td>

						</tr>
						@endforeach  
					</tbody>
				</table>
			</tbody>
		</table> -->
	</div>

	@stop
