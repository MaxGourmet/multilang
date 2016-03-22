<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Multilang</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Log In</a></li>
                <li class="divider-vertical"></li>
                <li><a href="{{ url('/register') }}">Sign In</a></li>
            @else
                <li><a href="{{ url('/profile') }}">{{ Auth::user()->name }}</a></li>
                <li class="divider-vertical"></li>
                <li><a href="{{ url('/logout') }}">Log Out</a></li>
            @endif
            </ul>
        </div>
    </div>
</nav>