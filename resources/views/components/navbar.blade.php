<nav class="navbar navbar-expand-lg bg-light" style="padding: 0.5rem 5rem;">
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
                @if (Auth::User()->user_role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="/manage">Manage Product</a>
                    </li>
                @endif
            @endauth

        </ul>
      </div>
      <div class="d-flex">
        @if (Session::has('cart'))
        <a href="/cart" class="mx-2" style="color: gray; align-self: center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
        </a>
        @endif
        @auth
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::User()->user_name}}</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/profile/{{Auth::User()->id}}">Profile</a></li>
                    @if (Auth::User()->user_role == 'customer')
                    <li><a class="dropdown-item" href="/history">History</a></li>
                    @endif
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
