<div class="dropdown">
    <i class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('vendor/blade-flags/language-' . session('locale') . '.svg') }}" width="32" height="32" />

    </i>
    <ul class="dropdown-menu dropdown-menu-end min-w-0">
        @foreach ($languages as $lang)
        <li class="dropdown-item" ><x-_locale :$lang /></li>
        @endforeach
    </ul>
</div>
