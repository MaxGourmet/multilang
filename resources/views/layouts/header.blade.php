<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Multilang</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">{{ Lang::get('common.home') }}</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            @if (!(isset($check) && $check) && !Auth::check())
                <li><a href="{{ url('/login') }}">{{ Lang::get('common.login') }}</a></li>
                <li class="divider-vertical"></li>
                <li><a href="{{ url('/register') }}">{{ Lang::get('common.register') }}</a></li>
            @else
                <li><a href="{{ url('/profile') }}">{{ Lang::get('common.profile') }}</a></li>
                <li class="divider-vertical"></li>
                <li><a href="{{ url('/logout') }}">{{ Lang::get('common.logout') }}</a></li>
            @endif
            </ul>
        </div>
    </div>
</nav>