<x-layout>
    <div class="row height-custom justify-content-center align-items-center text-center">
        <div class="col-12">
            <h1 class="display-1 mt-4">Tutti gli articoli</h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center gy-5 my-5 px-5">
        @forelse($articles as $article)
            <div class="col md-3 d-flex justify-content-center">
                <x-article-card :article="$article" />
            </div>
        @empty
            <div class="col-12">
                <h3 class="text-center">
                    Non sono ancora stati creati articoli
                </h3>
            </div>
        @endforelse
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>
