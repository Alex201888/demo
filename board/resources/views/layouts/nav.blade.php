
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">JETSports</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-left">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Melbourne <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="dropdown-item"><a  href="{{ URL::to('/account/login') }}">Melbourne</a></li>
						<li class="dropdown-item disabled">
							<a  href="{{ URL::to('/account/register') }}">Sydney comming soon</a> </li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search Activities ">
					</div>
					<button type="submit" class="btn btn-default">Search</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						@if(Auth::check())
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <b class="caret"></b></a>
						@else
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
						@endif
						<ul class="dropdown-menu">
							@if(Auth::check())
							<li><a href="{{ URL::to('/account/logout') }}">Logout</a></li>
							@else
							<li><a href="{{ URL::to('/account/login') }}">Login</a></li>
							<li><a href="{{ URL::to('/account/register') }}">Register</a></li>
							@endif
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>