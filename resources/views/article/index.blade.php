<x-layout>
    <section>
        <div class="container my-4">
            <div class="row justify-content-center">
                <!-- Colonna Categorie -->
                <div class="col-md-3 col-12 mb-md-0 mb-3 text-center">
                    <div class="categories-list">
                        <h2 class="mb-3">Categorie</h2>
                        <div class="row row-cols-lg-1 row-cols-md-2 row-cols-sm-2 row-cols-2 g-3">
                            @foreach ($categories as $category)
                                <div class="col ">
                                    <a href="/categorie/{{ $category->slug }}"
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
