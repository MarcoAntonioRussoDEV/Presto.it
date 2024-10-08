<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top custom-h-56-px bg-light-subtle custom-border-bottom vw-100 d-flex justify-content-center">
    <div class="container-fluid row justify-content-between">

        {{-- LOGO --}}
        <a class="navbar-brand col-4 me-0" href="{{ route('homepage') }}">
            <img id="logo-img" class="custom-max-w" src="{{session('theme') == 'light' ? url('/asset/img/logo-gradient.png') : url('/asset/img/logo-white.png')}}" alt="logo">
        </a>

        {{-- Ricerca --}}
        <x-search-article-component />

        {{-- Categorie e Utente --}}
        <div class="d-flex gap-1 align-items-center col-4 justify-content-end">

            {{-- Lista categorie dropdown --}}
            <div class="navbar-nav d-none d-lg-block">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{__("ui.categories")}}   
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="{{ route("article.index") }}"><strong>{{__("ui.allArticles")}}</strong></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item text-capitalize" href="{{ route('byCategory', ['category' => $category]) }}">{{__("ui.$category->name" )}}</a>
                            </li>
                            @if (!$loop->last)
                                <hr class="dropdown-divider">
                            @endif
                        @endforeach
                    </ul>
                </li>
                
            </div>
            {{-- Fine lista dropdown --}}
            <div>
                <x-languages-flags />
            </div>
            {{-- User dropdown --}}
            <div class="dropdown">
                <button class="dropdown-toggle dropdown-toggle-split border-0 bg-transparent d-flex align-items-center gap-1" data-bs-toggle="dropdown" aria-expanded="false">
                    <div id="navbar-img-container" class="border border-primary rounded rounded-circle position-relative">
                        <img class="profile-img" src="@auth{{ auth()->user()->img ? Storage::url(auth()->user()->img) :Avatar::create(auth()->user()->name)->setDimension(400,400)->setFontSize(180) }} @else {{ url('asset/img/placeholders/placeholder-user.jpg') }} @endauth" alt="profile-img">
                        @if(auth()->user() && auth()->user()->is_revisor && \App\Models\Article::toBeRevisedCount() !== 0)
                        <span class="badge position-absolute bg-danger translate-middle top-0">{{\App\Models\Article::toBeRevisedCount()}}</span>
                            {{-- <span class="position-absolute top-100 start-50 translate-middle badge pt-2 text-body">Revisor</span> --}}
                        @endif
                    </div>
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
    
                {{-- Logica se autenticato --}}
                @auth
    
                    <ul class="dropdown-menu dropdown-menu-end pb-0">
                        <li><h6 class="dropdown-header">{{__("ui.hello")}} {{ auth()->user()->name }}</h6></li>
                        <li>
                            <hr class="dropdown-divider p-0 m-0">
                        </li>
                        
                        <li>
                            <a class="dropdown-item d-flex gap-2" href="{{ route('user.dashboard') }}">
                                <span class="material-symbols-outlined fw-light">Dashboard</span>{{__("ui.dashboardUser")}}
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider p-0 m-0">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex gap-2" href="{{ route('create.article') }}">
                                <span class="material-symbols-outlined fw-light">add_circle</span>{{__("ui.createArticle")}}
                            </a>
                            </li>
                        <li>
                            <a class="dropdown-item d-flex gap-2" href="{{ route('article.index') }}">
                                <span class="material-symbols-outlined fw-light">list_alt</span>{{__("ui.allArticles")}}
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider p-0 m-0">
                        </li>

                        @if(Auth::user()->is_revisor)
                        <li class="d-flex justify-content-between align-items-center">
                            <a class="dropdown-item d-flex justify-content-between align-items-center gap-2" href="{{ route('revisor.index') }}">
                                <i class="material-symbols-outlined fw-light">checklist</i>
                                <p class="m-0">{{__("ui.revisorArea")}}</p>
                                @if (\App\Models\Article::toBeRevisedCount() !== 0)
                                    <span class="badge bg-danger">{{\App\Models\Article::toBeRevisedCount()}}</span>
                                @else
                                    <span class="badge bg-success">{{\App\Models\Article::toBeRevisedCount()}}</span>
                                @endif
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider p-0 m-0">
                        </li>
                        @endif
                        

                        <li>
                            <form method="POST" action="{{ route('logout') }}">@csrf
                                <button class="dropdown-item hover-bg-danger hover-text-light py-1 rounded-bottom-2 d-flex gap-2" type="submit">
                                    <span class="material-symbols-outlined fw-light">logout</span>{{__("ui.log out")}}
                                </button>
                            </form>
                        </li>

                    </ul>
                </div>
                {{-- Logica se non autenticato --}}
            @else
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('login') }}">{{__("ui.logIn")}}</a></li>
                    <li><a class="dropdown-item" href="{{ route('register')}}">{{__("ui.signUp")}}</a></li>
                </ul>
            @endauth
            {{-- Fine logica se non autenticato e user dropdown --}}

            {{--lingue straniere--}}

            
        </div>
    </div>


</nav>
