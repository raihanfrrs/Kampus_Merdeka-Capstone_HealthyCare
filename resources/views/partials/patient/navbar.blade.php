<header>
  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg shadow-sm mb-4">
    <div class="container-fluid px-4">
      <a class="navbar-brand fw-semibold" href="{{ url()->current() }}">HealthyCare</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">&#9776;</button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-2">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <div>
          @guest
          <a href="{{ route('login') }}" class="btn button-primary">Sign-in</a>          
          @endguest
        </div>
      </div>
    </div>
  </nav>
</header>