<form class="d-flex col-4" role="search" action="{{ route('article.search') }}" method="GET">
    <div class="position-relative  mx-auto">
        <input name="query" class="form-control form-control-sm rounded-pill" placeholders="Search" aria-label="search">
        <i onclick="document.querySelector('form[role=\'search\']').submit()" role="button" id="basic-addon2" class="material-symbols-outlined position-absolute top-50 end-0 translate-middle text-secondary cursor-pointer">{{__("ui.search")}}</i>
    </div>
</form> 