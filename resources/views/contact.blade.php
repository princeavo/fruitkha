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
        @include("partials.welcome_section",["sectionSubTitle" => "Get 24/7 Support","sectionTitle" => "Contact us"])
        <section id="contact">
            <div class="contact-form-container">
                <h3>Have you any question?</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore, esse natus!
                </p>
                <form action="#">
                    <div class="group">
                        <input type="text" placeholder="Name" name="name">
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div class="group">
                        <input type="tel" placeholder="Phone" name="phone">
                        <input type="text" placeholder="Subject" name="subject">
                    </div>
                    <div class="group">
                        <textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn-link">
                        Submit
                    </button>
                </form>
            </div>
            <div class="contact-informations">
                <div class="info-group">
                    <i class="fas fa-map"></i>
                    <div>
                        <h4>Shop Address</h4>
                        <p>34/8, East Hukupara</p>
                        <p>Gifirtok, Sadan.</p>
                        <p>Country Name</p>
                    </div>
                </div>
                <div class="info-group">
                    <i class="far fa-clock"></i>
                    <div>
                        <h4>Shop Hours</h4>
                        <p>MON - FRIDAY: 8 to 9 PM</p>
                        <p>SAT - SUN: 10 to 8 PM.</p>
                        <p>Country Name</p>
                    </div>
                </div>
                <div class="info-group">
                    <i class="fas fa-address-book"></i>
                    <div>
                        <h4>Contact</h4>
                        <p>Phone: +00 111 222 3333</p>
                        <p>Gifirtok, Sadan.</p>
                        <p>Email: support@fruitkha.com</p>
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
