{{-- 
<nav class="navbar bg-body-tertiary shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><span class="text-logo">Hpt 9 BLOG</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Hpt 9 BLOG</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr class="ms-3 me-5">
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link @if (Route::currentRouteName() == 'homepage')
                  active
              @endif" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Front end</a></li>
                <li><a class="dropdown-item" href="#">Back end</a></li>
                <li><a class="dropdown-item" href="#">Metodologie Agili</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="input-search border-bottom me-3" type="search" placeholder="Digita articolo" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Cerca</button>
          </form>
        </div>
        <div class="d-flex justify-content-end mb-3 mx-3 text-end">
           <ul class="navbar-nav pe-3">
            <li class="nav-item">
                <a class="nav-link" href="#">Accedi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contatti</a>
              </li>
           </ul>
        </div>
      </div>
    </div>
   
</nav> --}}



  @auth
      
    
  <nav class="navbar bg-body-tertiary shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><span class="text-logo">Hpt 9 BLOG</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Hpt 9 BLOG</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr class="ms-3 me-5">
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{route('auth.index')}}">Area Riservata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Front end</a></li>
                <li><a class="dropdown-item" href="#">Back end</a></li>
                <li><a class="dropdown-item" href="#">Metodologie Agili</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="input-search border-bottom me-3" type="search" placeholder="Digita articolo" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Cerca</button>
          </form>
        </div>
        <div class="d-flex justify-content-end mb-3 mx-3 text-end">
           <ul class="navbar-nav pe-3">
            <li class="nav-item pb-0">
              <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <a href="#" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                </form>
          </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contatti</a>
              </li>
           </ul>
        </div>
      </div>
    </div>
   
</nav>
    
  @else

  <nav class="navbar bg-body-tertiary shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><span class="text-logo">Hpt 9 BLOG</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Hpt 9 BLOG</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr class="ms-3 me-5">
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link @if (Route::currentRouteName() == 'homepage')
                  active
              @endif" aria-current="page" href="{{route('homepage')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Front end</a></li>
                <li><a class="dropdown-item" href="#">Back end</a></li>
                <li><a class="dropdown-item" href="#">Metodologie Agili</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="input-search border-bottom me-3" type="search" placeholder="Digita articolo" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Cerca</button>
          </form>
        </div>
        <div class="d-flex justify-content-end mb-3 mx-3 text-end">
           <ul class="navbar-nav pe-3">
            <li class="nav-item">
              <a href="#" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Accedi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contatti</a>
              </li>
           </ul>
        </div>
      </div>
    </div>
   
</nav>



  @endauth