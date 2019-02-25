<div class="navbar-fixed">
  <nav class="orange darken-1">
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo">Skripsi</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li {!! Request::is('/') ? 'class="active"' : '' !!}><a href="{{ url('/') }}">Home</a></li>
        <li {!! Route::is('dataemas.index') ? 'class="active"' : '' !!}><a href="{{ route('dataemas.index') }}">Data</a></li>
        @auth
          <li><a href="mobile.html">Proses</a></li>
        @endauth
        <li><a href="collapsible.html">About</a></li>
        @guest
          <li {!! Route::is('login') ? 'class="active"' : '' !!}><a href="{{ route('login') }}">Login</a></li>
          <li {!! Route::is('register') ? 'class="active"' : '' !!}><a href="{{ route('register') }}">Register</a></li>
        @else
          <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
        @endguest
      </ul>
    </div>
  </nav>
</div>
<!-- Mobile Vers. -->
<ul class="sidenav" id="mobile-demo">
  <li><a href="sass.html">Sass</a></li>
  <li><a href="badges.html">Components</a></li>
  <li><a href="collapsible.html">Javascript</a></li>
  <li><a href="mobile.html">Mobile</a></li>
</ul>