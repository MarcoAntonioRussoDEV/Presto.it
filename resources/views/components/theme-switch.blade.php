<form action="{{route("theme", session('theme') == 'light'?"dark":"light")}}" method="POST">
    @csrf
    @method('PUT')
    <button id="toggleTheme" class="btn btn-dark rounded-circle custom-circle position-fixed bottom-0 end-0 m-4 d-flex justify-content-center align-items-center @if(session('theme') == 'dark') btn-custom-primary @endif" >
        <img class="animate-vanish animate-appear" src="{{session('theme') == 'light'? url("asset/icons/dark-icon.svg") : url("asset/icons/light-icon.svg") }}" alt="theme-icon">
    </button>
</form>