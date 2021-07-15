@extends('layouts.app')

@section('content')
<section class="hero-slider hero-style-1">
    <div class="hero-slider-active owl-carousel">
        <div class="single-slide" style="background-image: url('https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217439/site-image/IMG_3457_y8cgl8.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="slide-contents text-white">
                            <div class="sub-title">
                                <h4><strong>The Chosen Generations</strong></h4>
                            </div>
                            <h1 class="fs-lg">Welcome to The Root Of Jesse Church</h1>
                            {{-- <a href="causes.html" class="theme-btn">View Causes</a> --}}
                            {{-- <a href="donation.html" class="theme-btn no-fil">Donate Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- single-slide end -->
        
        <div class="single-slide" style="background-image: url('https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217366/site-image/IMG_4159_pelwy5.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="slide-contents text-white">
                            <div class="sub-title">
                                <h4><strong>Called Forth To Show his Excellence</strong></h4>
                            </div>
                            <h1 class="fs-lg">Messages by the Ministers are available</h1>
                            <a href="javascript:void(0)" class="theme-btn">Get Message</a>
                            {{-- <a href="donation.html" class="theme-btn no-fil">Donate Now</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- single-slide end -->
        <div class="single-slide" style="background-image: url('https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217471/site-image/IMG_3414_tlepbu.jpg')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6">
                        <div class="slide-contents text-white">
                            <div class="sub-title">
                                <h4><strong>God has Given Us All That is Required</strong></h4>
                            </div>
                            <h1 class="fs-lg">Feel Free to Contact Us Today</h1>
                            {{-- <a href="causes.html" class="theme-btn no-fil">View Causes</a> --}}
                            <a href="{{ route('contact us') }}" class="theme-btn">Contact Us</a>
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
            <div class="col-lg-6 col-md-6 col-12">
                <div class="support-promo-box text-white">
                    <div class="promo-bg bg-cover" style="background-image: url('https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625218965/site-image/children_jnv4zn.jpg')">
                    </div>
                    <div class="promo-details">
                        <span>Welcome Here,</span>
                        <h2><a href="{{ route('services') }}">Join Service</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="checkout-promo-box text-white">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home1/support_icon.png') }}" alt="">
                    </div>
                    <span>&nbsp;</span>
                    <h2>Worship with us LIVE</h2>
<<<<<<< HEAD
                    <a href="javascript:void(0)" class="theme-btn black" onclick="javascript:void(Tawk_API.toggle())">Just a Click <i class="fab fa-youtube"></i></a>
=======
                    <a href="https://facebook.com/therootofjesse" target="_blank" class="theme-btn black">Just a Click <i class="fab fa-youtube"></i></a>
                    {{-- <a href="javascript:void(0)" class="theme-btn black" onclick="javascript:void(Tawk_API.toggle())">Just a Click <i class="fab fa-youtube"></i></a> --}}
>>>>>>> 9de19b6043c48d11a2843b4a32a97897633f90b2
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12 disp-0">
                <div class="subscribe-promo-box text-white">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home1/envalope.png') }}" alt="">
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
                        style="background-image: url('https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217366/site-image/IMG_4159_pelwy5.jpg')"></div>
                    <div class="about-main-img">
                        <img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217367/site-image/IMG_0448_w8tcmc.jpg" alt="" class="img-fluid">
                    </div>
                    {{-- <div class="our-experience text-white d-none d-sm-block">
                        <h1>32</h1>
                        <span>Years Of Experience</span>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6 about_left_content pr-lg-0 pl-lg-5">
                <div class="section-title">
                    <span><i class="fal fa-heart"></i>About Us</span>
                    <h1>The Root <span>Of</span> Jesse,</h1>
                </div>
                <br>
                <h3>
                    We are;
                </h3>
                <p>A Worshiping Church.  A community of people who gather to minister unto the Lord in Biblical
                expressions of praise and worship.</p>

                <p>
                    A Bible Believing Church.  A community of people who believe the Bible is God’s Word and the
                    supreme authority in guiding each individual life.
                </p>

                <p>
                    A Quality Church.  A community of people who believe God deserves our best and most beautiful,
                    not only in church facilities, but in our own “temple of God”.
                </p>


                <a href="{{ route('about us') }}" class="theme-btn minimal-btn ml-80 mt-35">Learn More</a>
            </div>
        </div>
    </div>
</section>



@if (count($data['messages']) > 0)

        
    <section class="cause-section section-padding section-bg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2 text-center">
                    <div class="section-title mb-40">
                        <span><i class="fal fa-play"></i>Message & Sermon</span>
                        <h1>Renewal of Mind, <span>Impact</span> & Fellowship</h1>
                    </div>
                </div>
            </div>

            <div class="row">

                @foreach ($data['messages'] as $messages)

                    <div class="col-xl-4 col-md-6">
                        <div class="single-cause-item style-1">
                            <div class="cause-bg bg-cover" style="background-image: url('{{ $messages->album_art }}');">
                            </div>
                            <div class="cause-content">
                                <div class="cause-meta">
                                    <a href="javascript:void(0)" class="cause-cat">{{ (strlen($messages->title) < 12) ? $messages->title : substr($messages->title, 0, 12)."..." }}</a>
                                    <a href="javascript:void(0)" class="cause-author"><i class="fal fa-user"></i>{{ (strlen($messages->minister) < 12) ? $messages->minister : substr($messages->minister, 0, 12)."..." }}</a>
                                </div>
                                <p><a href="javascript:void(0)">{{ (strlen($messages->description) < 150) ? $messages->description : substr($messages->description, 0, 150)."..." }}</a></p>
                                
                                <div class="cause-amount d-flex justify-content-between">

                                    <audio class="mt-10" style="width: 100%" controls src="{{ $messages->message }}"> Your browser  does not support the <code>audio</code> element. </audio>
                                    
                                </div>
                            </div>
                        </div> <!-- /.single-cause-item  -->
                    </div>

                @endforeach

                
              
            </div>

                @if (count($data['messages']) > 3)

                    <center>
                            <a href="{{ route('more message') }}" class="theme-btn black mt-35">Listen to More</a>
                    </center>

                @endif

        </div>
    </section>  
@endif



<section class="cta-section theme-bg text-white section-padding disp-0">
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



<div class="row disp-0">
    <div class="col-12 col-lg-8 offset-lg-2 text-center">
        <div class="section-title mt-40 mb-40">
            <h1>Photo Gallery</h1>
        </div>
    </div>
</div>

<section class="event-section event-carousel text-white disp-0">
    
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

<section class="block-section section-padding disp-0">
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

<section class="video-section bg-cover section-padding" style="background-image: url('https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217441/site-image/IMG_3673_ueyepo.jpg')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 text-center text-lg-left">
                <div class="section-title">
                    <span><i class="fal fa-heart"></i>Life Changing Video</span>
                    <h1>ROJ Thanksgiving Service</h1>
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

<section class="blog-section section-padding disp-0">
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
