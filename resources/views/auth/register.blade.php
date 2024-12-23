<x-layout>
    <div class="bg-login min-vh-100">
        <div class="row justify-content-start">
            <div class="col-md-4 col-12 text-start ms-md-5 ms-sm-0">
                <h1 class="display-4 pt-5">Registrati</h1>
            </div>
            <div class="justify-content-end align-items-center height-custom">
                <div class="col-12 col-md-4 d-flex flex-column justify-content-center ms-md-5 ms-sm-0">
                    <form method="POST" action="{{ route('register') }}" class="form-custom">
                        @csrf
                        <fieldset class="fieldset-custom">
                            <legend class="legend-custom">Crea un Account</legend>
                            <div class="p-2">
                                <label for="name" class="form-label label-custom ps-3">Nome</label>
                                <input type="text" class="input-custom mb-2" id="name" name="name"
                                    placeholder="Nome completo">
                            </div>
                            <div class="p-2">
                                <label for="registerEmail" class="form-label label-custom ps-3">Indirizzo
                                    email</label>
                                <input type="email" class="input-custom mb-2" id="registerEmail" name="email"
                                    placeholder="Email">
                            </div>
                            <div class="mb-3 p-2">
                                <label for="registerPassword" class="form-label label-custom ps-3">Password</label>
                                <input type="password" class="input-custom mb-2" id="registerPassword" name="password"
                                    placeholder="Password">
                            </div>
                            <div class="mb-3 p-2">
                                <label for="password_confirmation" class="form-label label-custom ps-3">Conferma
                                    Password</label>
                                <input type="password" class="input-custom mb-2" id="password_confirmation"
                                    name="password_confirmation" placeholder="Conferma Password">
                            </div>
                            <div class="d-flex justify-content-end align-items-center ms-2">
                                <button type="submit" class="btn button-custom">Registrati</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
