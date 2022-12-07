<header>
  <!-- Navbar-->
  <nav class="navbar navbar-expand-lg shadow-sm mb-4">
    <div class="container-fluid px-4">
      <a class="navbar-brand fw-semibold" href="/">HealthyCare</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">&#9776;</button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-2">
            <a class="nav-link" aria-current="page" href="/">Home</a>
          </li>
          @if (Request::segment(1) != 'news')
          <li class="nav-item mx-2">
            <a class="nav-link" href="/news">News</a>
          </li>
          @endif
          @if (Request::segment(1) != 'contact')
          <li class="nav-item mx-2">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          @endif
        </ul>
        @auth
          <ul class="nav navbar-nav">
            <li class="nav-item dropdown mx-2">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ auth()->user()->pasien->name }}</a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a href="#" class="dropdown-item">
                      <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,15.5A3.5,3.5 0 0,1 8.5,12A3.5,3.5 0 0,1 12,8.5A3.5,3.5 0 0,1 15.5,12A3.5,3.5 0 0,1 12,15.5M19.43,12.97C19.47,12.65 19.5,12.33 19.5,12C19.5,11.67 19.47,11.34 19.43,11L21.54,9.37C21.73,9.22 21.78,8.95 21.66,8.73L19.66,5.27C19.54,5.05 19.27,4.96 19.05,5.05L16.56,6.05C16.04,5.66 15.5,5.32 14.87,5.07L14.5,2.42C14.46,2.18 14.25,2 14,2H10C9.75,2 9.54,2.18 9.5,2.42L9.13,5.07C8.5,5.32 7.96,5.66 7.44,6.05L4.95,5.05C4.73,4.96 4.46,5.05 4.34,5.27L2.34,8.73C2.21,8.95 2.27,9.22 2.46,9.37L4.57,11C4.53,11.34 4.5,11.67 4.5,12C4.5,12.33 4.53,12.65 4.57,12.97L2.46,14.63C2.27,14.78 2.21,15.05 2.34,15.27L4.34,18.73C4.46,18.95 4.73,19.03 4.95,18.95L7.44,17.94C7.96,18.34 8.5,18.68 9.13,18.93L9.5,21.58C9.54,21.82 9.75,22 10,22H14C14.25,22 14.46,21.82 14.5,21.58L14.87,18.93C15.5,18.67 16.04,18.34 16.56,17.94L19.05,18.95C19.27,19.03 19.54,18.95 19.66,18.73L21.66,15.27C21.78,15.05 21.73,14.78 21.54,14.63L19.43,12.97Z" />
                      </svg>
                      Profile Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="/logout" class="dropdown-item">
                      <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M16,17V14H9V10H16V7L21,12L16,17M14,2A2,2 0 0,1 16,4V6H14V4H5V20H14V18H16V20A2,2 0 0,1 14,22H5A2,2 0 0,1 3,20V4A2,2 0 0,1 5,2H14Z" />
                      </svg>
                      Logout
                    </a>
                </div>
            </li>
          </ul>
          @endauth
      </div>
          @guest
          <a href="{{ route('login') }}" class="btn button-primary">Sign-in</a>          
          @endguest
        </div>
      </div>
    </div>
  </nav>
</header>