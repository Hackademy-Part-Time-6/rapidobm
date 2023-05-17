

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            @foreach ($categories as $category )
            <li><a class="dropdown-item" href="{{ route('category.ads', $category)}}">
            {{ $category->name }}</a></li>
            @endforeach
            </ul>
            
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>

      @guest
      @if (Route::has('login'))
      <li class="nav-item ">
        <a class="nav-link"
        href="{{route('login')}}"><span>Entrar</span></a>
      </li>
      @endif
      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link"
        href="{{route('register')}}"><span>Registrar</span></a>
      </li>
      @endif
  @else
      <li class="nav-item">
        <form id="logoutForm" action="{{route('logout')}}" method="POST">
          @csrf
        </form>
        <a id="logoutBtn" class="nav-link" href="#">Salir</a>
      </li>
  @endguest

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
