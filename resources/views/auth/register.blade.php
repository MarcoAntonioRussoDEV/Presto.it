<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center mb-5 position-relative rounded-circle border border-3 border-primary-custom col-6 col-lg-2 overflow-hidden p-0 ">
                <img id="eagle" class="p-0" src="{{ url("asset/img/eagle.png") }}" alt="">
                <img id="eagle-eyes" class="position-absolute p-0" src="{{ url("asset/img/eagle-eyes.png") }}" alt="">
                <img id="eagle-wing-bottom" class="eagle-wings position-absolute p-0" src="{{ url("asset/img/eagle-wing-bottom.png") }}" alt="">
                <img id="eagle-wing-upper" class="eagle-wings position-absolute p-0" src="{{ url("asset/img/eagle-wing-upper.png") }}" alt="">
            </div>
        </div>
        <form method="POST" action="{{ route("register") }}" class="row justify-content-center flex-column align-items-center">
        @csrf
            <div class=" col-8 col-lg-3 p-0 pb-1 position-relative ">
                <x-validation field="name" authForm="true" />
                <input type="text" class="custom-floating-input @error("name") is-invalid @enderror" id="floatingName" placeholder="" name="name" value="{{ old('name') }}">
                <label class="custom-floating-label" for="floatingName">Nome</label>
            </div>
            <div class=" col-8 col-lg-3 p-0 pb-1 position-relative">
                <x-validation field="email" />
                <input type="email" class="custom-floating-input @error("email") is-invalid @enderror" id="floatingEmail" placeholder="" name="email" value="{{ old('email') }}">
                <label class="custom-floating-label" for="floatingEmail">Email</label>
            </div>
            <div class="mb-3 col-8 col-lg-3 p-0 pb-1 position-relative">
                <input type="password" class="custom-floating-input @error("password") is-invalid @enderror" id="floatingPassword" placeholder="" name="password" value="{{ old('password') }}" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Minimo 8 caratteri" data-bs-custom-class="custom-tooltip">
                <label class="custom-floating-label" for="floatingPassword">Password</label>
                <img class="pe-4 visibility" id="visibility" src="{{ url("asset/icons/visibility-on.svg") }}" alt="">
                <x-validation field="password" />
            </div>
            <div class="col-8 col-lg-3 p-0 pb-1 position-relative">
                <input type="password" class="custom-floating-input @error("password_confirmation") is-invalid @enderror" id="floatingPassword_confirmation" placeholder="" name="password_confirmation" value="{{ old('password_confirmation') }}">
                <label class="custom-floating-label" for="floatingPassword_confirmation">Conferma Password</label>
                <x-validation field="password_confirmation" />
            </div>
            <button type="submit"  class="btn btn-custom-primary p-3 col-8 col-lg-3 mb-2" >Registrati</button>
            <div class="col-8 col-lg-3 px-0"><x-login-google /></div>
            <a href="{{ route("login") }}" class="col-8 col-lg-3 text-center small">Sei già registrato?</a>
        </form>
    </div>
</x-layout>
