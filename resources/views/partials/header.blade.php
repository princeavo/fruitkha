<header>
    <img src="{{ asset('assets/images/logo.png') }}" alt="" class="logo">
    <nav>
        <ul>
            <li class="has_submenus">
                <a href="{{ route('home') }}">Home</a>
                <ul class="submenu">
                    <li>
                        <a href="{{ route('home') }}">Static home</a>
                    </li>
                    <li>
                        <a href="#">Slider home</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('about') }}">About</a>
            </li>
            <li class="has_submenus">
                <a href="#">Pages</a>
                <ul class="submenu open">
                    <li>
                        <a href="{{ route('errors.404') }}">404 Page</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('shop.cart') }}">Cart</a>
                    </li>
                    <li>
                        <a href="{{ route('shop.check_out') }}">Check out</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}">News</a>
                    </li>
                    <li>
                        <a href="{{ route('shop') }}">Shop</a>
                    </li>
                </ul>
            </li>
            <li class="has_submenus">
                <a href="{{ route('news') }}">News</a>
                <ul class="submenu">
                    <li>
                        <a href="{{ route('news') }}">News</a>
                    </li>
                    <li>
                        <a href="{{ route('news.single') }}">Single news</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('contact') }}">Conctact</a>
            </li>
            <li class="has_submenus">
                <a href="{{ route('shop') }}">Shop</a>
                <ul class="submenu">
                    <li>
                        <a href="{{ route('shop') }}">Shop</a>
                    </li>
                    <li>
                        <a href="{{ route('shop.check_out') }}">Check out</a>
                    </li>
                    <li>
                        <a href="{{ route('shop.single_product') }}">Single products</a>
                    </li>
                    <li>
                        <a href="{{ route('shop.cart') }}">Cart</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </li>
        </ul>
    </nav>
    <div class="header-group">
        <div class="icons">
            <a href="#">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
            <a href="#" data-role="modal" data-target="#search-modal">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
        <div id="responsive-menu">
            <div class="bar"></div>
        </div>
    </div>
</header>
