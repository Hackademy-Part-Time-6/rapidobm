

<nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <a class="navbar-brand" href="{{route('home')}}">Rapido</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


        <li class="nav-item item-nav d-lg-inline-flex p-4">
            <a class="nav-link btn btn-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorías
            </a>

            <li class="nav-item item-nav d-lg-inline-flex p-4">
                <a class="nav-link btn btn-muted" href="{{ route('ads.create') }}">
                  <i class="fa-regular fa-plus"></i> {{__('Nuevo Anuncio')}}
                </a>


            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach ($categories as $category )
                <li>
                  <a class="dropdown-item" href="{{ route('category.ads', $category) }}">{{$category->name}}</a>
                </li>
              @endforeach
            </ul>
          </li>
    </ul>



      @guest
      @if (Route::has('login'))
      <li class="nav-item item-nav d-lg-inline-flex p-4">
        <a class="nav-link btn btn-muted"
        href="{{route('login')}}"><span>Entrar</span></a>
      </li>
      @endif
      @if (Route::has('register'))
      <li class="nav-item item-nav d-lg-inline-flex p-4">
        <a class="nav-link btn btn-muted"
        href="{{route('register')}}"><span>Registrar</span></a>
      </li>
      @endif
  @else
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      {{Auth::user()->name}}
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      @if (Auth::user()->is_revisor)
      <li>
        <a class="dropdown-item" href="{{ route('revisor.home') }}">
          Revisor
          <span class="badge rounded-pill bg-danger">

            {{\App\Models\Ad::ToBeRevisionedCount() }}
          </span>
        </a>
      </li>
      @endif


      <li class="nav-item">
        <form id="logoutForm" action="{{route('logout')}}" method="POST">
          @csrf
        </form>
        <a id="logoutBtn" class="nav-link" href="#">Salir</a>
      </li>
    </ul>
</li>

  @endguest

      <form class="form-inline my-2 my-lg-0 p-4">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>

 <li class="nav-item d-lg-inline-flex p-2">
    <x-locale lang="en" country="gb" />
</li>

<li class="nav-item d-lg-inline-flex p-2">
    <x-locale lang="it" country="it" />
</li>

<li class="nav-item d-lg-inline-flex p-2">
    <x-locale lang="es" country="es" />
</li>
  </nav>
