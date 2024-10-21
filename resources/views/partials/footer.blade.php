<footer>
    <div>
        <div>
            <h2>About us</h2>
            <p>
                Ut enim ad minim veniam perspiciatis unde omnis iste natus error
                sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                eaque ipsa quae.
            </p>
        </div>
        <div>
            <h2>Get in Touch</h2>
            <span>34/8, East Hukupara, Gifirtok, Sadan.</span>
            <span>support@fruitkha.com</span>
            <span>+00 111 222 3333</span>
        </div>
        <div>
            <h2>Pages</h2>
            <ul>
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Shop</a>
                </li>
                <li>
                    <a href="{{ route('news') }}">News</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <div>
            <h2>Subscribe</h2>
            <p>Subscribe to our mailing list to get the latest updates.</p>
            <form action="#">
                <input type="text" placeholder="Email">
                <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
    <div id="copyrigth">
        <p>Copyrights © {{ date('Y') }} - <a href="{{ route('home') }}" id="author-name">Prince AVOHOU</a>, All Rights Reserved.</p>
        <div class="icons">
            <a href="#">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-linkedin-in"></i>
            </a>
            <a href="#">
                <i class="fab fa-dribbble"></i>
            </a>
        </div>
    </div>
</footer>
