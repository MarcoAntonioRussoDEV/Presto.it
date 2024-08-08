<div class="card p-0" style="width: 18rem;">
    <img src="{{url("asset/img/placeholders/image-placeholder.webp")}}" class=" img-fluid card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$article->title}}</h5>
        <p class="card-text text-ellipsis" style="max-height: 10px">{{$article->description}}</p>
        <div class="d-flex justify-content-between align-items-baseline">
            <a href="{{ route("article.show", $article) }}" class="btn btn-primary">Dettagli</a>
            <p class="card-text fw-semibold fs-3">{{$article->price}} €</p>
        </div>
    </div>
</div>
