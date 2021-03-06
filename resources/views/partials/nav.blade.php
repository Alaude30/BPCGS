{{-- Navbar --}}
<nav class="navbar navbar-expand-md navbar-dark bg-dark border-bottom border-warning">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-icon d-inline-block align-top">
        {{ config('app.name') }}
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-target" aria-controls="nav-target" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="nav-target">
      <ul class="navbar-nav">
        @if (Auth::guest())
          <li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
          <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
        @else
          <li class="nav-item"><a href="{{ route('home') }}" class="nav-link"><i class="fa fa-home"></i> Dashboard</a></li>

          <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" id="manageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-files-o"></i> Manage
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="manageDropdown">
              <a href="{{ route('subjects') }}" class="dropdown-item"><i class="fa fa-book"></i> Manage Subjects</a>
              <a href="{{ route('courses') }}" class="dropdown-item"><i class="fa fa-graduation-cap"></i> Manage Courses</a>
              <a href="{{ route('users') }}" class="dropdown-item"><i class="fa fa-users"></i> Manage Users</a>
            </div>
          </li>

          <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-file"></i> Records</a></li>

          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a href="" class="dropdown-item"><i class="fa fa-cog"></i> Settings</a>
              <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i>
                Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </div>
          </li>
          
        @endif
      </ul>
    </div>
  </div>
</nav>
{{-- End Navbar --}}