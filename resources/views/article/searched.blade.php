<x-layout>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-1 text-center">Risultati per la ricerca <span
                        class="fst-italic">{{ $query }}</span></h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Nessun articolo corrispondente alla ricerca!
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
    <div class="row py-5 justify-content-center align-items-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>

     <!-- Pulsante "Torna su" con icona razzo -->
     <button id="scrollToTopBtn" class="scroll-to-top">
        <i class="fas fa-rocket"></i>
    </button>
    
</x-layout>
