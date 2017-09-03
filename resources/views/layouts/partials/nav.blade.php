
<nav class="nav navbar-inverse">
  <div class="container">
    <ul class="nav navbar-nav">
      <li><a class="navbar-brand" href="/">Reddit Clone</a></li>
      <li><a href="#">Another action</a></li>
      @if (Auth::check()) 
      <li><a href="#">Create Post</a></li>
      <li><a href="{{ action('HomeController@showWelcome') }}">Logout</a></li>
      @else
      <li><a href="#">Sign Up</a></li>
      <li><a href="#">Log In</a></li>
      @endif
    </ul>
  <form method="GET" action="{{ action('PostsController@index') }}">
    {!! csrf_field() !!}
        <div class="col-md-3 input-group">
        <input type="text" name="q" class="form-control" placeholder="Search for...">
        <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Go!</button>
      </span>
    </div>
  </form>
  </div>
</nav>
  