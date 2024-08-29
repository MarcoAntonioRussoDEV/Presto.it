<x-layout>
<div class="container">
        <div class="row justify-content-center">
            <div class="row justify-content-center mb-5 position-relative rounded-circle border border-3 border-primary-custom col-6 col-lg-2 overflow-hidden p-0 ">
                <img id="eagle" class="p-0" src="{{ url("asset/img/eagle.png") }}" alt="">
                <img id="eagle-eyes" class="position-absolute p-0" src="{{ url("asset/img/eagle-eyes.png") }}" alt="">
                <img id="eagle-wing-bottom" class="eagle-wings position-absolute p-0" src="{{ url("asset/img/eagle-wing-bottom.png") }}" alt="">
                <img id="eagle-wing-upper" class="eagle-wings position-absolute p-0" src="{{ url("asset/img/eagle-wing-upper.png") }}" alt="">
            </div>
            <form method="POST" action="{{ route("login") }}" class="row justify-content-center flex-lg-column align-items-lg-center">
            @csrf
                <div class="mb-3 col-8 col-lg-3 p-0 pb-1 position-relative">
                    <input type="email" class="custom-floating-input @error("email") is-invalid @enderror" id="floatingInput" placeholder="" name="email" value="{{ old('email') }}">
                    <label class="custom-floating-label" for="floatingInput">Email</label>
                    <x-validation field="email" />
                </div>
                <div class="mb-3 col-8 col-lg-3 p-0 pb-1 position-relative">
                    <input type="password" class="custom-floating-input @error("password") is-invalid @enderror" id="floatingPassword" placeholder="" name="password" value="{{ old('password') }}">
                    <label class="custom-floating-label" for="floatingPassword">{{__("ui.password")}}</label>
                    <img class="pe-4 visibility" id="visibility" src="{{ url("asset/icons/visibility-on.svg") }}" alt="">
                    <x-validation field="password" />
                </div>
                <button type="submit"  class="btn btn-custom-primary p-3 col-8 col-lg-3 mb-2">{{__("ui.logIn")}}</button>
                <div class="col-8 col-lg-3 px-0"><x-login-google /></div>
                <a href="{{ route("register") }}" class="col-8 text-center small">{{__("ui.you are not still registered?")}}</a>
            </form>
        </div>
</div>
</x-layout>