<form class="bg-body-tertiary shadow rounded p-5 my-5" wire:submit="store">
          <div class="mb-3">
               <x-feedback />
               <label for="title" class="form-label">Titolo:</label>
               <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" wire:model.blur="title">
               <x-validation field="title" />
               
          </div>
          <div class="mb-3">
               <label for="description" class="form-label">Descrizione:</label>
               <textarea id="description" cols="30" rows="5" class="form-control @error("description") is-invalid @enderror" wire:model.blur="description"></textarea>
          </div>
          <div class="mb-3">
               <label for="price" class="form-label">Prezzo:</label>
               <input type="text" class="form-control @error("price") is-invalid @enderror" id="price" wire:model.blur="price">
          </div>
          <div class="mb-3">
               <label for="price" class="form-label">Categoria:</label>
               <select id="category" wire:model.blur="category" class="form-control">
                    @foreach ($categories as $category)
                         <option value="{{ $category->id }}">{{ Str::ucFirst($category->name) }}</option> 
                    @endforeach
               </select>
          </div>
          <div class="row justify-content-center">
               <button type="submit" class="btn btn-custom-primary col-6 mt-5 fs-5">Crea</button>
          </div>
</form>