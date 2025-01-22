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
    <title>{{ env("APP_NAME") }} | News</title>
</head>
<body>
    @include("partials.header")
    <main>
        @include("partials.welcome_section",["sectionSubTitle" => "Organic Information","sectionTitle" => "News Article"])
        <section id="news">
            <div class="new-container">
                <div class="news">
                    <a href="#">
                        <img src="{{ asset('assets/images/news/1.jpg') }}" alt="">
                    </a>
                    <h4><a href="#">You will vainly look for fruit on it in autumn.</a></h4>
                    <div class="news-info">
                        <p>
                            <i class="fa-solid fa-user"></i>
                            <span>Admin</span>
                        </p>
                        <p>
                            <i class="fa-solid fa-calendar"></i>
                            <span> 27 December, 2019</span>
                        </p>
                    </div>
                    <div class="news-description">
                        Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.
                    </div>
                    <a href="#" class="read-more-link">Read more</a>
                </div>
                <div class="news">
                    <a href="#">
                        <img src="{{ asset('assets/images/news/2.jpg') }}" alt="">
                    </a>
                    <h4><a href="#">A man's worth has its season, like tomato.</a></h4>
                    <div class="news-info">
                        <p>
                            <i class="fa-solid fa-user"></i>
                            <span>Admin</span>
                        </p>
                        <p>
                            <i class="fa-solid fa-calendar"></i>
                            <span> 27 December, 2019</span>
                        </p>
                    </div>
                    <div class="news-description">
                        Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.
                    </div>
                    <a href="#" class="read-more-link">Read more</a>
                </div>
                <div class="news">
                    <a href="#">
                        <img src="{{ asset('assets/images/news/3.jpg') }}" alt="">
                    </a>
                    <h4><a href="#">Good thoughts bear good fresh juicy fruit.</a></h4>
                    <div class="news-info">
                        <p>
                            <i class="fa-solid fa-user"></i>
                            <span>Admin</span>
                        </p>
                        <p>
                            <i class="fa-solid fa-calendar"></i>
                            <span> 27 December, 2019</span>
                        </p>
                    </div>
                    <div class="news-description">
                        Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.
                    </div>
                    <a href="#" class="read-more-link">Read more</a>
                </div>
                <div class="news">
                    <a href="#">
                        <img src="{{ asset('assets/images/pomme.jpg') }}" alt="">
                    </a>
                    <h4><a href="#">You will vainly look for fruit on it in autumn.</a></h4>
                    <div class="news-info">
                        <p>
                            <i class="fa-solid fa-user"></i>
                            <span>Admin</span>
                        </p>
                        <p>
                            <i class="fa-solid fa-calendar"></i>
                            <span> 27 December, 2019</span>
                        </p>
                    </div>
                    <div class="news-description">
                        Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.
                    </div>
                    <a href="#" class="read-more-link">Read more</a>
                </div>
                <div class="news">
                    <a href="#">
                        <img src="{{ asset('assets/images/hero-bg.jpg') }}" alt="">
                    </a>
                    <h4><a href="#">A man's worth has its season, like tomato.</a></h4>
                    <div class="news-info">
                        <p>
                            <i class="fa-solid fa-user"></i>
                            <span>Admin</span>
                        </p>
                        <p>
                            <i class="fa-solid fa-calendar"></i>
                            <span> 27 December, 2019</span>
                        </p>
                    </div>
                    <div class="news-description">
                        Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.
                    </div>
                    <a href="#" class="read-more-link">Read more</a>
                </div>
                <div class="news">
                    <a href="#">
                        <img src="{{ asset('assets/images/news/3.jpg') }}" alt="">
                    </a>
                    <h4><a href="#">Good thoughts bear good fresh juicy fruit.</a></h4>
                    <div class="news-info">
                        <p>
                            <i class="fa-solid fa-user"></i>
                            <span>Admin</span>
                        </p>
                        <p>
                            <i class="fa-solid fa-calendar"></i>
                            <span> 27 December, 2019</span>
                        </p>
                    </div>
                    <div class="news-description">
                        Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.
                    </div>
                    <a href="#" class="read-more-link">Read more</a>
                </div>
            </div>
            <div id="more-news-pagination">
                <a href="#" class="pagination-link">
                    Prev
                </a>
                <a href="#" class="pagination-link">
                    1
                </a>
                <a href="#" class="pagination-link active">
                    2
                </a>
                <a href="#" class="pagination-link">
                    3
                </a>
                <a href="#" class="pagination-link">
                    Next
                </a>
            </div>
        </section>
        <section id="patners" class="gray-background-and-padding">
            <div class="caroussel">
                <div class="caroussel-items">
                    <div class="caroussel-item">
                        <img src="{{ asset('assets/images/patners/1.png') }}" alt="" draggable="false">
                    </div>
                    <div class="caroussel-item">
                        <img src="{{ asset('assets/images/patners/2.png') }}" alt="" draggable="false">
                    </div>
                    <div class="caroussel-item">
                        <img src="{{ asset('assets/images/patners/3.png') }}" alt="" draggable="false">
                    </div>
                    <div class="caroussel-item">
                        <img src="{{ asset('assets/images/patners/4.png') }}" alt="" draggable="false">
                    </div>
                    <div class="caroussel-item">
                        <img src="{{ asset('assets/images/patners/5.png') }}" alt="" draggable="false">
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include("partials.footer")
    <script src="{{ asset('assets/js/caroussel.js') }}"></script>
    <script src="{{ asset('assets/js/header_change_background.js') }}"></script>
    <script src="{{ asset('assets/js/modal.js') }}"></script>
    <script src="{{ asset('assets/js/active_link.js') }}"></script>
</body>
</html>
