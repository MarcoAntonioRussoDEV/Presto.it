<x-layout>
    <div class="container">
        <div class="row height-custom justify-content-center py-5">
            <div class="col-12 col-md-6 mb-3">
            @if($article->images->count() > 0)
                <div id="carouselExample" class="carousel slide ">
                    <div class="carousel-inner rounded">
                        @foreach ($article->images as $key => $image)
                            <div class="caroseul-item @if ($loop->first) active @endif">
                                <img src="{{ Storage::url($image->path) }}" class="d-block w-100 rounded shadow" 
                                alt="immagine {{ $key +1 }} dell'articolo {{ article->title}}">
                            </div>
                            
                        @endforeach
                    </div>
                    @if ($article->images->count() > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span> <span
                                class="visually-hidden">Next</span>
                        </button>
                    @endif
                </div>
            @else
                <img src="https://picsum.photos/300" alt="Nessuan foto inserita dall'utente">
            @endif
            </div>
            <div class="col-12 col-md-6 mb-3 height-custom text-center">
                <h2 class="display-5 fw-bold mb-0">{{ $article->title }}</h2>
                <h5 class="mb-5 badge text-primary">#{{ $article->category->name }}</h5>
                <div class="d-flex flex-column justify-content-start gap-4">
                    <p class="text-md-start">{{ $article->description }}</p>
                    <h4 class="fw-bold text-end">{{ $article->price }}€</h4>
                    <button class="btn btn-success w-75 mx-auto">Acquista</button>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-start">
            @auth
                @if($article->user->id !== auth()->user()->id)
                    <livewire:review-form :$article />
                @endif
            @endauth
                <livewire:review-list :$article />
    </div>

</x-layout>







                    {{--    
                    <div class="carousel-item active">
                    <img src="https://picsum.photos/400" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/401" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/402" class="d-block w-100 rounded shadow" alt="...">
                        </div> --}}