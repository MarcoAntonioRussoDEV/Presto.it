<x-layout>
    <div class="container">
        <div class="row justify-content-center mb-4">
            <img class="col-6 col-lg-3 mt-1 rounded-circle" src="{{ Storage::url("public/img/placeholders/placeholder-user.jpg") }}" alt="">
        </div>
        <form method="POST" action="{{ route("register") }}" class="row justify-content-center flex-lg-column align-items-lg-center">
        @csrf
            <div class=" col-8 col-lg-3 p-0">
                <x-validation field="name" />
                <input type="text" class="custom-floating-input @error("name") is-invalid @enderror" id="floatingName" placeholder="" name="name">
                <label class="custom-floating-label" for="floatingName">Nome</label>
            </div>
            <div class=" col-8 col-lg-3 p-0">
                <x-validation field="email" />
                <input type="email" class="custom-floating-input @error("email") is-invalid @enderror" id="floatingEmail" placeholder="" name="email">
                <label class="custom-floating-label" for="floatingEmail">Email</label>
            </div>
            <div class=" col-8 col-lg-3 p-0">
                <x-validation field="password" />
                <input type="password" class="custom-floating-input @error("password") is-invalid @enderror" id="floatingPassword" placeholder="" name="password">
                <label class="custom-floating-label" for="floatingPassword">Password</label>
            </div>
            <div class="col-8 col-lg-3 p-0 mb-4">
                <x-validation field="password_confirmation" />
                <input type="password" class="custom-floating-input @error("password_confirmation") is-invalid @enderror" id="floatingPassword_confirmation" placeholder="" name="password_confirmation">
                <label class="custom-floating-label" for="floatingPassword_confirmation">Conferma Password</label>
            </div>
            <button type="submit"  class="btn btn-custom-primary p-3 col-8 col-lg-3 mb-1">Registrati</button>
            <a href="{{ route("login") }}" class="col-8 col-lg-3 text-center small">Sei già registrato?</a>
        </form>
    </div>
</x-layout>