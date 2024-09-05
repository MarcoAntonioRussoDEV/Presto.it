<div class="col-10 col-md-3" wire:ignore>
    <h2>{{ Str::ucfirst(__('ui.filters')) }}</h2>
    <div class="accordion border border-2 rounded border-primary" id="accordionExample">


{{-- Prezzo --}}
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{ Str::ucfirst(__('ui.price')) }}
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body text-center">
                    <div class="d-flex gap-2 fw-semibold">
                        <span>
                            0€
                        </span>
                        <input id="selectedPriceInput" class="form-range" name="price" type="range" wire:model.live="priceFilter"
                            min="0" max="{{ $maxPrice }}">
                        <span>
                            {{ $maxPrice }}€
                        </span>
                    </div>
                    <label for="price" class="form-label">
                        <p id="selectedPrice" class=" fst-italic">{{$maxPrice}}€</p>
                    </label>
                </div>
            </div>
        </div>

{{-- Categorie --}}
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    {{ Str::ucfirst(__('ui.categories')) }}
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body d-flex flex-column gap-2">
                    <div class="d-flex gap-2">
                        <input class="form-check-input" type="radio" name="categories" id="" value="all"
                            wire:model.live="categoryFilter">
                        <label class="form-check-label" for="categories">{{ Str::ucfirst(__('ui.all')) }}</label>
                    </div>
                    @foreach ($categories as $category)
                        <div class="d-flex gap-2">
                            <input class="form-check-input" type="radio" name="categories" id="{{ $category->id }}"
                                value="{{ $category->id }}" wire:model.live="categoryFilter">
                            <label class="form-check-label"
                                for="{{ $category }}">{{ Str::ucfirst(__("ui.$category->name")) }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

{{-- Stelle --}}
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    {{ Str::ucfirst(__('ui.stars')) }}
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body d-flex flex-column gap-2">
                    
                    @for ($i = 0; $i <= 4; $i++)
                        <div class="d-flex gap-2 align-items-baseline">
                            <input class="form-check-input" type="radio" name="stars"
                                wire:model.live="gradeFilter" value="{{ $i }}">
                            <span class="fa-solid fa-star text-warning"></span>
                            <span>{{$i}} +</span>
                            
                        </div>
                        {{-- <br> --}}
                    @endfor
                    <div class="d-flex gap-2 align-items-baseline">
                        <input class="form-check-input" type="radio" name="stars"
                            wire:model.live="gradeFilter" value="5">
                        <span class="fa-solid fa-star text-warning"></span>
                        <span>5</span>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <button wire:click="resetFilters" class="btn btn-primary w-100 mt-2">Reset</button>
</div>
