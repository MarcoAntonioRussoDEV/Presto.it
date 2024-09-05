<x-layout>
    <div class="row height-custom justify-content-center align-items-center text-center">
        <div class="col-12">
            <h1 class="display-1 mt-4">{{__("ui.allArticles")}}</h1>
        </div>
    </div>
    <main class="my-5 row justify-content-center">
        
        <livewire-articles-filters />
        <livewire-articles-index />
    </main>

</x-layout>
