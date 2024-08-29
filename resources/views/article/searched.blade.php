<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center text-center">
                <div class="col-12">
                    <h1 class=display-1>{{__("ui.search results")}}"<span class="fst-italic">{{ $query }}</span>"</h1>
                </div>
        </div>

        <div class="row justify-content-center align-items-center py-5 gy-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md d-flex justify-content-center">
                    <x-article-card :article="$article" />
                </div>
            @empty
                <div class="class-12">
                    <h3 class="text-center">
                        {{__("ui.no articles match your search")}}
                    </h3>
                </div>
            @endforelse
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>

</x-layout>