<x-layout>
    <div class="container">
        <div class="row height-custom justify-content-center py-5 bg-body-secondary rounded rounded-xl p-3 mx-2 mx-md-0 mb-3 border border-primary">
            <div class="col-12 col-md-6 mb-3">
                @if($article->images->count() > 0)
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            @foreach ($article->images as $key => $image)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <img src="{{ $image->getUrl() }}" class="w-100 carousel-size object-fit-cover" alt="immagine {{ $key +1 }} dell'articolo {{ $article->title}}">
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                @else
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ url('/asset/img/placeholders/image-placeholder.webp') }}" class="d-block w-100" alt="Empty-photo">
                    </div>
                </div>
                @endif
            </div>
            <div class="col-12 col-md-6 mb-3 height-custom text-center">
                <h2 class="display-5 fw-bold mb-0">{{ $article->title }}</h2>
                <div class="mb-5 ">
                    <h5 class="badge text-primary">#{{ $article->category->name }}</h5>
                    <x-grade-component :grade="$article->avg_grade" />
                </div>
                <div class="d-flex flex-column justify-content-start gap-4 bg-body p-3 rounded rounded-xl border border-primary">
                    <p >{{ $article->description }}</p>
                    <h4 class="fw-bold text-end">{{ $article->price }}€</h4>
                    <button class="btn btn-success w-75 mx-auto">{{__("ui.buy")}}</button>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex flex-column flex-md-row align-items-start py-3 p-md-3 mx-3 bg-body-secondary border border-primary  rounded rounded-xl my-5">
            @auth
                @if($article->user->id !== auth()->user()->id)
                    <livewire:review-form :$article />
                @endif
            @endauth
                <livewire:review-list :$article />
    </div>

</x-layout>
