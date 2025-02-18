<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>{{ env("APP_NAME") }} | Home</title>
</head>
<body>
    @include('partials.header')
    <main>
        <section id="welcome-section">
            <div class="welcome-text">
                <h3 class="main-section-sub-title">Fresh & Organic</h3>
                <h1 class="main-section-title">Delicious Seasonal Fruits</h1>
                <div class="btns">
                    <a href="#" class="btn-link">
                        Fruit Collection
                    </a>
                    <a href="#" class="btn-link-outline">
                        Contact Us
                    </a>
                </div>
            </div>
        </section>
        <section id="availability">
            <div class="bloc">
                <div class="icon-box">
                    <i class="fa fa-car"></i>
                </div>
                <div>
                    <h4>Free Shipping</h4>
                    <p>When order over $75</p>
                </div>
            </div>
            <div class="bloc">
                <div class="icon-box">
                    <i class="fa fa-phone"></i>
                </div>
                <div>
                    <h4>24/7 Support</h4>
                    <p>Get support all day</p>
                </div>
            </div>
            <div class="bloc">
                <div class="icon-box">
                    <i class="fa fa-circle"></i>
                </div>
                <div>
                    <h4>Refund</h4>
                    <p>Get refund within 3 days!</p>
                </div>
            </div>
        </section>
        <section id="our-products">
            <h2 class="section-title"><span>Our</span> Products</h2>
            <p class="section-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio
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
        <section id="deal-of-month">
            <div class="left">
                <div class="off">
                    <span class="percent">30%</span>
                    <span>off per kg</span>
                </div>
                <img src="{{ asset('assets/images/deal-of-month.jpg') }}" alt="">
            </div>
            <div class="right">
                <h2><span>Deal</span> of the month</h2>
                <p class="section-subtitle">Hikan Strwaberry</p>
                <p>Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam similique! Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error sit voluptatem accusant</p>
                <div class="days-off">
                    <div class="card">
                        <span class="number">00</span>
                        <span class="motif">Days</span>
                    </div>
                    <div class="card">
                        <span class="number">00</span>
                        <span class="motif">Hours</span>
                    </div>
                    <div class="card">
                        <span class="number">00</span>
                        <span class="motif">Mins</span>
                    </div>
                    <div class="card">
                        <span class="number">00</span>
                        <span class="motif">Secs</span>
                    </div>
                </div>
                <a href="#" class="btn-link">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>Add to Cart</span>
                </a>
            </div>
        </section>
        <section id="testimonial">
            <div class="caroussel">
                <div class="caroussel-items">
                    <div class="caroussel-item">
                        <img src="{{ asset('assets/images/testimonial/avatar1.png') }}" alt="">
                        <h4 class="name">Saïra Hakim</h4>
                        <p class="post">Local shop owner</p>
                        <p class="comment">
                            " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
                        </p>
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="caroussel-item">
                        <img src="{{ asset('assets/images/testimonial/avatar2.png') }}" alt="">
                        <h4 class="name">Saïra Hakim</h4>
                        <p class="post">Local shop owner</p>
                        <p class="comment">
                            " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
                        </p>
                        <i class="fas fa-quote-right"></i>
                    </div>
                    <div class="caroussel-item">
                        <img src="{{ asset('assets/images/testimonial/avatar3.png') }}" alt="">
                        <h4 class="name">Saïra Hakim</h4>
                        <p class="post">Local shop owner</p>
                        <p class="comment">
                            " Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
                        </p>
                        <i class="fas fa-quote-right"></i>
                    </div>
                </div>
            </div>
            <div class="about-us">
                <div>
                    <img src="{{ asset('assets/images/abt.jpg') }}" alt="">
                </div>
                <div class="present">
                    <p class="created_date">
                        Since Year 1999
                    </p>
                    <h2>We are <span>Fruitkha</span></h2>
                    <p class="desc1">
                        Etiam vulputate ut augue vel sodales. In sollicitudin neque et massa porttitor vestibulum ac vel nisi. Vestibulum placerat eget dolor sit amet posuere. In ut dolor aliquet, aliquet sapien sed, interdum velit. Nam eu molestie lorem.
                    </p>
                    <p class="desc2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facilis illo repellat veritatis minus, et labore minima mollitia qui ducimus.
                    </p>
                    <a href="#" class="btn-link">know more</a>
                </div>
            </div>
        </section>
        <section id="sale-off">
            <h2>December sale is on! <br> with big <span>Discount...</span></h2>
            <div class="infos">
                <p>
                    Sale!<br>Upto
                </p>
                <p class="off">50%</p>
                <p>off</p>
            </div>
            <a href="#" class="btn-link">Shop Now</a>
        </section>
        <section id="news">
            <h2 class="section-title"><span>Our</span> news</h2>
            <p class="section-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Aliquid, fuga quas itaque eveniet beatae optio.
            </p>
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
            </div>
            <div id="more-news">
                <a href="#" class="btn-link">
                    More news
                </a>
            </div>
        </section>
        @include("partials.patners")
    </main>
    <div class="modal" id="search-modal">
        <button type="button" class="close-button">
            <i class="fa fa-close"></i>
        </button>
        <form class="modal-body">
            <h2>Search For:</h2>
            <input type="text" name="keyword" placeholder="Keywords">
            <button type="submit" class="btn-link">
                Search <i class="fa fa-search"></i>
            </button>
        </form>
    </div>
    @include('partials.footer')
    <script src="{{ asset('assets/js/caroussel.js') }}"></script>
    <script src="{{ asset('assets/js/header_change_background.js') }}"></script>
    <script src="{{ asset('assets/js/modal.js') }}"></script>
    <script src="{{ asset('assets/js/active_link.js') }}"></script>
</body>
</html>
