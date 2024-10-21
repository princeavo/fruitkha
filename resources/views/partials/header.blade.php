<header>
    <img src="{{ asset('assets/images/logo.png') }}" alt="" class="logo">
    <nav>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Pages</a>
            </li>
            <li>
                <a href="{{ route('news') }}">News</a>
            </li>
            <li>
                <a href="#">Conctact</a>
            </li>
            <li><a href="#">Shop</a></li>
        </ul>
    </nav>
    <div class="icons">
        <a href="#">
            <i class="fa-solid fa-cart-shopping"></i>
        </a>
        <a href="#" data-role="modal" data-target="#search-modal">
            <i class="fa-solid fa-magnifying-glass"></i>
        </a>
    </div>
</header>
