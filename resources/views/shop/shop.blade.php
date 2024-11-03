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
    <title>{{ env("APP_NAME") }} | Shop</title>
</head>
<body>
    @include("partials.header")
    <main>
        @include("partials.welcome_section",["sectionSubTitle" => "Fresh and Organic","sectionTitle" => "Shop"])
        <section id="our-products">
            <div class="categories">
                <button class="category active">
                    All
                </button>
                <button class="category">
                    Strawberry
                </button>
                <button class="category">
                    Berry
                </button>
                <button class="category">
                    Lemon
                </button>
            </div>
            <div class="products-container">
                <div class="product-container">
                    <a href="#"><img src="{{ asset('assets/images/products/product-img-1.jpg') }}" alt=""></a>
                    <p class="product-name">Strawberry</p>
                    <p>Per Kg</p>
                    <p class="product-price">85$</p>
                    <a href="#" class="btn-link">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Add to Cart</span>
                    </a>
                </div>
                <div class="product-container">
                    <a href="#">
                        <img src="{{ asset('assets/images/products/product-img-2.jpg') }}" alt="">
                    </a>
                    <p class="product-name">Berry</p>
                    <p>Per Kg</p>
                    <p class="product-price">70$</p>
                    <a href="#" class="btn-link">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Add to Cart</span>
                    </a>
                </div>
                <div class="product-container">
                    <a href="#">
                        <img src="{{ asset('assets/images/products/product-img-3.jpg') }}" alt="">
                    </a>
                    <p class="product-name">Lemon</p>
                    <p>Per Kg</p>
                    <p class="product-price">35$</p>
                    <a href="#" class="btn-link">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Add to Cart</span>
                    </a>
                </div>
                <div class="product-container">
                    <a href="#"><img src="{{ asset('assets/images/products/product-img-4.jpg') }}" alt=""></a>
                    <p class="product-name">Avocado</p>
                    <p>Per Kg</p>
                    <p class="product-price">50$</p>
                    <a href="#" class="btn-link">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Add to Cart</span>
                    </a>
                </div>
                <div class="product-container">
                    <a href="#">
                        <img src="{{ asset('assets/images/products/product-img-5.jpg') }}" alt="">
                    </a>
                    <p class="product-name">Green Apple</p>
                    <p>Per Kg</p>
                    <p class="product-price">45$</p>
                    <a href="#" class="btn-link">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Add to Cart</span>
                    </a>
                </div>
                <div class="product-container">
                    <a href="#">
                        <img src="{{ asset('assets/images/products/product-img-6.jpg') }}" alt="">
                    </a>
                    <p class="product-name">Strawberry</p>
                    <p>Per Kg</p>
                    <p class="product-price">80$</p>
                    <a href="#" class="btn-link">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Add to Cart</span>
                    </a>
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
