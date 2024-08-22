<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center text-center">
                <div class="col-12">
                    <h1 class=display-1>Risultati per la ricerca "<span class="fst-italic">{{ $query }}</span>"</h1>
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
                        Nessun articolo corrisponde alla tua ricerca
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