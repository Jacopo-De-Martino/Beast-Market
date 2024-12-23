<x-layout>
    <section>
        <div class="container pt-5">
            <!-- Titolo articolo -->
            <div class="row justify-content-center text-center pt-5 ">
                <div class="col-12">
                    <h1 class="display-4">Dettaglio dell'articolo: {{ $article->title }}</h1>
                </div>
            </div>

            <div class="row mt-4 align-items-stretch">
                <!-- Carousel immagini -->
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <div id="articleCarousel" class="carousel slide shadow-sm rounded" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Fallback a Lorem Picsum se non ci sono immagini -->
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/800/400?random=1" class="d-block w-100 rounded"
                                    alt="Immagine Placeholder">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/800/400?random=2" class="d-block w-100 rounded"
                                    alt="Immagine Placeholder">
                            </div>
                            <div class="carousel-item">
                                <img src="https://picsum.photos/800/400?random=3" class="d-block w-100 rounded"
                                    alt="Immagine Placeholder">
                            </div>
                        </div>

                        <!-- Controlli del carousel (dentro il carosello) -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#articleCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Precedente</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#articleCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Successivo</span>
                        </button>
                    </div>
                </div>

                <!-- Dettagli articolo -->
                <div class="col-12 col-md-6 text-center text-md-start">
                    <h2 class="display-5 text-uppercase mb-3">{{ $article->category->name }}</h2>
                    <p class="strong">Pubblicato il: {{ $article->created_at->format('d/m/Y') }}</p>
                    <h4 class="fw-bold text-danger">Prezzo: €{{ number_format($article->price, 2) }}</h4>
                    <p class="mt-3"><strong>Località:</strong> {{ $article->location }}</p>
                    <p><strong>ID Annuncio:</strong> {{ $article->id }}</p>
                    <button class="btn button-custom w-sm-100 mt-4">Contatta il Venditore</button>
                </div>
            </div>

            <!-- Descrizione -->
            <div class="row mt-5">
                <div class="col-12 ">
                    <h3 class="mb-3 sm-center">Descrizione</h3>
                    <p class="sm-center">{{ $article->description }}</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
