<form class="bg-body-tertiary shadow-primary border rounded-4 p-5 my-5" wire:submit="store">
          <div class="mb-3 pb-4_5 position-relative">
               <x-feedback />
               <label for="title" class="form-label">Titolo:</label>
               <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" wire:model.blur="title">
               <x-validation field="title" />
               
          </div>
          <div class="mb-3 pb-4_5 position-relative">
               <label for="description" class="form-label">Descrizione:</label>
               <textarea id="description" cols="30" rows="5" class="form-control @error("description") is-invalid @enderror" wire:model.blur="description"></textarea>
               <x-validation field="description" />
          </div>
          <div class="mb-3 pb-4_5 position-relative">
               <label for="price" class="form-label">Prezzo:</label>
               <input type="text" class="form-control @error("price") is-invalid @enderror" id="price" wire:model.blur="price">
               <x-validation field="price" />

          </div>
          <div class="mb-3 pb-4_5 position-relative">
               <label for="price" class="form-label">Categoria:</label>
               <select id="category" wire:model.blur="category" class="form-control  @error("category") is-invalid @enderror">
                    <option selected disabled value=""> -- seleziona una categoria -- </option>
                    @foreach ($categories as $category)
                         <option value="{{ $category->id }}">{{ Str::ucFirst($category->name) }}</option> 
                    @endforeach
               </select>
               <x-validation field="category" />

          </div>
          <div class="row justify-content-center">
               <button type="submit" class="btn btn-custom-primary col-6 mt-5 fs-5">Crea</button>
          </div>
</form>