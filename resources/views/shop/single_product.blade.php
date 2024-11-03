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
    <title>{{ env("APP_NAME") }} | Single Product</title>
</head>
<body>
    @include("partials.header")
    <main>
        @include("partials.welcome_section",["sectionSubTitle" => "See more Details","sectionTitle" => "Single Product"])
        <section id="signe-product-presentation">
            <div class="image-product-container">
                <img src="{{ asset('assets/images/products/product-img-5.jpg') }}" alt="">
            </div>
            <div class="product-informations">
                <h3 class="product-name">Green apples have polyphenols</h3>
                <p class="price-unit">Per Kg</p>
                <p class="product-price">$50</p>
                <div class="more">
                    <p class="product-description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta sint dignissimos, rem commodi cum voluptatem quae reprehenderit repudiandae ea tempora incidunt ipsa, quisquam animi perferendis eos eum modi! Tempora, earum.
                    </p>
                    <input type="number" name="nombre" placeholder="0" class="custom-numeric-input">
                    <a href="#" class="btn-link">
                        <i class="fa fa-chart"></i>
                        <span>Add to Cart</span>
                    </a>
                    <p class="categories"><strong>Categories: </strong>Fruits, Organic</p>
                </div>
                <div class="share-infos">
                    <h4>Share :</h4>
                    <div class="socials-links">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-google-plus"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-products">
            <h2 class="section-title"><span>Related</span> Products</h2>
            <p class="section-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.
            </p>
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
