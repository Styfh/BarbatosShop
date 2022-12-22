@section('navbar')

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Barbatos Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <ul class="dropdown-menu">
                @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="{{ "/category/".$category->id }}">{{ $category->category_name }}</a></li>
                @endforeach

              </ul>
            </li>
            @auth
                @if (Auth::User()->user_name == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="/manage">Manage Product</a>
                    </li>
                @endif
            @endauth

        </ul>
      </div>
      <div class="d-flex">
        @auth
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::User()->user_name}}</a>
                <ul class="dropdown-menu" style="right:90px">
                    <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
            </li>
        </ul>
        @else
          <a href="/login" class="nav-link mx-2">Login</a>
          <a href="/register" class="nav-link mx-2">Register</a>

        @endauth

      </div>
    </div>
  </nav>

@endsection
