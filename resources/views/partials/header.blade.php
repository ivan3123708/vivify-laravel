<div id="header">
    <div id="logo">
        <a href="/"><img src="https://fusiongroupusa.com/wp-content/uploads/2017/11/logo.png" /></a>
    </div>
    <div>
        @auth
            <a href="{{ url('/home') }}">Home</a>
            <p>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
    
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
</div>