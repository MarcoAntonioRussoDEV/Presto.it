<div class="card mx-auto card-w shadow text-center mb-3 w-25">
    <img src="http://picsum.photos/200"  class="card-img-top" alt="Immagine dell'articolo {{$article->title}}">
    <div class="card-body">
        <h4 class="card-title">{{$article->title}}</h4>
        <h6 class="card-subtitle text-body-secondary">{{$article->price}}</h6>
        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="{{route('article.show', compact('article')) }}" class="btn btn-primary">Dettaglio</a>
            <a href=""  class="btn btn-outline-info">Categoria</a>
        </div>
    </div>
</div>