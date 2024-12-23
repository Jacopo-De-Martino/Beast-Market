<div class="card article-card shadow-sm border-0">
    <div class="row g-0">
        <!-- Immagine a sinistra -->
        <div class="col-md-4">
            <img src="{{ $article->image_url ?? 'https://picsum.photos/300/200?random=' . $article->id }}"
                class="img-fluid rounded-start w-100 h-100" alt="{{ $article->title }}"
                style="object-fit: cover; max-height: 300px;">
        </div>
        <!-- Dettagli a destra -->
        <div class="col-md-8 d-flex flex-column justify-content-between text-center pt-2">
            <div class="card-body card-body d-flex flex-column justify-content-between align-items-center">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text mb-1"><strong>Prezzo:</strong> €{{ number_format($article->price, 2) }}</p>
                <p class="card-text"><strong>Categoria:</strong> {{ $article->category->name }}</p>
                <a href="{{ route('articles.show', ['article' => $article]) }}"
                    class="btn button-custom w-sm-100">Visualizza Dettagli</a>
            </div>
        </div>
    </div>
</div>
