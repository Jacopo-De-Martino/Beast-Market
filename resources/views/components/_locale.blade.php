<form action="{{ route('setLocale', $lang) }}" class="d-inline" method="POST">
    @csrf

    <div class="nav-link d-flex">
        <button class="flag-container" type="submit">
            <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" class="flag-img" width="32"
                height="32">
        </button>
        <p class="p-2 mt-3">{{ $lang }}</p>
    </div>

</form>
