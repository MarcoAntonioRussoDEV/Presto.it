<x-layout>

<x-feedback />

<form id="profileImgForm" action="{{route('user.updateProfileImage',auth()->user())}}" method="POST" enctype="multipart/form-data" class="d-flex flex-column justify-content-center align-items-center p-5 gap-10">
    @csrf
    @method('PUT')
        
        <section class="text-center my-4">
            <p class="display-5 fw-bold">{{__("ui.welcome")}}</p>
            <p class="display-4 fw-bold">{{ auth()->user()->name }}</p>
        </section>

        <section id="clickAreaProfileImage" class="position-relative d-flex align-items-center justify-content-center rounded rounded-circle overflow-hidden square-dashboard-img border border-3 border-primary" onclick="profileImgInput.click()">
            <img class="w-100 h-100 rounded rounded-circle object-fit- p-2" src="{{ auth()->user()->img ? Storage::url(auth()->user()->img) :Avatar::create(auth()->user()->name)->setDimension(400,400)->setFontSize(180) }}" alt="profile-image">
            <input onchange="profileImgForm.submit()" draggable="true" type="file" name="img" id="profileImgInput" class="visually-hidden">
            <label class="position-absolute w-100 h-100 d-flex justify-content-center align-items-center rounded rounded-circle opacity-0" for="img"><i class="material-symbols-outlined display-2">add</i></label>
        </section>
        <p class="text-center mt-2 small fst-italic">{{__("ui.click on the image for changing it")}}</p>

</form>

</x-layout>