<x-layout>
    <header class="min-vh-100 d-flex flex-column justify-content-end align-items-end">
        <div class="container header-custom text-center mb-5">
            @guest
                <!-- Testo per utenti non autenticati -->
                <h1 class="display-5 text-light">Scopri il mercato perfetto per te!</h1>
                <p class="text-light fs-3">
                    Diventa <span class="text-danger">PROTAGONISTA</span> nel nostro mercatino online. Registrati oggi e non
                    perdere le offerte esclusive!
                </p>
                <a href="{{ route('register') }}" class="btn text-danger fs-3">
                    REGISTRATI ORA!
                </a>
            @else
                <!-- Testo per utenti autenticati -->
                <h1 class="display-5 text-light">Il tuo spazio per fare affari!</h1>
                <p class="text-light fs-3 mt-3">
                    Affrettati! <span class="text-danger">Pubblica i tuoi annunci</span>, raggiungi nuovi clienti e
                    trasforma i tuoi prodotti in guadagni.
                </p>
                <a href="{{ route('articles.create') }}" class="text-danger nav-link fs-3 mt-2">
                    <i class="fas fa-store"></i> Inizia a Vendere
                </a>
            @endguest
        </div>
    </header>
    <section>
        <div class="container py-4">
            <div class="row justify-content-center">
                <!-- Colonna Categorie -->
                <div class="col-md-3 col-12 mb-md-0 mb-3 text-center">
                    <div class="categories-list">
                        <h2 class="mb-3 text-white">Categorie</h2>
                        <div class="row row-cols-lg-1 row-cols-md-2 row-cols-sm-2 row-cols-2 g-3">
                            @foreach ($categories as $category)
                                <div class="col ">
                                    <a href="{{ route('byCategory', compact('category')) }}"
                                        class="category-item d-flex align-items-center justify-content-center p-2 rounded text-decoration-none">
                                        {{ $category->name }}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Colonna Articoli -->
                <div class="col-lg-9 col-md-9 col-12">
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-lg-12 mb-4">
                                <x-card :article="$article" />
                            </div>
                        @endforeach
                    </div>
                    <div class="row ">
                        <div class="col-12 d-flex justify-content-end me-5 pe-5">
                            {{ $articles->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
