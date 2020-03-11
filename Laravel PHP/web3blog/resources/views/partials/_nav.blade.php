<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">LandMarks</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
      </ul>
        <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Acount <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="/register">Register</a></li>
                      <li><a href="/login">Login</a></li>
                      <li><a href="/password/reset">Password reset</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="{{ route('posts.index') }}">Posts</a></li>
                    </ul>
                  </li>

        @elseif ( !Auth::guest() && Auth::user()->id == 6 )
           <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <li><a href="{{ url('/profile') }}">My Page</a></li>

                    <li role="separator" class="divider"></li>
                        <li><a href="{{ route('categories.index') }}">Categories</a></li>
                        <li><a href="{{ route('posts.index') }}">Posts</a></li>
                        <li><a href="{{ route('tags.index') }}">Tags</a></li>
                     <li role="separator" class="divider"></li>
                        <li><a href="{{ route('admin.index') }}">Admin Panel</a></li>
                </ul>
            </li>

        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <li><a href="{{ url('/profile') }}">My Page</a></li>

                    <li role="separator" class="divider"></li>
                    <li><a href="{{ route('categories.index') }}">Categories</a></li>
                    <li><a href="{{ route('posts.index') }}">Posts</a></li>
                    <li><a href="{{ route('tags.index') }}">Tags</a></li>
                </ul>
            </li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>