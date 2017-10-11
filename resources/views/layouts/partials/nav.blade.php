
<nav class="nav navbar-inverse">
  <div class="container">
    <ul class="nav navbar-nav">
      <li><img src="img/RD.gif"><a class="navbar-brand" href="/">reddit.dev</a></li>
      @if (Auth::check()) 
      <li style="float:right"><a href="/auth/logout">Logout</a></li>
      <li style="float:right"><a href="#">Create Post</a></li>
      @else
      <li style="float:right"><a href="/auth/login">Log In</a></li>
      <li style="float:right"><a href="#">Sign Up</a></li>
      @endif
    </ul>

  </div>
</nav>
  