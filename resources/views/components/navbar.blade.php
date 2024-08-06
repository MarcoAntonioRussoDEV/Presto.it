<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top custom-h-56-px">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Presto.it</a>
        
        {{-- Logica se autenticato --}}
        @auth
        <div class="dropdown d-flex">
            <div id="navbar-img-container"> 
                <img id="profile-img" src="@if($user->image)@else{{ Storage::url("public/img/placeholders/placeholder-user.jpg") }}@endif" alt="">
            </div>
            <button class="dropdown-toggle dropdown-toggle-split border-0 bg-transparent" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Azione</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form method="POST" action="{{ route("logout") }}">@csrf
                        <button class="dropdown-item text-danger" type="submit">
                            Log Out
                        </button>
                    </form>
                </li>
            </ul>
        </div>

        {{-- Logica se non autenticato --}}
        @else
        <div class="dropdown d-flex">
            <div id="navbar-img-container"> 
                <img id="profile-img" src="{{ Storage::url("public/img/placeholders/placeholder-user.jpg") }}" alt="">
            </div>
            <button class="dropdown-toggle dropdown-toggle-split border-0 bg-transparent" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>

            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route("login") }}">Log in</a></li>
                <li><a class="dropdown-item" href="{{ route("register" )}}">Sign Up</a></li>
            </ul>
        </div>
        @endauth


    </div>
</nav>