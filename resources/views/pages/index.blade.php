@extends('layouts.app')

@section('content')
<section class="hero-slider hero-style-1">
    <div class="hero-slider-active owl-carousel">
        <div class="single-slide" style="background-image: url('assets/img/home1/hero1.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="slide-contents text-white">
                            <div class="sub-title">
                                <h4><strong>Our Mission:</strong> Food, Education, Medicine</h4>
                            </div>
                            <h1 class="fs-lg">We’re On A Mission To Change That</h1>
                            <a href="causes.html" class="theme-btn">View Causes</a>
                            <a href="donation.html" class="theme-btn no-fil">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- single-slide end -->
        <div class="single-slide" style="background-image: url('assets/img/slide2.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="slide-contents text-white">
                            <div class="sub-title">
                                <h4><strong>Our Mission:</strong> Food, Education, Medicine</h4>
                            </div>
                            <h1 class="fs-lg">More charity. Make More better life.</h1>
                            <a href="events.html" class="theme-btn">View Events</a>
                            <a href="donation.html" class="theme-btn no-fil">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- single-slide end -->
        <div class="single-slide" style="background-image: url('assets/img/slide4.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="slide-contents text-white">
                            <div class="sub-title">
                                <h4><strong>Our Mission:</strong> Food, Education, Medicine</h4>
                            </div>
                            <h1 class="fs-lg">We’re On A Mission To Change That</h1>
                            <a href="causes.html" class="theme-btn">View Causes</a>
                            <a href="donation.html" class="theme-btn no-fil">Donate Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- single-slide end -->
    </div>
</section>

<section class="promo-section promo-box-items text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="support-promo-box text-white">
                    <div class="promo-bg bg-cover" style="background-image: url('assets/img/home1/support_girl.jpg')">
                    </div>
                    <div class="promo-details">
                        <span>Trending Cause</span>
                        <h2><a href="donation.html">Make A Support</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="checkout-promo-box text-white">
                    <div class="icon">
                        <img src="assets/img/home1/support_icon.png" alt="">
                    </div>
                    <span>Support Us</span>
                    <h2>Explore Causes</h2>
                    <a href="causes.html" class="theme-btn black">Check It Out</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="subscribe-promo-box text-white">
                    <div class="icon">
                        <img src="assets/img/home1/envalope.png" alt="">
                    </div>
                    <span>Subscribe</span>
                    <h2>Get Updates</h2>

                    <form action="#" class="mailchimp-form">
                        <input type="email" placeholder="Enter email address">
                        <button type="submit"><i class="fal fa-envelope"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us-section section-padding pt-235 overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-shots">
                    <div class="about-top-img bg-cover"
                        style="background-image: url('assets/img/home1/about_woman.jpg')"></div>
                    <div class="about-main-img">
                        <img src="assets/img/home1/about_girl.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="our-experience text-white d-none d-sm-block">
                        <h1>32</h1>
                        <span>Years Of Experience</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 about_left_content pr-lg-0 pl-lg-5">
                <div class="section-title">
                    <span><i class="fal fa-heart"></i>About Us</span>
                    <h1>We’ve Funded <span>44k</span> Dollars Over</h1>
                </div>
                <p>Your $40.00 monthly donation can give 12 people clean water every year. 100% funds water
                    projects. We have plenty of water to drink even.</p>

                <ul class="checked-list ml-80 mt-30">
                    <li>A place in history</li>
                    <li>It’s about impact, goodness</li>
                    <li>More goodness in the world</li>
                    <li>The world we live in right now<br />can be hard</li>
                </ul>

                <a href="about.html" class="theme-btn minimal-btn ml-80 mt-35">Learn More</a>
            </div>
        </div>
    </div>
</section>

<section class="cause-section section-padding section-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2 text-center">
                <div class="section-title mb-40">
                    <span><i class="fal fa-heart"></i>Trending Cause</span>
                    <h1>It’s About Impact, <span>Good</span> History</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="single-cause-item style-1">
                    <div class="cause-bg bg-cover" style="background-image: url('assets/img/home1/cause5.jpg');">
                    </div>
                    <div class="cause-content">
                        <div class="cause-meta">
                            <a href="causes.html" class="cause-cat">food</a>
                            <a href="#" class="cause-author"><i class="fal fa-user"></i>By Miranda H.</a>
                        </div>
                        <h4><a href="cause-details.html">Emergency response and school food</a></h4>
                        <div class="goal-progress-wrap">
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" role="progressbar" style="width:70%"></div>
                            </div>
                        </div>
                        <div class="cause-amount d-flex justify-content-between">
                            <div class="price-raised">
                                <i class="fal fa-heart"></i><span>70</span> Raised
                            </div>
                            <div class="price-goal">
                                <i class="far fa-analytics"></i><span>$3000</span> Goal
                            </div>
                            <div class="read-cause-link">
                                <a href="cause-details.html"><i class="fal fa-share"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.single-cause-item  -->
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single-cause-item style-1">
                    <div class="cause-bg bg-cover" style="background-image: url('assets/img/home1/cause7.jpg');">
                    </div>
                    <div class="cause-content">
                        <div class="cause-meta">
                            <a href="causes.html" class="cause-cat">Health</a>
                            <a href="#" class="cause-author"><i class="fal fa-user"></i>By Miranda H.</a>
                        </div>
                        <h4><a href="cause-details.html">People Health response and Village mans</a></h4>
                        <div class="goal-progress-wrap">
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" role="progressbar" style="width:70%"></div>
                            </div>
                        </div>
                        <div class="cause-amount d-flex justify-content-between">
                            <div class="price-raised">
                                <i class="fal fa-heart"></i><span>14</span> Raised
                            </div>
                            <div class="price-goal">
                                <i class="far fa-analytics"></i><span>$7000</span> Goal
                            </div>
                            <div class="read-cause-link">
                                <a href="cause-details.html"><i class="fal fa-share"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.single-cause-item  -->
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single-cause-item style-1">
                    <div class="cause-bg bg-cover" style="background-image: url('assets/img/home1/cause3.jpg');">
                    </div>
                    <div class="cause-content">
                        <div class="cause-meta">
                            <a href="causes.html" class="cause-cat">water</a>
                            <a href="#" class="cause-author"><i class="fal fa-user"></i>By Miranda H.</a>
                        </div>
                        <h4><a href="cause-details.html">Because Everyone Deserves Clean Water</a></h4>
                        <div class="goal-progress-wrap">
                            <div class="progress">
                                <div class="progress-bar wow fadeInLeft" role="progressbar" style="width:50%"></div>
                            </div>
                        </div>
                        <div class="cause-amount d-flex justify-content-between">
                            <div class="price-raised">
                                <i class="fal fa-heart"></i><span>50</span> Raised
                            </div>
                            <div class="price-goal">
                                <i class="far fa-analytics"></i><span>$5000</span> Goal
                            </div>
                            <div class="read-cause-link">
                                <a href="cause-details.html"><i class="fal fa-share"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.single-cause-item  -->
            </div>
        </div>

    </div>
</section>

<section class="cta-section theme-bg text-white section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-4 pr-xl-0">
                <div class="section-title">
                    <span><i class="fal fa-heart"></i>Call To Action</span>
                    <h1>Give Your Big Hand Forever</h1>
                </div>
            </div>
            <div class="col-xl-8 mt-5 mt-xl-0">
                <div class="cta-subscribe-form">
                    <form action="#" class="row">
                        <div class="col-md-6 pr-5i">
                            <div class="single-input">
                                <input type="text" placeholder="Enter your name" required>
                                <span class="fal fa-user"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-input">
                                <input type="text" placeholder="Enter phone number" required>
                                <span class="fal fa-phone"></span>
                            </div>
                        </div>
                        <div class="col-md-4 pr-5i">
                            <div class="single-input">
                                <input type="text" placeholder="Enter address" required>
                                <span class="far fa-map-marker-alt"></span>
                            </div>
                        </div>
                        <div class="col-md-4 pr-5i">
                            <div class="single-input">
                                <input type="text" placeholder="Zip Code">
                                <span class="fal fa-map"></span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-input">
                                <button type="submit">Get Involed Today</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="event-section event-carousel text-white">
    <div class="event-carousel-active owl-carousel">
        <div class="single-event-item bg-cover" style="background-image: url('assets/img/event/1.jpg')">
            <div class="event-details">
                <div class="event-date">
                    <span>23</span>Nov
                </div>
                <div class="event-title">
                    <a href="events.html" class="event-cat">School</a>
                    <h4><a href="event-details.html">Mission Intensive Training School</a></h4>
                </div>
            </div>
            <div class="event-hover d-flex">
                <div class="event-time">
                    <i class="fal fa-clock"></i>10:00 - 08:00
                </div>
                <div class="event-author">
                    <i class="fal fa-user"></i>Miranda Halim
                </div>
            </div>
        </div> <!-- ./single-event-item -->
        <div class="single-event-item bg-cover" style="background-image: url('assets/img/event/2.jpg')">
            <div class="event-details">
                <div class="event-date">
                    <span>30</span>Nov
                </div>
                <div class="event-title">
                    <a href="events.html" class="event-cat">Leadership</a>
                    <h4><a href="event-details.html">Temple and Family History Leadership</a></h4>
                </div>
            </div>
            <div class="event-hover d-flex">
                <div class="event-time">
                    <i class="fal fa-clock"></i>10:00 - 08:00
                </div>
                <div class="event-author">
                    <i class="fal fa-user"></i>Miranda Halim
                </div>
            </div>
        </div> <!-- ./single-event-item -->
        <div class="single-event-item bg-cover" style="background-image: url('assets/img/event/3.jpg')">
            <div class="event-details">
                <div class="event-date">
                    <span>30</span>Nov
                </div>
                <div class="event-title">
                    <a href="events.html" class="event-cat">Water Day</a>
                    <h4><a href="event-details.html">Need To Playing For This Worlds</a></h4>
                </div>
            </div>
            <div class="event-hover d-flex">
                <div class="event-time">
                    <i class="fal fa-clock"></i>10:00 - 08:00
                </div>
                <div class="event-author">
                    <i class="fal fa-user"></i>Miranda Halim
                </div>
            </div>
        </div> <!-- ./single-event-item -->
        <div class="single-event-item bg-cover" style="background-image: url('assets/img/event/4.jpg')">
            <div class="event-details">
                <div class="event-date">
                    <span>30</span>Nov
                </div>
                <div class="event-title">
                    <a href="events.html" class="event-cat">Water Day</a>
                    <h4><a href="event-details.html">Sports & Fitness – Stretch & Pray</a></h4>
                </div>
            </div>
            <div class="event-hover d-flex">
                <div class="event-time">
                    <i class="fal fa-clock"></i>11:00 - 08:00
                </div>
                <div class="event-author">
                    <i class="fal fa-user"></i>Miranda Khan
                </div>
            </div>
        </div> <!-- ./single-event-item -->
        <div class="single-event-item bg-cover" style="background-image: url('assets/img/event/5.jpg')">
            <div class="event-details">
                <div class="event-date">
                    <span>30</span>Jan
                </div>
                <div class="event-title">
                    <a href="events.html" class="event-cat">Nature Day</a>
                    <h4><a href="event-details.html">Need To Save The Nature</a></h4>
                </div>
            </div>
            <div class="event-hover d-flex">
                <div class="event-time">
                    <i class="fal fa-clock"></i>10:00 - 08:00
                </div>
                <div class="event-author">
                    <i class="fal fa-user"></i>Salman Ahmed
                </div>
            </div>
        </div> <!-- ./single-event-item -->
        <div class="single-event-item bg-cover" style="background-image: url('assets/img/blog/p5.jpg')">
            <div class="event-details">
                <div class="event-date">
                    <span>12</span>Dec
                </div>
                <div class="event-title">
                    <a href="events.html" class="event-cat">Water Day</a>
                    <h4><a href="event-details.html">Need To Playing For This Worlds</a></h4>
                </div>
            </div>
            <div class="event-hover d-flex">
                <div class="event-time">
                    <i class="fal fa-clock"></i>10:00 - 08:00
                </div>
                <div class="event-author">
                    <i class="fal fa-user"></i>Miranda Halim
                </div>
            </div>
        </div> <!-- ./single-event-item -->
        <div class="single-event-item bg-cover" style="background-image: url('assets/img/blog/p2.jpg')">
            <div class="event-details">
                <div class="event-date">
                    <span>22</span>Feb
                </div>
                <div class="event-title">
                    <a href="events.html" class="event-cat">Lorem Day</a>
                    <h4><a href="events.html">Lorem ipsum dolor sit consectetur</a></h4>
                </div>
            </div>
            <div class="event-hover d-flex">
                <div class="event-time">
                    <i class="fal fa-clock"></i>10:00 - 08:00
                </div>
                <div class="event-author">
                    <i class="fal fa-user"></i>Salman Ahmed
                </div>
            </div>
        </div> <!-- ./single-event-item -->
        <div class="single-event-item bg-cover" style="background-image: url('assets/img/event/4.jpg')">
            <div class="event-details">
                <div class="event-date">
                    <span>11</span>July
                </div>
                <div class="event-title">
                    <a href="events.html" class="event-cat">help</a>
                    <h4><a href="event-details.html">Help For This Worlds</a></h4>
                </div>
            </div>
            <div class="event-hover d-flex">
                <div class="event-time">
                    <i class="fal fa-clock"></i>10:00 - 08:00
                </div>
                <div class="event-author">
                    <i class="fal fa-user"></i>Miranda Halim
                </div>
            </div>
        </div> <!-- ./single-event-item -->
        <div class="single-event-item bg-cover" style="background-image: url('assets/img/blog/p1.jpg')">
            <div class="event-details">
                <div class="event-date">
                    <span>02</span>May
                </div>
                <div class="event-title">
                    <a href="events.html" class="event-cat">Nature Day</a>
                    <h4><a href="event-details.html">Need To Save The Nature</a></h4>
                </div>
            </div>
            <div class="event-hover d-flex">
                <div class="event-time">
                    <i class="fal fa-clock"></i>13:00 - 18:00
                </div>
                <div class="event-author">
                    <i class="fal fa-user"></i>Nourin Halim
                </div>
            </div>
        </div> <!-- ./single-event-item -->
    </div>
</section>

<section class="block-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 mb-5 mb-lg-0 pr-lg-0">
                <div class="block-img">
                    <img src="assets/img/block-img.jpg" alt="FundBux">
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-md-12 pl-lg-0">
                <div class="block-feature-list">
                    <div class="single-block-item">
                        <div class="icon">
                            <img src="assets/img/block-icon1.png" alt="FundBux">
                        </div>
                        <div class="heading">
                            <h3>50 Million Volunteers</h3>
                            <p>Many of us have no idea what it's like to be thirsty. We have plenty of water to
                                drink even our toilets is clean!</p>
                        </div>
                    </div>
                    <div class="single-block-item">
                        <div class="icon">
                            <img src="assets/img/block-icon2.png" alt="FundBux">
                        </div>
                        <div class="heading">
                            <h3>130+ Milion Rises</h3>
                            <p>Many of us have no idea what it's like to be thirsty. We have plenty of water to
                                drink even our toilets is clean!</p>
                        </div>
                    </div>
                    <a href="causes.html" class="theme-btn">See Causes</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video-section bg-cover section-padding" style="background-image: url('assets/img/child_video_bg.jpg')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 text-center text-lg-left">
                <div class="section-title">
                    <span><i class="fal fa-heart"></i>Life Changing Video</span>
                    <h1>Joel Orphanage Of Ministry Uganda</h1>
                </div>
            </div>
            <div class="col-lg-4 col-12 text-center text-lg-right offset-lg-1 mt-4 mt-lg-0">
                <div class="video-play-btn">
                    <a href="https://www.youtube.com/watch?v=M9gopSGhmuE" class="play-video popup-video"><i
                            class="fas fa-play"></i></a>
                    <a href="https://www.youtube.com/watch?v=M9gopSGhmuE"
                        class="popup-video play-text text-white text-capitalize pl-4">play video</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-50">
                <div class="section-title">
                    <span><i class="fal fa-heart"></i>Our Insights</span>
                    <h1>News Feeds</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 pr-3 pl-3 pr-lg-5">
                <div class="blog-card">
                    <div class="single-blog-card">
                        <div class="featured-img bg-cover" style="background-image: url('assets/img/blog/blog1.jpg')">
                        </div>
                        <div class="post-content">
                            <div class="post-meta d-flex">
                                <div class="post-author">
                                    <i class="fal fa-user"></i>By <a href="#">Salman Ahmed</a>
                                </div>
                                <div class="post-cat">
                                    <i class="fal fa-tags"></i>
                                    <a href="news.html">Charity</a>
                                    <a href="news.html">Fundrise</a>
                                </div>
                            </div>

                            <h3><a href="news-details.html">Many of us have no idea what it's like</a></h3>
                            <p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray
                                Sacramento splittail canthigaster rostrata. Midshipman dartfish Modoc sucker,
                                yellowtail. Phasellus mattis bibendum augue, sit amet egesta</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blog-list-view">
                    <div class="single-blog-item">
                        <div class="post-date">
                            <span>23</span>July
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    <i class="fal fa-user"></i>By <a href="#">Salman Ahmed</a>
                                </div>
                                <div class="post-cat">
                                    <i class="fal fa-tags"></i>
                                    <a href="news.html">Charity</a>
                                    <a href="news.html">Donate</a>
                                </div>
                            </div>

                            <h3><a href="news-details.html">A story about two sisters</a></h3>
                            <p>Many of us have no idea what it's like to be thirsty. We have plenty of water to
                                drink even.</p>
                        </div>
                    </div> <!-- ./single-blog-item -->
                    <div class="single-blog-item">
                        <div class="post-date">
                            <span>27</span>Nov
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    <i class="fal fa-user"></i>By <a href="#">Modina Theme</a>
                                </div>
                                <div class="post-cat">
                                    <i class="fal fa-tags"></i>
                                    <a href="news.html">Charity</a>
                                    <a href="news.html">Fundrise</a>
                                </div>
                            </div>

                            <h3><a href="news-details.html">The New Volunteer Workforce</a></h3>
                            <p>Many of us have no idea what it's like to be thirsty. We have plenty of water to
                                drink even.</p>
                        </div>
                    </div> <!-- ./single-blog-item -->
                    <div class="single-blog-item">
                        <div class="post-date">
                            <span>15</span>Dec
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <div class="post-author">
                                    <i class="fal fa-user"></i>By <a href="#">Salman Ahmed</a>
                                </div>
                                <div class="post-cat">
                                    <i class="fal fa-tags"></i>
                                    <a href="news.html">Charity</a>
                                    <a href="news.html">Fundrise</a>
                                </div>
                            </div>

                            <h3><a href="news-details.html">Be Aware of Stereotyping</a></h3>
                            <p>Forty million victims of modern slavery: That figure made headlines of water to drink
                                even.</p>
                        </div>
                    </div> <!-- ./single-blog-item -->
                </div>
            </div>
        </div>

    </div>
</section>


@endsection
