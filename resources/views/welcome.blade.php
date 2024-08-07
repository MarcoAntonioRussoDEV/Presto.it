<x-layout>
<div class="container-fluid text-center bg-body-tertiary">
     <div class="row vh-100 justify-content-center align-items-center">
          <div class="col-12">
               <h1 class="display-4">Presto.it</h1>
          </div>
          @auth
               <a href="{{ route("create.article") }}" class="btn btn-custom-primary col-6 col-md-2">Crea Articolo</a>
          @endauth
     </div>
</div>
</x-layout>