
<nav class="navbar navbar-default" role="navigation" style="background:linear-gradient(to top right,#63c5bd,#8ecde9,#7c6fb0)">
	<div class="container" >
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
				<a  class="navbar-brand" color="#63c5bd"  href="/">
					<img style="background-color:#63c5bd" width="130" src="https://jetsport.com.au/assets/frontend/images/logo.png">
				</a>
		
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
						<div class="col-sm-10 col-offset-2">
						<input type="search" name="search" id="inputSearch" class="form-control" value="" required="required" title="" placeholder="Feature Comming soon" style="height: 50px">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-offset-2">
							<button type="submit" class="btn btn-sm btn-default">Search</button>
						</div>
					</div>
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
							<li><a href="{{ URL::to('/myActivity/getAll') }}">My Activity</a></li>
							@else
							<li><a href="{{ URL::to('/account/login') }}">Login</a></li>
							<li><a href="{{ URL::to('/account/register') }}">Register</a></li>
							@endif
						</ul>
					</li>

					<li><a href="{{ URL::to('/map') }}">Map</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>