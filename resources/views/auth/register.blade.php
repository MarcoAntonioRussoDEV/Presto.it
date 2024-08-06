<x-layout>
    <div class="container">
        <div class="row justify-content-center mb-4">
            <img class="col-6 col-md-3" src="{{ Storage::url("public/img/placeholders/placeholder-user.jpg") }}" alt="">
        </div>
        <form method="POST" action="{{ route("register") }}" class="row justify-content-center flex-md-column align-items-md-center">
        @csrf
            <div class="form-floating mb-3 col-8 col-md-3 p-0">
                <input type="text" class="form-control @error("name") is-invalid @enderror" id="floatingInput" placeholder="Nome" name="name">
                <label for="floatingInput">Nome</label>
                <x-validation $field="name">
            </div>
            <div class="form-floating mb-3 col-8 col-md-3 p-0">
                <input type="email" class="form-control @error("email") is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email</label>
                <x-validation $field="email">
            </div>
            <div class="form-floating mb-3 col-8 col-md-3 p-0">
                <input type="password" class="form-control @error("password") is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
                <x-validation $field="password">
            </div>
            <div class="form-floating col-8 col-md-3 p-0 mb-4">
                <input type="password" class="form-control @error("password_confirmation") is-invalid @enderror" id="floatingPassword_confirmation" placeholder="password_confirmation" name="password_confirmation">
                <label for="floatingPassword_confirmation">Conferma Password</label>
                <x-validation $field="password_confirmation">
            </div>
            <button type="submit"  class="btn btn-custom-primary p-3 col-8 col-md-3 mb-1">Registrati</button>
            <a href="{{ route("login") }}" class="col-8 col-md-3 text-center small">Sei già registrato?</a>
        </form>
    </div>
</x-layout>