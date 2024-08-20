<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top custom-h-56-px bg-light-subtle custom-border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Presto.it</a>

        {{-- Aggiunta Scout(barra ricerca) --}}
        <form class="d-flex ms-auto" role="search" action="{{ route('article.search') }}" method="GET">
            <div class="input-group">
                <input type="search" name="query" class="form-control" placeholders="Search" aria-label="search">
                <button type="submit" class="input-group-text btn btn-outline-success" id="basic-addon2">
                    Search
                </button>
            </div>
        </form>


        <div class="d-flex gap-1 align-items-center">
            {{-- Lista dropdown --}}
            <div class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route("article.index") }}"><strong>Tutti gli articoli</strong></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item text-capitalize"
                                    href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a>
                            </li>
                            @if (!$loop->last)
                                <hr class="dropdown-divider">
                            @endif
                        @endforeach
                    </ul>
                </li>
            </div>
            {{-- Fine lista dropdown --}}
    
            {{-- User dropdown --}}
            <div class="dropdown">
                <button class="dropdown-toggle dropdown-toggle-split border-0 bg-transparent d-flex align-items-center gap-1" data-bs-toggle="dropdown" aria-expanded="false">
                    <div id="navbar-img-container">
                        <img id="profile-img" src="@auth{{ Avatar::create(auth()->user()->name)->toBase64() }} @else {{ url('asset/img/placeholders/placeholder-user.jpg') }} @endauth" alt="">
                    </div>
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
    
                {{-- Logica se autenticato --}}
                @auth
    
                    <ul class="dropdown-menu dropdown-menu-end pb-0">
                        <li><h6 class="dropdown-header">Ciao {{ auth()->user()->name }}</h6></li>
                        <li>
                            <hr class="dropdown-divider p-0 m-0">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('create.article') }}">Crea articolo</a></li>
                        <li><a class="dropdown-item" href="{{ route('article.index') }}">Tutti gli articoli</a></li>
                        <li>
                            <hr class="dropdown-divider p-0 m-0">
                        </li>
                        @if(Auth::user()->is_revisor)
                        <li class="d-flex justify-content-between align-items-center">
                            <a class="dropdown-item" href="{{ route('revisor.index') }}">Zona revisore</a>
                            <span class="badge rounded-md bg-danger me-2">{{ \App\Models\Article::toBeRevisedCount() }}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider p-0 m-0">
                        </li>
                        @endif
                        <li>
                            <a class="dropdown-item" href="{{ route('user.dashboard') }}">Dashboard utente</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider p-0 m-0">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">@csrf
                                <button class="dropdown-item hover-bg-danger hover-text-light py-1 rounded-bottom-2" type="submit">
                                    Log out
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                {{-- Logica se non autenticato --}}
            @else
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('login') }}">Log in</a></li>
                    <li><a class="dropdown-item" href="{{ route('register') }}">Sign Up</a></li>
                </ul>
            @endauth
            {{-- Fine logica se non autenticato e user dropdown --}}
    
        </div>
    </div>


</nav>
