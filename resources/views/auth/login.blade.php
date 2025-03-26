<x-layout>
    <div class="container top accedi-page">
        <div class="row justify-content-center">
            <div class="col-12 text-center ">
                <h1>Accedi</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="loginEmail" class="form-label">Indirizzo Email</label>
                      <input type="email" class="form-control" id="loginEmail" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn button">Accedi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
