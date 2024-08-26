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
          <div class="mb-3">
               <input type="file" wire:mode.live="temporary_images" multiple 
               class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
          @error('temporary_images.*')
               <p class="fst-italic text-danger">{{ $message }}</p>
          @enderror
          @error('temporary_images')
               <p class="fst-italic text-danger">{{ $message }}</p>
          @enderror
               
          </div>
          @if(!empty($images))
               <div class="row">
                    <div class="col-12">
                         <p>Photo preview</p>
                         <div class="row border border-4 border-succes rounded shadow py-4">
                              @foreach ($images as $key => $image)
                                   <div class="col d-flex flex-column align-items-center my-3">
                                        <div class="img-preview mx-auto shadow rounded"
                                        style="background-image: url({{ $image->temporaryUrl() }});"></div>
                                   </div>
                              @endforeach
                         </div>
                    </div>
               </div>
          @endif
          <p>Photo preview</p>
          <div class="row border border-4 border-success rounded shadow py-4">
               @foreach ($images as $key => $image)
                   <div class="d-flex flex-column align-items-center my-3">
                       <div class="img-preview mx-auto shadow rounded"
                            style="background-image: url({{ $image->temporaryUrl() }});">
                       </div>
                       <button type="button" class="btn mt-1 btn-danger" wire:click="removeImage({{ $key }})">X</button>
                   </div>
               @endforeach
           </div>
           <div class="row justify-content-center">
               <button type="submit" class="btn btn-custom-primary col-6 mt-5 fs-5">Crea</button>
           </div>
          
</form>