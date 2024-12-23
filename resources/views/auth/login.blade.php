<x-layout>
    <div class="bg-login min-vh-100">
        <div class="row justify-content-start">
            <div class="col-md-4 col-12 text-start ms-md-5 ms-sm-0">
                <h1 class="display-4 pt-5">Accedi</h1>
            </div>
            <div class="justify-content-start align-items-center height-custom">
                <div class="col-12 col-md-4 d-flex flex-column justify-content-center ms-md-5 ms-sm-0">
                    <form method="POST" action="{{ route('login') }}" class="form-custom">
                        @csrf
                        <fieldset class="fieldset-custom">
                            <legend class="legend-custom">Credenziali di accesso</legend>
                            <div class="p-2">
                                <label for="loginEmail" class="form-label label-custom ps-3">Indirizzo email</label>
                                <input type="email" class="input-custom mb-2" id="loginEmail" name="email"
                                    placeholder="Email">
                            </div>
                            <div class="mb-3 p-2">
                                <label for="password" class="form-label label-custom ps-3">Password</label>
                                <input type="password" class="input-custom mb-2" id="password" name="password"
                                    placeholder="Password">
                            </div>
                            <div class="d-flex justify-content-start align-items-center ms-2">
                                <button type="submit" class="btn button-custom">Accedi</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
