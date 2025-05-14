<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top py-0">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}"><img src="/images/Logo.png" alt="Logo studio"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          {{-- Aggiunta vista tutti gli articoli --}}
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('article.index')}}">Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('chisiamo')}}">Chi Siamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('collaboraconnoi')}}">Collabora Con Noi</a>
          </li>
          {{-- Aggiunto dropdown categorie --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Servizi
            </a>
            <ul class="dropdown-menu" style="max-height: 300px; overflow-y: auto;">
              @foreach ($services as $service)
                <li>
                  <a class="dropdown-item text-capitalize" href="{{ route('byService', ['service' => $service]) }}">
                    {{ $service->name }}
                  </a>
                </li>
                @if(!$loop->last)
                  <hr class="dropdown-divider">
                @endif
              @endforeach
            </ul>
          </li>
          
          

          {{-- @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao, {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"
                onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
              </li>
             <form action="{{route('logout')}}" method="POST" class="d-none" id="form-logout">@csrf</form>
             <hr class="dropdown-divider">
             <li><a class="dropdown-item text-capitalize"
              href="{{route('revisor.index')}}">Dashboard Revisor</a>
           </li>
            
            </ul>
          </li>
          @else 
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao,Utente!
            </a>

            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
              
            {{-- </ul>
          @endauth --}} 

         
        
        </ul>
        <form class="d-flex mt-2" role="search" action="{{route('article.search')}}" method="GET">
          <input class="form-control me-2 rounded-pill" type="search" name="query" placeholder="Cerca" aria-label="Search">
          <button class="button rounded-pill" type="submit">Cerca</button>
        </form>

      </div>
    </div>
  </nav>