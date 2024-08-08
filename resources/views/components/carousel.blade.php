<article id="card-section" class="d-flex justify-content-center">
    @forelse ($articles as $article)
        <div class="cards col-2 d-flex align-items-end justify-content-start">
            <img class="rounded rounded-3 cards-img" src="{{url("asset/img/placeholders/image-placeholder.webp")}}" alt="image-{{ $article->title }}">
            <div class="card-text d-flex flex-column justify-content-start text-start gap-1">
                <h3 class="card-title">{{ $article->title }}</h3>
                <a href="{{ route("byCategory", $article->category) }}" class="badge text-bg-custom-primary align-self-start text-decoration-none">{{$article->category->name}}</a>
                <p class="card-par text-truncate">{{$article->description}}</p>
                <h2 class="d-flex align-items-center gap-2">{{$article->price}}€ 
                    <a class="text-decoration-none h-100 d-flex align-items-center" href="{{ route("article.show", $article) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed">
                            <path class="svg-color" d="M80-240v-480h80v480H80Zm560 0-57-56 144-144H240v-80h487L584-664l56-56 240 240-240 240Z"/>
                        </svg>
                    </a>
                </h2>
            </div>
        </div>
    @empty
        
    @endforelse
    
</article>
