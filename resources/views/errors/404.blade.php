<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>{{ env("APP_NAME") }} | Not found</title>
</head>
<body>
    @include("partials.header")
    <main>
        <section id="welcome">
            <div class="welcome-text">
                <h3 class="main-section-sub-title">Fresh adn Organic</h3>
                <h1 class="main-section-title">404 - Not Found</h1>
            </div>
        </section>
        <section id="error-body">
            <i class="far fa-sad-cry error-icon"></i>
            <h2>Oops! Not Found.</h2>
            <p>The page you requested for is not found.</p>
            <a href="#" class="btn-link">Back to Home</a>
        </section>
        @include('partials.patners')
    </main>
    @include("partials.footer")
    <script src="{{ asset('assets/js/caroussel.js') }}"></script>
    <script src="{{ asset('assets/js/header_change_background.js') }}"></script>
    <script src="{{ asset('assets/js/modal.js') }}"></script>
    <script src="{{ asset('assets/js/active_link.js') }}"></script>
</body>
</html>
