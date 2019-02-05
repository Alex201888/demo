<style type="text/css">
logo_demo {
    position: relative;
    top: -50%;
    left: -50%;
    text-align: center;
}
</style>
<nav class="navbar navbar-default" role="navigation"
    style="background:linear-gradient(to top right,#63c5bd,#8ecde9,#7c6fb0)">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-left" href="{{ URL::to('/home') }}">
            <div class="logo_demo">
                <img width="100" style="background-color: #63c5bd;position: relative;margin-left: auto;"
                    src="https://jetsport.com.au/assets/frontend/images/logo.png">

            </div>
        </a>



    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" style="color:white" data-toggle="dropdown">Melbourne <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="{{ URL::to('/account/login') }}">Melbourne</a></li>
                    <li class="dropdown-item disabled">
                        <a href="{{ URL::to('/account/register') }}">Sydney comming soon</a> </li>
                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                @if(Auth::check())
                <a href="#" class="dropdown-toggle" style="color:white" data-toggle="dropdown">{{Auth::user()->name}} <b
                        class="caret"></b></a>
                @else
                <a href="#" class="dropdown-toggle" style="color:white" data-toggle="dropdown">Account <b class="caret"></b></a>
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

            <li><a href="{{ URL::to('/map') }}" style="color:white" >Map</a></li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>




<div class="content" style="flex: 1;height:70%">