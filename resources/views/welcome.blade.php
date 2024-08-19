<x-layout>
     <x-feedback />
     <div class="container-fluid text-center">
          <div class="row custom-min-vh justify-content-center align-items-center">

               <div class="col-12">
                    <h1 class="display-4">Presto.it</h1>
               </div>
               @if($articles6->count() != 0)
                    <div class="col-12 col-xl-8">
                         <h2 class="display-6">Articoli recenti:</h2>
                         <div id="articles-6" class="d-none d-xl-block"><x-carousel :articles="$articles6" /></div>
                         <div id="articles-3" class="d-xl-none"><x-carousel :articles="$articles3" /></div>
                    </div>
               @endif
               @auth
               <div>
                    <a href="{{ route("create.article") }}" class="btn btn-custom-primary col-6 col-md-2">Crea Articolo</a>
               </div>
               @endauth

          </div>
     </div>
</x-layout>