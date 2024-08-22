<div class="m-3">
    @foreach($reviews as $review)
    <h3>Titolo: {{$review->title}}</h3>
    <p>Commento: {{$review->content}}</p>
    <p>Voto: {{$review->vote}}</p>
    @isset($review->user->name)
    <p>Autore: {{$review->user->name}}</p>
    @endisset
    @endforeach
</div>
