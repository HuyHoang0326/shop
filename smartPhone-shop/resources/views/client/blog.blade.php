@extends('client.layout')
@section('content')
<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/antomi/antomi/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Nov 2022 06:48:23 GMT -->

<body>
    <!--Offcanvas menu area end-->
    <!--header area start-->
   
    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <div class="blog_bg_area">
        <div class="container">
            <!--blog area start-->
            <div class="blog_page_section">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="blog_wrapper mb-60">
                            <div class="blog_header">
                                <h1>Blog</h1>
                            </div>
                            <div class="blog_wrapper_inner">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/blogpage1.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="{{ route('blogfull') }}">Blog image post
                                                    (sticky)</a></h4>
                                            <div class="blog_meta">
                                                <span class="author">Posted by : <a href="#">admin</a> / </span>
                                                <span class="meta_date">Posted on : <a href="#">June 22, 2019</a></span>
                                            </div>
                                            <div class="blog_desc">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu
                                                    ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent
                                                    ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra,
                                                    bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis
                                                    ligula in, finibus tortor. Mauris perferendis officia, nihil
                                                    molestiae!</p>
                                            </div>
                                            <footer class="btn_more">
                                                <a href="{{ route('blogfull') }}"> Read more</a>
                                            </footer>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_blog single_blog_gallery">
                                    <figure>
                                        <div class="blog_thumb blog_thumb_active owl-carousel">
                                            <div class="single_blog_thumb">
                                                <a href="#"><img src="{{ asset('img/blog/blogpage2.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="single_blog_thumb">
                                                <a href="#"><img src="{{ asset('img/blog/blogpage1.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="single_blog_thumb">
                                                <a href="#"><img src="{{ asset('img/blog/blogpage3.jpg') }}" alt=""></a>
                                            </div>
                                            <div class="single_blog_thumb">
                                                <a href="#"><img src="{{ asset('img/blog/blogpage4.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="{{ route('blogfull') }}">Post with Gallery</a>
                                            </h4>
                                            <div class="blog_meta">
                                                <span class="author">Posted by : <a href="#">admin</a> / </span>
                                                <span class="meta_date">Posted on : <a href="#">June 22, 2019</a></span>
                                            </div>
                                            <div class="blog_desc">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu
                                                    ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent
                                                    ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra,
                                                    bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis
                                                    ligula in, finibus tortor. Mauris perferendis officia, nihil
                                                    molestiae!</p>
                                            </div>
                                            <footer class="btn_more">
                                                <a href="{{ route('blogfull') }}"> Read more</a>
                                            </footer>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/blogpage3.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="{{ route('blogfull') }}">Post with Audio</a></h4>
                                            <div class="blog_meta">
                                                <span class="author">Posted by : <a href="#">admin</a> / </span>
                                                <span class="meta_date">Posted on : <a href="#">June 22, 2019</a></span>
                                            </div>
                                            <div class="blog_aduio_icone">
                                                <audio controls>
                                                    <source
                                                        src="https://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3?1"
                                                        type="audio/mp3">
                                                </audio>
                                            </div>
                                            <div class="blog_desc">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu
                                                    ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent
                                                    ornare tortor ac ante egestas hendrerit. Aliquam et is </p>
                                            </div>
                                            <footer class="btn_more">
                                                <a href="{{ route('blogfull') }}"> Read more</a>
                                            </footer>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_blog blog_bidio">
                                    <figure>
                                        <div class="blog_thumb">
                                            <iframe src="https://www.youtube.com/embed/2Zt8va_6HRk"
                                                allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="{{ route('blogfull') }}">Post with Video</a></h4>
                                            <div class="blog_meta">
                                                <span class="author">Posted by : <a href="#">admin</a> / </span>
                                                <span class="meta_date">Posted on : <a href="#">June 22, 2019</a></span>
                                            </div>
                                            <div class="blog_desc">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu
                                                    ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent
                                                    ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra,
                                                    bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis
                                                    ligula in, finibus tortor. Mauris perferendis officia, nihil
                                                    molestiae!</p>
                                            </div>
                                            <footer class="btn_more">
                                                <a href="{{ route('blogfull') }}"> Read more</a>
                                            </footer>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/blogpage4.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="{{ route('blogfull') }}">Maecenas ultricies</a>
                                            </h4>
                                            <div class="blog_meta">
                                                <span class="author">Posted by : <a href="#">admin</a> / </span>
                                                <span class="meta_date">Posted on : <a href="#">June 22, 2019</a></span>
                                            </div>
                                            <div class="blog_desc">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu
                                                    ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent
                                                    ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra,
                                                    bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis
                                                    ligula in, finibus tortor. Mauris perferendis officia, nihil
                                                    molestiae!</p>
                                            </div>
                                            <footer class="btn_more">
                                                <a href="{{ route('blogfull') }}"> Read more</a>
                                            </footer>
                                        </figcaption>
                                    </figure>
                                </article>
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/blogpage5.jpg') }}"
                                                    alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                            <h4 class="post_title"><a href="{{ route('blogfull') }}">Praesent imperdiet</a>
                                            </h4>
                                            <div class="blog_meta">
                                                <span class="author">Posted by : <a href="#">admin</a> / </span>
                                                <span class="meta_date">Posted on : <a href="#">June 22, 2019</a></span>
                                            </div>
                                            <div class="blog_desc">
                                                <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu
                                                    ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent
                                                    ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra,
                                                    bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis
                                                    ligula in, finibus tortor. Mauris perferendis officia, nihil
                                                    molestiae!</p>
                                            </div>
                                            <footer class="btn_more">
                                                <a href="{{ route('blogfull') }}"> Read more</a>
                                            </footer>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        </div>
                        <!--blog pagination area start-->
                        <div class="blog_pagination">
                            <div class="pagination">
                                <ul>
                                    <li class="current">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li class="next"><a href="#">next</a></li>
                                    <li><a href="#">>></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--blog pagination area end-->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="blog_sidebar_widget">
                            <div class="widget_list widget_search">
                                <div class="widget_title">
                                    <h3>Search</h3>
                                </div>
                                <form action="#">
                                    <input placeholder="Search..." type="text">
                                    <button type="submit">search</button>
                                </form>
                            </div>
                            <div class="widget_list comments">
                                <div class="widget_title">
                                    <h3>Recent Comments</h3>
                                </div>
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/comment2.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <span> <a href="#">demo</a> says:</span>
                                        <a href="{{ route('blogfull') }}">Quisque semper nunc</a>
                                    </div>
                                </div>
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/comment2.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <span><a href="#">admin</a> says:</span>
                                        <a href="{{ route('blogfull') }}">Quisque orci porta...</a>
                                    </div>
                                </div>
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/comment2.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <span><a href="#">demo</a> says:</span>
                                        <a href="{{ route('blogfull') }}">Quisque semper nunc</a>
                                    </div>
                                </div>
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/comment2.png') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <span><a href="#">admin</a> says:</span>
                                        <a href="{{ route('blogfull') }}">Quisque semper nunc</a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget_list widget_post">
                                <div class="widget_title">
                                    <h3>Recent Posts</h3>
                                </div>
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/blog6.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <h4><a href="{{ route('blogfull') }}">Blog image post</a></h4>
                                        <span>March 16, 2018 </span>
                                    </div>
                                </div>
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/blog7.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <h4><a href="{{ route('blogfull') }}">Post with Gallery</a></h4>
                                        <span>March 16, 2018 </span>
                                    </div>
                                </div>
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/blog8.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <h4><a href="{{ route('blogfull') }}">Post with Audio</a></h4>
                                        <span>March 16, 2018 </span>
                                    </div>
                                </div>
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="{{ route('blogfull') }}"><img src="{{ asset('img/blog/blog9.jpg') }}" alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <h4><a href="{{ route('blogfull') }}">Post with Video</a></h4>
                                        <span>March 16, 2018 </span>
                                    </div>
                                </div>
                            </div>
                            <div class="widget_list widget_categories">
                                <div class="widget_title">
                                    <h3>Categories</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Audio</a></li>
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Image</a></li>
                                    <li><a href="#">Other</a></li>
                                    <li><a href="#">Travel</a></li>
                                </ul>
                            </div>
                            <div class="widget_list widget_tag">
                                <div class="widget_title">
                                    <h3>Tag products</h3>
                                </div>
                                <div class="tag_widget">
                                    <ul>
                                        <li><a href="#">asian</a></li>
                                        <li><a href="#">brown</a></li>
                                        <li><a href="#">euro</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--blog area end-->


        </div>
    </div>

    <!--footer area start-->
    <footer class="footer_widgets">
        <!--newsletter area start-->
        <div class="newsletter_area">
            <div class="container">
                <div class="newsletter_inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-5">
                            <div class="newsletter_sing_up">
                                <h3>Newsletter Sign Up</h3>
                                <p>(Get <span>30% OFF</span> coupon today subscibers)</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7">
                            <div class="subscribe_content">
                                <p><strong>Join 226.000+ subscribers</strong> and get a new discount coupon on every
                                    Monday.</p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter">
                                    <input id="mc-email" type="email" autocomplete="off"
                                        placeholder="Your email address..." />
                                    <button id="mc-submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--newsletter area end-->
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <div class="widgets_container contact_us">
                            <h3>GET THE APP</h3>
                            <div class="aff_content">
                                <p><strong>ANTOMI</strong> App is now available on Google Play & App Store. Get it now.
                                </p>
                            </div>
                            <div class="app_img">
                                <figure class="app_img">
                                    <a href="#"><img src="{{ asset('img/icon/icon-appstore.png') }}" alt=""></a>
                                </figure>
                                <figure class="app_img">
                                    <a href="#"><img src="{{ asset('img/icon/icon-googleplay.png') }}" alt=""></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">New products</a></li>
                                    <li><a href="#">Best sales</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>My Account</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="#">Prices drop</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">International Orders</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <div class="widgets_container widget_menu">
                            <h3>Customer Service</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Sitemap</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="wishlist.html">Wish List</a></li>
                                    <li><a href="#">Specials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-7 col-sm-12">
                        <div class="widgets_container">
                            <h3>CONTACT INFO</h3>
                            <div class="footer_contact">
                                <div class="footer_contact_inner">
                                    <div class="contact_icone">
                                        <img src="{{ asset('img/icon/icon-phone.png') }} alt="">
                                    </div>
                                    <div class="contact_text">
                                        <p>Hotline Free 24/24: <br> <strong>0123456789</strong></p>
                                    </div>
                                </div>
                                <p>Your address goes here. <br> demo@example.com</p>
                            </div>

                            <div class="footer_social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>&copy; 2021 <a href="index.html" class="text-uppercase">ANTOMI</a>. Made with <i
                                    class="fa fa-heart"></i> by <a target="_blank"
                                    href="https://www.hasthemes.com/">HasThemes</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment text-right">
                            <img src="{{ asset('img/icon/payment.png') }} alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->

    <!-- JS
============================================ -->

 


</body>


<!-- Mirrored from htmldemo.net/antomi/antomi/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Nov 2022 06:48:25 GMT -->
</html>
@endsection