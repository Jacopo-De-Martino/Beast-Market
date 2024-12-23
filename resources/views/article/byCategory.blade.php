<x-layout>

    <div class="container-fluid pt-5 ">
        <div class="row height-custom justify-content-center align-items-center pt-md-0 pt-5">
            <!-- Header Categoria -->
            <div class="col-12">
                <h1 class="category-text text-center">Categoria: {{ $category->name }}</h1>
            </div>

            <section>
                <div class="container my-4">
                    <div class="row">
                        <!-- Colonna Categorie -->
                        <div class="col-12">
                            <div class="categories-list text-center">

                                <div
                                    class="row row-cols-lg-8 row-cols-md-4 row-cols-sm-3 row-cols-2 g-3 justify-content-center">
                                    @foreach ($categories as $category)
                                        <div class="col">
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
                        <div class="col-12 mt-4">
                            <div class="row">
                                @forelse ($articles as $article)
                                    <div class="col-lg-12 mb-4">
                                        <x-card :article="$article" />
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <h3 class="text-center">
                                            Non ci sono articoli al momento per questa categoria!
                                        </h3>
                                    </div>
                                @endforelse
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <div class="col-12 d-flex justify-content-end me-5 pe-5">
                {{ $articles->links() }}
            </div>



</x-layout>
