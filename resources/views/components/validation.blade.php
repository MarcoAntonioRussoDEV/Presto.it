@error($field)
    <p class="fst-italic small text-danger d-block text-end mb-2 px-1 bottom-0 @if(request()->segment(1) == 'register' || request()->segment(1) == 'login') position-absolute @endif">{{ $message }}</p>
@enderror
