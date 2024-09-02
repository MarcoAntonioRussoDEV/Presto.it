<x-layout>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-2">{{__("ui.articles of the category")}}<span class="fst-italic fw-bold">
                    {{ __("ui.$category->name") }}</span></h1>
            </div>
        </div>
        <div class="row gy-4">
            @forelse ($articles as $article)
                    <div class="col d-flex justify-content-center">
                        <x-article-card :article="$article" />
                    </div>
            @empty
                <div class="col-12 text-center">
                    <h3>
                        {{__("ui.there are no articles for this category")}}!
                    </h3>
                    @auth
                        <a class="btn btn-dark my-5"  href="{{route('create.article')}}">{{__("ui.publishAnArticle")}}</a>
                    @endauth
                </div>
            @endforelse    
        </div>
    </div>
</x-layout>