<x-layout>

    <x-feedback />

    <form id="profileImgForm" action="{{route('user.updateProfileImage',auth()->user())}}" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center items-center p-5 gap-10">
        @csrf
        @method('PUT')


        <div class="container">
            
            <section class="text-center my-4">
                <p class="display-4 fw-bold">Benvenuto, {{ auth()->user()->name }}</p>
            </section>

            <div class="row justify-content-center align-items-center">
                <div class="col-12 d-flex justify-content-center">
                    <section id="clickAreaProfileImage" onclick="profileImgInput.click()" class="position-relative d-flex align-items-center justify-content-center">
                        <img class="img-fluid visually-hidden" src="{{ $user->img ?? Avatar::create(auth()->user()->name)->toBase64() }}" alt="">
                        <img id="profileImg" class="img-fluid" style="max-width: 600px; max-height: 600px;" src="{{ Storage::url(auth()->user()->img) }}" alt="">
                        
                        <label id="profileImgLabel" class="d-flex flex-column align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100">
                            <span class="fs-5"></span>
                            <input onchange="profileImgForm.submit()" draggable="true" type="file" name="img" id="profileImgInput" class="visually-hidden">
                        </label>
                    </section>
                </div>

                <p class="text-center mt-4">Premi sull'immagine per cambiarla</p>


            </div>

        </div>

    </form>
</x-layout>