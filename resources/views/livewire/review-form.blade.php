<form wire:submit="submit({{$article->id}})" class="px-5 row gap-1 col-12 col-md-4 mb-5">
        <h3 class="fs-2 texts">{{__("ui.write a review!")}}</h3>
        <x-feedback />

        <label for="title">{{__("ui.title")}}</label>
        <input class="form-control" type="text" wire:model.live="title">
        <x-validation field="title" />

        <label for="content">{{__("ui.text")}}</label>
        <textarea class="form-control" type="text" wire:model="content"></textarea>
        <x-validation field="content" />


        <label for="vote" class="position-relative d-flex justify-content-center align-items-center">
            <input class="form-control w-25 opacity-0" type="range" wire:model.live="grade" min="1" max="5">
            <div class="position-absolute pointer-events-none" style="pointer-events: none">
                <x-grade-component grade="{{$grade}}" />
            </div>
        </label>
        <x-validation field="grade" />

        
    <button class="btn btn-warning w-100 mt-5">Invia</button>


    <div>
        <h3>Media delle Recensioni: {{ $averageGrade ? number_format($averageGrade, 1) : 'Nessuna recensione' }}</h3> 
    </div>
    
</form>