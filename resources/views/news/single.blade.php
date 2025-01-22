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
    <title>{{ env("APP_NAME") }} | News</title>
</head>
<body>
    @include("partials.header")
    <main>
        @include("partials.welcome_section",["sectionSubTitle" => "Read the Details","sectionTitle" => "Single Article"])
        <section id="news-single">
            <div class="article-presentation">
                <div class="article-cover-img-container">
                </div>
                <div class="article-meta-data">
                    <div class="article-author">
                        <i class="fa fa-user"></i>
                        <span>Admin</span>
                    </div>
                    <div class="article-published-date">
                        <i class="fa fa-calendar"></i>
                        <span>27 December, 2019</span>
                    </div>
                </div>
                <h2 class="article-text">Pomegranate can prevent heart disease</h2>
                <p class="article-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint soluta, similique quidem fuga vel voluptates amet doloremque corrupti. Perferendis totam voluptates eius error fuga cupiditate dolorum? Adipisci mollitia quod labore aut natus nobis. Rerum perferendis, nobis hic adipisci vel inventore facilis rem illo, tenetur ipsa voluptate dolorem, cupiditate temporibus laudantium quidem recusandae expedita dicta cum eum. Quae laborum repellat a ut, voluptatum ipsa eum. Culpa fugiat minus laborum quia nam!

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, praesentium, dicta. Dolorum inventore molestias velit possimus, dolore labore aliquam aperiam architecto quo reprehenderit excepturi ipsum ipsam accusantium nobis ducimus laudantium.

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum est aperiam voluptatum id cupiditate quae corporis ex. Molestias modi mollitia neque magni voluptatum, omnis repudiandae aliquam quae veniam error! Eligendi distinctio, ab eius iure atque ducimus id deleniti, vel alias sint similique perspiciatis saepe necessitatibus non eveniet, quo nisi soluta.

                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt beatae nemo quaerat, doloribus obcaecati odio!
                </p>
                <div class="comments-section">
                    <h2>3 Comments</h2>
                    <div class="comments">
                        <div class="comment">
                            <img src="{{ asset('assets/images/news/avatar1.png') }}" class="comment-image" alt="">
                            <div class="comment-details">
                                <div class="info">
                                    <h4 class="reactor-name">Jenny Joe</h4>
                                    <span class="published_date">Aprl 26, 2020</span>
                                    <a href="#" class="reply_comment_btn">Reply</a>
                                </div>
                                <div class="comment_content">
                                    Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.
                                </div>
                                <div class="comment-replies">
                                    <div class="comment">
                                        <img src="{{ asset('assets/images/news/avatar3.png') }}" class="comment-image" alt="">
                                        <div class="comment-details">
                                            <div class="info">
                                                <h4 class="reactor-name">Simon Soe</h4>
                                                <span class="published_date">Aprl 27, 2020</span>
                                                <a href="#" class="reply_comment_btn">Reply</a>
                                            </div>
                                            <div class="comment_content">
                                                Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment">
                            <img src="{{ asset('assets/images/news/avatar2.png') }}" class="comment-image" alt="">
                            <div class="comment-details">
                                <div class="info">
                                    <h4 class="reactor-name">Addy Aoe</h4>
                                    <span class="published_date">May 12, 2020</span>
                                    <a href="#" class="reply_comment_btn">Reply</a>
                                </div>
                                <div class="comment_content">
                                    Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.
                                </div>
                                <div class="comment-replies">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-comment-section">
                    <h2>Leave a comment</h2>
                    <p>If you have a comment dont feel hesitate to send us your opinion.</p>
                    <form action="#">
                        <div class="input-group">
                            <input type="text" name="your_name" placeholder="Your Name" class="half">
                            <input type="email" name="your_email" placeholder="Your Email" class="half">
                        </div>
                        <textarea name="your_message" cols="30" rows="10" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn-link">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
            <div class="recent-achives-posts-and-tags">
                <div class="recent-posts">
                    <h2>Recent Posts</h2>
                    <ul class="custom-style-type-list">
                        <li><a href="#">You will vainly look for fruit on it in autumn.</a></li>
                        <li><a href="#">A man's worth has its season, like tomato.</a></li>
                        <li><a href="#">Good thoughts bear good fresh juicy fruit.</a></li>
                        <li><a href="#">Fall in love with the fresh orange</a></li>
                        <li><a href="#">Why the berries always look delecious</a></li>
                    </ul>
                </div>
                <div class="achives-posts top-margin">
                    <h2>Archive Posts</h2>
                    <ul class="custom-style-type-list">
                        <li><a href="#">JAN 2019 (5)</a></li>
                        <li><a href="#">FEB 2019 (3)</a></li>
                        <li><a href="#">MAY 2019 (4)</a></li>
                        <li><a href="#">SEP 2019 (4)</a></li>
                        <li><a href="#">DEC 2019 (3)</a></li>
                    </ul>
                </div>
                <div class="tags-subsection top-margin">
                    <h2>Tags</h2>
                    <div class="tags">
                        <a href="#" class="tag-link">
                            Apple
                        </a>
                        <a href="#" class="tag-link">
                            Strawberry
                        </a>
                        <a href="#" class="tag-link">
                            BErry
                        </a>
                        <a href="#" class="tag-link">
                            Orange
                        </a>
                        <a href="#" class="tag-link">
                            Lemon
                        </a>
                        <a href="#" class="tag-link">
                            Banana
                        </a>
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
