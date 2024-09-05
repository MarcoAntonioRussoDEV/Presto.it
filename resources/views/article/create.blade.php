<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 mt-5">
                    {{__("ui.publishAnArticle")}}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center height-custom">
            <div class="col-12 col-md-6">
                <livewire:create-article-form />
            </div>
        </div>
    </div>
</x-layout>