<x-layout>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <img class="col-6" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4YreOWfDX3kK-QLAbAL4ufCPc84ol2MA8Xg&s" alt="">
        </div>
        <form method="POST" action="{{ route("register") }}" class="row justify-content-center">
        @csrf
            <div class="form-floating mb-3 col-8 p-0">
                <input type="text" class="form-control" id="floatingInput" placeholder="Nome" name="name">
                <label for="floatingInput">Nome</label>
            </div>
            <div class="form-floating mb-3 col-8 p-0">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3 col-8 p-0">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating col-8 p-0 mb-4">
                <input type="password_confirmation" class="form-control" id="floatingPassword_confirmation" placeholder="password_confirmation" name="password_confirmation">
                <label for="floatingPassword_confirmation">Conferma Password</label>
            </div>
            <button type="submit"  class="btn btn-primary p-3 col-8 mb-1">Registrati</button>
            <a class="col-8 text-center small">Sei già registrato?</a>
        </form>
    </div>
</x-layout>