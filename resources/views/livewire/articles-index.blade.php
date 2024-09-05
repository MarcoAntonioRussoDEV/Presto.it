<div class="col-12 col-md-8 row justify-content-center align-items-center px-5 gy-3">
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
    @if ($is_paginate)
        <iv class="d-flex justify-content-center">
            <div>
                {{ $allArticles->links() }}
            </div>
        </iv>
    @endif
</div>
