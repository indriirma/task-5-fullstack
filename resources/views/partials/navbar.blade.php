<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">WPU Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" 
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ $active === "home" ?"Active":'' }}" href="/">Home</a>
          <a class="nav-link {{ $active === "about"?'Active':''
           }}" href="/about">About</a>
          <a class="nav-link {{ $active === 'posts'? 'Active':'' }}" href="/posts">Blog</a> 
          <a class="nav-link {{ $active === 'categories'? 'Active':'' }}" href="/categories">Categories</a> 
        </div>
        <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li> 
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form> 
            </li>
          </ul>
        </li>
            @else
              <a href="/login" class="nav-link {{ $active === 'login'? 'Active':'' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
         @endauth
      </ul>
      </div>
    </div>
  </nav>