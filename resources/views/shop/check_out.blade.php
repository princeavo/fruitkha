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
    <title>{{ env("APP_NAME") }} | Check out</title>
</head>
<body>
    @include("partials.header")
    <main>
        @include("partials.welcome_section",["sectionSubTitle" => "Fresh and Organic","sectionTitle" => "Check Out Product"])
        <section id="checkout-section">
            <div class="accordeon-container">
                <div class="accordeon">
                    <div class="accordeon-title">
                        Billing Adress
                    </div>
                    <div class="accordeon-body">
                        <input type="text" placeholder="Name" name="name">
                        <input type="text" placeholder="Email" name="email">
                        <input type="text" placeholder="Adress" name="adress">
                        <input type="text" placeholder="Phone" name="phone">
                        <textarea type="text" placeholder="Say something" name="something" rows="5"></textarea>
                    </div>
                </div>
                <div class="accordeon">
                    <div class="accordeon-title">
                        Shipping Adress
                    </div>
                    <div class="accordeon-body">
                        Your shipping address form is here.
                    </div>
                </div>
                <div class="accordeon">
                    <div class="accordeon-title">
                        card Détails
                    </div>
                    <div class="accordeon-body">
                        Your card details goes here.
                    </div>
                </div>
            </div>
            <div class="recap">
                <table border="1" class="order-table">
                    <thead>
                        <tr>
                            <td>
                                Your order Details
                            </td>
                            <td>
                                Price
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                product
                            </td>
                            <td>
                                Total
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Strawberry
                            </td>
                            <td>
                                $85.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Berry
                            </td>
                            <td>
                                $70.00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Lemon
                            </td>
                            <td>
                                $35.00
                            </td>
                        </tr>
                        <tr>
                            <td>Subtotal</td>
                            <td>$190</td>
                        </tr>
                        <tr>
                            <td>
                                Shipping
                            </td>
                            <td>
                                $50
                            </td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>$240</td>
                        </tr>
                    </tbody>
                </table>
                <a href="" class="btn-link">Place order</a>
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
    <script src="{{ asset('assets/js/accordeon.js') }}"></script>
</body>
</html>
