<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1 class="category-text-create display-4 pt-5">PUBBLICA UN ANNUNCIO</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <form class="form-custom p-5 " wire:submit.prevent="save">

                <fieldset class="fieldset-custom">
                    @if (session('success'))
                        <div class="text-success text-center fs-3 py-3">
                            {{ session('success') }}
                        </div>
                    @endif
                    <legend class="legend-custom ">Dettagli dell'annuncio</legend>

                    <div class="mb-3">
                        <label for="title" class="label-custom ps-3 mb-2">Titolo</label>
                        <input type="text" id="title" class="input-custom @error('title') is-invalid @enderror"
                            wire:model="title" placeholder="Inserisci il titolo">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="label-custom ps-3 mb-2">Descrizione</label>
                        <textarea id="description" rows="5" class="input-custom text-white @error('description') is-invalid @enderror"
                            wire:model="description" placeholder="Inserisci la descrizione"></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="label-custom ps-3 mb-2">Prezzo</label>
                        <input type="text" id="price" class="input-custom @error('price') is-invalid @enderror"
                            wire:model="price" placeholder="Inserisci il prezzo">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="label-custom ps-3 mb-2">Categoria</label>
                        <select id="category" class="input-custom text-white @error('category') is-invalid @enderror"
                            wire:model="category">
                            <option disabled selected>Seleziona una categoria</option>
                            {{-- Assicurati di decommentare e utilizzare le categorie effettive quando disponibili --}}
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="button-custom">Crea</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
