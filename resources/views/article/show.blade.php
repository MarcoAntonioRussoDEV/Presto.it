<x-layout>
    <div class="container">
    
        <div class="row height-custom justify-content-center py-5">
            <div class="col-12 col-md-6 mb-3">
                <div id="carouselExample" class="carousel slide ">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/400" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/401" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/402" class="d-block w-100 rounded shadow" alt="...">
                        </div>
                    </div>
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
                </div>
            </div>
            <div class="col-12 col-md-6 mb-3 height-custom text-center">
<<<<<<< HEAD
                <h2 class="display-5"> <span class="fw-bold">Titolo: </span> {{ $article->title }}</h2>
                <div class="d-flex flex-column justify-content-center h-75">
                    <h4 class="fw-bold">Prezzo: {{ $article->price }} </h4>
                    <h5>Descrizione:</h5>
                    <p>{{ $article->description }}</p>
                    
=======
                <h2 class="display-5 fw-bold mb-0">{{ $article->title }}</h2>
                <h5 class="mb-5 badge text-primary">#{{ $article->category->name }}</h5>
                <div class="d-flex flex-column justify-content-start gap-4">
                    <p class="text-md-start">{{ $article->description }}</p>
                    <h4 class="fw-bold text-end">{{ $article->price }}€</h4>
                    <button class="btn btn-success w-75 mx-auto">Acquista</button>
>>>>>>> d5f24f2934e7ecaf19dcaf4072c5aa19ba01e56a
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-start">
            @auth
                <livewire:review-form :$article />
            @endauth
                <livewire:review-list :$article />
    </div>

</x-layout>
