<x-layout>
     
     <div class="container-fluid text-center">
          <div class="row vh-100 justify-content-center align-items-center">

               <div class="col-12">
                    <h1 class="display-4 mb-5">Presto.it</h1>
               </div>
               @if($articles->count() != 0)
                    <div class="col-12 col-lg-8">
                         <h2 class="display-6">Articoli recenti:</h2>
                         <x-carousel :$articles />
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