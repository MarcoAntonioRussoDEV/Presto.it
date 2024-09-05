<x-layout>
         <div class="container"> <x-feedback /></div>
     <div class="container-fluid text-center">
          <div class="row custom-min-vh justify-content-center align-items-center">

               <header class="col-12 d-flex flex-column flex-md-row gap-4 justify-content-center align-items-center position-relative border border-primary rounded rounded-xl w-75 p-3">
                    <img class="custom-img-mascotte" src="{{url('/asset/img/gianfalco.png')}}" alt="mascotte">
                    <div class="text-start">
                         <img id="logo-img" src="{{session('theme') == 'light' ? url('/asset/img/logo-gradient.png') : url('/asset/img/logo-white.png')}}" alt="logo">
                         <h6 class="display-6 fw-normal">
                              {{__("ui.findWhatYouAreLookingFor")}}
                         </h6>
                         <q class="fst-italic">{{__("ui.wordOfGianfalco")}}</q>     
                    </div>
               </header>
               @if($articles6->count() != 0)
                    <div class="col-12 col-xl-8">
                         <h2 class="display-6">{{__('ui.lastArticles')}}:</h2>
                         <div id="articles-6" class="d-none d-xl-block"><x-carousel :articles="$articles6" /></div>
                         <div id="articles-3" class="d-xl-none"><x-carousel :articles="$articles3" /></div>
                    </div>
               @endif
               @auth
               <div>
                    <a href="{{ route("create.article") }}" class="btn btn-custom-primary col-6 col-md-2 my-5">{{__("ui.createArticle")}}</a>
               </div>
               @endauth

          </div>
     </div>
     
</x-layout>