<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beast Market</title>
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <x-navbar />
    <main class="min-vh-100 text-light bg-main ">
        {{ $slot }}
    </main>
    <x-footer />
    <button id="back-to-top" <i class="fa fa-arrow-up"></i> <!-- Assumi che tu voglia usare Font Awesome per il logo -->
    </button>
</body>

</html>
