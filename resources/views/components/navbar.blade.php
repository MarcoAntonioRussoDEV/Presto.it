<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top custom-h-56-px bg-light-subtle custom-border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Presto.it</a>

        <div class="d-flex gap-4">
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
            <div class="dropdown d-flex">
                <div id="navbar-img-container">
                    <img id="profile-img" src="{{ url('asset/img/placeholders/placeholder-user.jpg') }}" alt="">
                </div>
                <button class="dropdown-toggle dropdown-toggle-split border-0 bg-transparent" data-bs-toggle="dropdown"
                    aria-expanded="false">
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
