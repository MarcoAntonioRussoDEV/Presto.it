<div class="card p-0 custom-card-size">
    <img src="{{$article->images->isNotEmpty() ? ($article->images->first()->getUrl(300,200)) : url("asset/img/placeholders/image-placeholder.webp")}}" 
    class="card-img-top" alt="immagine dell'articolo {{ $article->title}}">
    {{--<img src="{{url("asset/img/placeholders/image-placeholder.webp")}}" class=" img-fluid card-img-top" alt="...">--}}
    <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="badge bg-primary position-absolute top-0 end-0 m-2 text-decoration-none fw-semibold">#{{ Str::ucfirst($article->category->name) }}</a>
    <div class="card-body d-grid h-50">
        <h5 class="card-title">{{$article->title}}</h5>
        <p class="card-text">
            
                @if(strlen($article->description) >=80)
                    {{Str::substr($article->description, 0, 80)."..."}}
                @else
                    {{$article->description}}
                @endif
            
        </p>
        <div class="d-flex justify-self-end justify-content-between align-items-end w-100">
            <a href="{{ route("article.show", $article) }}" class="btn btn-custom-primary">Dettagli</a>
            <p class="card-text fw-semibold fs-3">{{$article->price}} €</p>
        </div>
    </div>
</div>
