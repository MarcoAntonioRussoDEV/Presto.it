@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mx-2" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show mx-2" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(session()->has('info'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <div class="d-flex justify-content-between align-items-center p-0">
            <p class="m-0">{{ session('info') }}</p>
            <form action="{{route('restore', $article)}}" method="POST">
                @csrf
                @method('PATCH')
                <button class="fw-bold btn btn-outline-info btn-sm">{{__("ui.restore")}}</button>
            </form>
        </div>
        <button type="button" class="btn-close py-6"  data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


