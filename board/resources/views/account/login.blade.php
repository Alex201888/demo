@extends('layouts.main')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-3">
			<form action="{{ URL::to('/verify') }}" method="POST" role="form">
				<legend>Account Login</legend>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" id="" placeholder="Input field" name="email">
				</div>
				@csrf
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" id="" placeholder="Input field" name="password">
				</div>

				<button type="submit" class="btn btn-primary btn-block">Login Now</button>
			</form>
		</div>
	</div>
</div>
@stop