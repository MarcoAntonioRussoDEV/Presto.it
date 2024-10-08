<article id="card-section" class="d-flex justify-content-center">
    @forelse ($articles as $article)
        <div class="cards col-4 col-xl-2 d-flex align-items-end justify-content-start px-1" role="button" onclick="document.querySelector('#articleLink{{$article->id}}').click()">
            <img class="rounded rounded-3 cards-img" src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(600,400) : url("asset/img/placeholders/image-placeholder.webp") }}" alt="image-{{ $article->title }}">
            <div class="cards-text d-flex flex-column justify-content-start text-start gap-1">
                <h3 class="text-truncate py-1 {{session('theme') == 'light'? 'custom-text-light':''}}">{{ $article->title }}</h3>
                <a  href="{{ route("byCategory", $article->category) }}" class="badge text-bg-custom-primary align-self-start text-decoration-none">{{$article->category->name}}</a>
                <p class="card-par text-truncate fw-medium">{{$article->description}}</p>
                <h2 class="d-flex align-items-center gap-2 text-truncate">{{$article->price}}€ 
                    <a id="articleLink{{ $article->id }}" class="text-decoration-none h-100 d-flex align-items-center" href="{{ route("article.show", $article) }}">
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
