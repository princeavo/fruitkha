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
    <title>{{ env("APP_NAME") }} | About</title>
</head>
<body>
    @include("partials.header")
    <main>
        @include("partials.welcome_section",["sectionSubTitle" => "We sale fresh fruits","sectionTitle" => "About Us"])
        <section id="why-us">
            <div>
                <h2>Why <span>Fruitkha</span></h2>
                <div class="raisons">
                    <div class="raison">
                        <div class="illustration">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="details">
                            <h3>Home Delivery</h3>
                            <div class="raison-content">
                                sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.
                            </div>
                        </div>
                    </div>
                    <div class="raison">
                        <div class="illustration">
                            <i class="fas fa-money-bill-alt"></i>
                        </div>
                        <div class="details">
                            <h3>Best Price</h3>
                            <div class="raison-content">
                                sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.
                            </div>
                        </div>
                    </div>
                    <div class="raison">
                        <div class="illustration">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="details">
                            <h3>Custom Box</h3>
                            <div class="raison-content">
                                sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.
                            </div>
                        </div>
                    </div>
                    <div class="raison">
                        <div class="illustration">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <div class="details">
                            <h3>Quick Refund</h3>
                            <div class="raison-content">
                                sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image">

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
        <section id="our-team">
            <h2 class="section-title"><span>Our</span> Team</h2>
            <p class="section-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.
            </p>
            <div class="team-members">
                <div class="team-member team-member-1">
                    <div class="team-member-photo">
                        <div class="team-member-social-links">
                            <a href="#" class="link">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="link">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" class="link">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="infos">
                        <p class="team-member-full-name">
                            Jimmy Doe
                        </p>
                        <p class="post">
                            Farmer
                        </p>
                    </div>
                </div>
                <div class="team-member team-member-2">
                    <div class="team-member-photo">
                        <div class="team-member-social-links">
                            <a href="#" class="link">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="link">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" class="link">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="infos">
                        <p class="team-member-full-name">
                            Jimmy Doe
                        </p>
                        <p class="post">
                            Farmer
                        </p>
                    </div>
                </div>
                <div class="team-member team-member-3">
                    <div class="team-member-photo">
                        <div class="team-member-social-links">
                            <a href="#" class="link">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="link">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" class="link">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="infos">
                        <p class="team-member-full-name">
                            Jimmy Doe
                        </p>
                        <p class="post">
                            Farmer
                        </p>
                    </div>
                </div>
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
