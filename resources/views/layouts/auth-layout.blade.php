<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    @vite(['resources\css\auth.css','resources\js\auth.js'])
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    @livewireStyles
  </head>
  <body>
    <main class="sb-nav-fixed">
      <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
          <!-- Navbar Brand-->
          <a class="navbar-brand ps-3" href="#"><i
                  class="fa-solid fa-house-user me-2"></i>{{ Auth::user()->name }}</a>
          <!-- Sidebar Toggle-->
          <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                  class="fas fa-bars"></i></button>
          <!-- Navbar Search-->
          <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
              <div class="input-group">
                  <input class="form-control" type="text" placeholder="Ricerca articolo..."
                      aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                  <button class="btn btn-form" id="btnNavbarSearch" type="button"><i
                          class="fas fa-search"></i></button>
              </div>
          </form>

      </nav>
      <div id="layoutSidenav">
          <div id="layoutSidenav_nav">
              <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                  <div class="sb-sidenav-menu">
                      <div class="nav">
                          <a class="nav-link" href="#">
                              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                              Dashboard
                          </a>

                          <div class="sb-sidenav-menu-heading">Scrivania</div>
                          <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                              data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                              <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                              Articoli
                              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                          </a>
                          <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                              data-bs-parent="#sidenavAccordion">
                              <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                      data-bs-target="#pagesCollapseError" aria-expanded="false"
                                      aria-controls="pagesCollapseError">
                                      Categorie
                                      <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                  </a>
                                  <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                      data-bs-parent="#sidenavAccordionPages">
                                      <nav class="sb-sidenav-menu-nested nav">
                                          <a class="nav-link" href="401.html">Lorem</a>
                                          <a class="nav-link" href="404.html">Lorem</a>
                                          <a class="nav-link" href="500.html">Lorem</a>
                                      </nav>
                                  </div>
                                  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                      data-bs-target="#pagesCollapseError" aria-expanded="false"
                                      aria-controls="pagesCollapseError">
                                      Gestione Articoli
                                      <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                  </a>
                                  <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                      data-bs-parent="#sidenavAccordionPages">
                                      <nav class="sb-sidenav-menu-nested nav">
                                          <a class="nav-link" href="{{route('auth.create')}}">Nuovo articolo</a>
                                      </nav>
                                  </div>
                              </nav>
                          </div>

                          <a class="nav-link" href="charts.html">
                              <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                              Profilo
                          </a>

                          <a class="nav-link" href="{{ route('homepage') }}">
                              <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>Torna alla Home
                          </a>
                          <ul class="navbar-nav ms-3">
                              <li class="nav-item pb-0">
                                  <form action="{{ route('logout') }}" method="POST">
                                      @csrf
                                      <a class="nav-link" href="#"
                                          onclick="event.preventDefault(); this.closest('form').submit();"><i
                                              class="sb-nav-link-icon  fa-solid fa-right-to-bracket fa-flip-horizontal me-2"></i>Logout</a>
                                  </form>
                              </li>
                          </ul>

                      </div>

                  </div>
                  <div class="sb-sidenav-footer">
                      <div class="small">Logged in as:</div>
                      Start Bootstrap
                  </div>
              </nav>
          </div>
          <div id="layoutSidenav_content">
            {{$slot}}
              {{-- <main>
                  <div class="container-fluid px-4">
                      <h1 class="mt-4">{{ Auth::user()->name }}</h1>
                      <p class="mb-2">Account registrato il: {{ Auth::user()->created_at->format('d/m/Y') }}</p>
                      <p>Ultima modifica: {{ Auth::user()->updated_at->format('d/m/Y') }}</p>
                      <ol class="breadcrumb mb-4">
                          <li class="breadcrumb-item active">Modifica il tuo profilo</li>
                      </ol>

                      <div class="row">
                          <div class="col-xl-6">
                              <div class="card mb-4">

                                  <div class="card-body"><canvas id="myAreaChart" width="100%"
                                          height="40"></canvas>
                                      <!--update form user --disabled-->
                                      <form method="POST" action="/user/profile-information"
                                          enctype="multipart/form-data">
                                          @csrf
                                          @method('PUT')
                                          {{-- <!--image-->
                                          <div class="mb-3">
                                              <img src="{{Auth::user()->image_profile)}}" class="rounded mx-auto d-block mb-5" alt="{{Auth::user()->name}}" height="150px">
                                              <label for="exampleFormControlInput1" class="form-label">Immagine del profilo</label>
                                              <input type="file" name="image_profile" class="form-control"
                                                  id="exampleFormControlInput1" placeholder="name@example.com">
                                          </div> --}}


                                          <!--name-->
                                          {{-- <div class="mb-3">
                                              <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                              <input required type="text" name="name"
                                                  value="{{ Auth::user()->name }}"
                                                  class="form-control @error('name')
                                                  is invalid
                                              @enderror"
                                                  id="exampleFormControlInput1">
                                              @error('name')
                                                  <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                          </div>

                                          <!--email-->
                                          <div class="mb-3">
                                              <label for="exampleFormControlInput2" class="form-label">Indirizzo
                                                  Email</label>
                                              <input type="email"
                                                  class="form-control @error('email')
                                                  is invalid
                                              @enderror"
                                                  name="email" value="{{ Auth::user()->email }}"
                                                  id="exampleFormControlInput2">
                                              @error('email')
                                                  <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                          </div>

                                          <!--biography-->
                                          <p class="mb-2">Biografia</p>
                                          <div class="form-floating mb-3">
                                              <textarea
                                                  class="form-control @error('biography')
                                              is invalid
                                          @enderror"
                                                  name="biography" id="message" type="text" style="height: 10rem;">{{ Auth::user()->biography }}</textarea>
                                              @error('biography')
                                                  <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                          </div>



                                          <div class="d-flex justify-content-end">
                                              <button
                                                  class="btn btn-form text-uppercase text-black fw-bold shadow-sm"
                                                  type="submit">Salva</button>
                                          </div>

                                      </form>

                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-6">
                              <div class="card mb-4">
                                  <div class="card-header">
                                      <i class="fas fa-chart-bar me-1"></i>
                                      Bar Chart Example
                                  </div>
                                  <div class="card-body"><canvas id="myBarChart" width="100%"
                                          height="40"></canvas></div>
                              </div>
                          </div>
                      </div>

                  </div>
              </main> --}}
          </div>
      </div>
      <footer class="bg-dark py-4 mt-auto">
          <div class="container px-5">
              <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                  <div class="col-auto">
                      <div class="small m-0 text-white">Copyright &copy; Your Website 2023</div>
                  </div>
                  <div class="col-auto">
                      <a class="link-light small" href="#!">Privacy</a>
                      <span class="text-white mx-1">&middot;</span>
                      <a class="link-light small" href="#!">Terms</a>
                      <span class="text-white mx-1">&middot;</span>
                      <a class="link-light small" href="#!">Contact</a>
                  </div>
              </div>
          </div>
      </footer>
  </main>
    @livewireScripts
  </body>
</html>