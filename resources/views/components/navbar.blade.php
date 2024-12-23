<nav class="navbar navbar-expand-lg navbar-custom shadow">
    <div class="container-fluid position-relative">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link"
                                style="color: #fff; padding-left: 0; border: none;"><i class="fas fa-sign-out-alt"></i>
                                Logout</button>
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'login' ? 'active' : '' }}"
                            href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'register' ? 'active' : '' }}"
                            href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Registrati</a>
                    </li>
                @endguest
                <li class="nav-item ms-5">
                    <a class="nav-link ms-md-5 ms-0 {{ Route::currentRouteName() == 'homepage' ? 'active' : '' }}"
                        href="{{ route('homepage') }}"><i class="fas fa-home"></i> Home</a>
                </li>
                <li class="nav-item ">
                    <button class="nav-link" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasCategories" aria-controls="offcanvasCategories">
                        <i class="fas fa-list"></i> Categorie
                    </button>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::currentRouteName() == 'articles.create' ? 'active' : '' }}"
                        href="{{ route('articles.create') }}"><i class="fas fa-shop"></i>Sell</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{ Route::currentRouteName() == 'articles.index' ? 'active' : '' }}"
                        href="{{ route('articles.index') }}"><i class="fas fa-shop"></i>Novita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href=""><i class="fas fa-envelope"></i> Contatti</a>
                </li>

            </ul>
            <form class="d-flex search-box mx-auto">
                <input type="text" placeholder="Cerca..." aria-label="Cerca">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <a class="navbar-brand logo-img-absolute " href="{{ route('homepage') }}"><img class="logo-img "
                src="/logo.png" alt=""></a>
    </div>
</nav>


<div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="offcanvasCategories"
    aria-labelledby="offcanvasCategoriesLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCategoriesLabel">Categorie</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-unstyled">
            @foreach ($categories as $category)
                <li class="mb-3">
                    <a href="{{ route('byCategory', compact('category')) }}" class="text-white text-decoration-none">
                        {{ $category->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
