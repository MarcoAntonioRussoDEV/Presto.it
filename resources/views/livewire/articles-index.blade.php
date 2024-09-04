<div class="row">
    <div class="col-3">
        <label for="price">Price</label>
        <input name="price" type="range" wire:model.live="priceFilter" min="0" max="{{$maxPrice}}">
        {{$priceFilter}}€

        <br>

        <label for="categories">Categories</label>
        <br>

        <input type="radio" name="categories" id="" value="all" wire:model.live="categoryFilter">
        <label for="categories">all</label>
        <br>
        @foreach ($categories as $category)
            <input type="radio" name="categories" id="{{$category->id}}" value="{{$category->id}}" wire:model.live="categoryFilter">
            <label for="{{$category}}">{{$category->name}}</label>
            <br>
        @endforeach

        <br>
        @for($i = 0; $i <= 5; $i ++)
            <div class="d-flex gap-2">
                <input type="radio" name="stars" wire:model.live="gradeFilter" value="{{$i}}">
                <x-grade-component :grade="$i" />
                +
            </div>
            <br>
        @endfor
        

        <br>

        <button wire:click="resetFilters" class="btn btn-primary">Reset</button>
    </div>
    <div class="col-8 row justify-content-center align-items-center gy-5 px-5">
        @forelse($allArticles as $article)
                <div class="col d-flex justify-content-center">
                    <x-article-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        {{__("ui.there are no articles")}}
                    </h3>
                </div>
        @endforelse
    </div>
    <iv class="d-flex justify-content-center">
        <div>
            {{ $allArticles->links() }}
        </div>
    </iv>
</div>
