<article class="mb-5 col-12 col-md-6 mx-auto @auth col-md-8 mx-0 px-5 @endauth">
    @forelse($reviews as $review)

        <div class="row justify-content-start">

            <section class="col-2 col-md d-flex justify-content-end">
                <img class="profile-img border border-primary" src="{{ $review->user->img ? Storage::url($review->user->img) : Avatar::create($review->user->name) }}" alt="">
            </section>
    
            <section id="review-section" class="col-9 col-md-11 border border-2 border-primary rounded rounded-xl pt-2 pb-0 mb-3 break-words" >
                
                <h3>{{$review->title}}</h3>
                <p>{{$review->content}}</p>
                <x-grade-component grade="{{$review->grade}}" />
                {{-- @isset($review->user->name) --}}
                <p class="fst-italic mb-1">{{$review->user->name}}</p>
                {{-- @endisset --}}
        
            </section>

        </div>
        
    @empty
        <p class="text-center mt-2">Non ci sono recensioni per questo articolo</p>
    @endforelse
    <div class="d-flex justify-content-center">
        <div>
            {{ $reviews->links() }}
        </div>
    </div>
</article>
