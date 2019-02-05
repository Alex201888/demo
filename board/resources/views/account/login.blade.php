@extends('layouts.main')

@section('content')
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif

<div class="limit-content">
        
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
			<form action="{{ URL::to('/account/verify') }}" method="POST" role="form">
				<h3 class="blue-txt text-center">LOG IN</<h3>
				<h5 class="text-center m-b-30"><strong>Hi there, welcome back!</strong></h5>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" id="" placeholder="Enter Your Email" name="email">
				</div>
				@csrf
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" id="" placeholder="Enter Your Password" name="password">
				</div>
				<div class="text-center m-t-40">
					<button type="submit" class="btn btn-large btn-block">Login Now</button>
            	</div>
				
			</form>
			<div class="line limit"></div>
		</div>
	</div>
</div>
@stop