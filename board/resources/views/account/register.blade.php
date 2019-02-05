@extends('layouts.main')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
			<form action="{{ URL::to('/account/registerForm') }}" method="POST" role="form">
				<legend>Account Register</legend>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" id="" placeholder="Enter Your Email" name="email">
				</div>
				<div class="form-group">
					<label for="">Name</label>
					<input type="string" class="form-control" id="" placeholder="Enter Your Name" name="name">
				</div>
				@csrf
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" id="" placeholder="Enter Your Password" name="password">
				</div>
				<button type="submit" class="btn btn-default btn-block">Register Now</button>
			</form>
		</div>
	</div>
</div>
@stop