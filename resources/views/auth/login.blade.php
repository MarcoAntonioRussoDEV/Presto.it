<x-layout>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <img class="col-6" src="{{ Storage::url("public/img/placeholders/placeholder-user.jpg") }}" alt="">
        </div>
        <form method="POST" action="{{ route("login") }}" class="row justify-content-center">
        @csrf
                        <div class="form-floating mb-3 col-8 p-0">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3 col-8 p-0">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>
            <button type="submit"  class="btn btn-primary p-3 col-8 mb-1">Accedi</button>
            <a href="{{ route("register") }}" class="col-8 text-center small">Non sei ancora registrato?</a>
        </form>
    </div>
</x-layout>