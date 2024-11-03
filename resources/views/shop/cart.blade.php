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
    <title>{{ env("APP_NAME") }} | Cart</title>
</head>
<body>
    @include("partials.header")
    <main>
        @include("partials.welcome_section",["sectionSubTitle" => "Fresh and Organic","sectionTitle" => "Cart"])
        <section id="cart">
            <div class="order-recap">
                <table border="1" class="order-table">
                    <thead>
                        <tr>
                            <td>

                            </td>
                            <td class="large">
                                Product image
                            </td>
                            <td>
                                Name
                            </td>
                            <td>
                                Price
                            </td>
                            <td>
                                Quantity
                            </td>
                            <td>
                                Total
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#">
                                    <i class="far fa-window-close"></i>
                                </a>
                            </td>
                            <td class="center">
                                <img src="{{ asset('assets/images/products/product-img-1.jpg') }}" alt="">
                            </td>
                            <td>
                                Strawberry
                            </td>
                            <td>
                                $85
                            </td>
                            <td>
                                <input type="number" name="quantity" class="custom-numeric-input">
                            </td>
                            <td>
                                1
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">
                                    <i class="far fa-window-close"></i>
                                </a>
                            </td>
                            <td class="center">
                                <img src="{{ asset('assets/images/products/product-img-2.jpg') }}" alt="">
                            </td>
                            <td>
                                Berry
                            </td>
                            <td>
                                $70
                            </td>
                            <td>
                                <input type="number" name="quantity" class="custom-numeric-input">
                            </td>
                            <td>
                                1
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">
                                    <i class="far fa-window-close"></i>
                                </a>
                            </td>
                            <td class="center">
                                <img src="{{ asset('assets/images/products/product-img-3.jpg') }}" alt="">
                            </td>
                            <td>
                                Lemon
                            </td>
                            <td>
                                $35
                            </td>
                            <td>
                                <input type="number" name="quantity" class="custom-numeric-input">
                            </td>
                            <td>
                                1
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="order-total">
                <table border="1" class="order-table">
                    <thead>
                        <tr>
                            <td class="large">Total</td>
                            <td>Price</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Subtotal: </th>
                            <td>$500</td>
                        </tr>
                        <tr>
                            <th>Shipping: </th>
                            <td>$45</td>
                        </tr>
                        <tr>
                            <th>Total: </th>
                            <td>$545</td>
                        </tr>
                    </tbody>
                </table>
                <div class="buttons">
                    <a href="#" class="btn-link">Update Cart</a>
                    <a href="#" class="btn-link">Check Out</a>
                </div>
                <form class="apply-coupon">
                    <h3>Apply Coupon</h3>
                    <input type="text" name="coupon" placeholder="Coupon">
                    <button type="submit" class="btn-link">Apply</button>
                </form>
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
