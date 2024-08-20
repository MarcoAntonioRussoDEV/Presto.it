<x-layout>
<main class="vh-100">
    <div class="container d-flex justify-content-center position-relative">
        <img src="{{ $user->img ?? Avatar::create(auth()->user()->name)->toBase64() }}" alt="">
        <input class=" opacity-50 position-absolute top-50" type="file">
    </div>
</main>

    {{-- <form id="profileImgForm" action="{{route('user.update',auth()->user()->id)}}" method="POST" enctype="multipart/form-data" class="flex flex-col justify-center items-center p-5 gap-10">
        @csrf
        @method('PUT') --}}



        
        <section id="clickAreaProfileImage" onclick="profileImgInput.click()" class="flex items-center justify-center object-cover overflow-clip w-48 h-48 rounded-full border-4  border-red-700 p-1 hover:border-none hover:outline-dashed hover:outline-4 hover:outline-offset-4 hover:outline-gray-700 ">
            <img id="profileImg" class="rounded-full" src="{{Storage::url(auth()->user()->img)}}" alt="profile-img">
            <label id="profileImgLabel" class="opacity-0 flex flex-col absolute text-center text-white font-bold" for="img"><i class="fa-solid fa-plus text-5xl opacity-70 pointer-events-none" ></i>Cambia immagine</label>
            <input onchange="profileImgForm.submit()" draggable="true" type="file" name="img" id="profileImgInput"
            class="w-full h-full file:opacity-0 empty:opacity-0">
        </section>
            
        
        <section>
            <p class="text-5xl" >Benvenuto</p>
            <p class="text-7xl text-red-700">{{auth()->user()->name}} </p>
        </section>
        

    {{-- </form> --}}
</x-layout>