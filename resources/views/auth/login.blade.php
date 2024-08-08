<x-layout>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <img class="col-6 col-lg-3 mt-5 rounded-circle" src="{{ url("asset/img/placeholders/placeholder-user.jpg") }}" alt="">
        </div>
        <form method="POST" action="{{ route("login") }}" class="row justify-content-center flex-lg-column align-items-lg-center">
        @csrf
            <div class="mb-3 col-8 col-lg-3 p-0">
                <input type="email" class="custom-floating-input" id="floatingInput" placeholder="" name="email">
                <label class="custom-floating-label" for="floatingInput">Email</label>
            </div>
            <div class="mb-3 col-8 col-lg-3 p-0">
                <input type="password" class="custom-floating-input" id="floatingPassword" placeholder="" name="password">
                <label class="custom-floating-label" for="floatingPassword">Password</label>
            </div>
            <button type="submit"  class="btn btn-custom-primary p-3 col-8 col-lg-3 mb-1">Accedi</button>
            <a href="{{ route("register") }}" class="col-8 text-center small">Non sei ancora registrato?</a>
        </form>
    </div>
</x-layout>