@extends('layouts.app')

@section('content')

    <section class="page-banner-wrap bg-cover" style="background-image: url('https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217441/site-image/IMG_3673_ueyepo.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-heading text-white">
                        <div class="sub-title">
                            <h4><strong>The Chosen Generations</strong></h4>
                        </div>
                        <div class="page-title">
                            <h1>About Us</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">about us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us-section section-padding about-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-shots">
                        <div class="about-main-img">
                            <img src="{{ asset('https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217357/site-image/IMG_4004_urvgo6.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 about_left_content mt-0 pr-lg-0 pl-lg-5">
                    <div class="section-title">
                        {{-- <span><i class="fal fa-heart"></i>&nbsp;</span> --}}
                        <h1>Hello <span>&</span> Welcome!</h1>
                    </div>
                    <br>
                    <h3>
                        Dear Guest,
                    </h3>
                    <p>
                        Thank you for taking the time to visit our website. We hope you capture a glimpse of RCCG Root of Jesse (RoJ).
Our Sunday service is designed to speak to you, right where you are. With a friendly atmosphere, contemporary worship,
live WORD and multimedia we seek to express relevant and meaningful truth to all who attend.
So whether you’re a spiritual seeker who’s just starting to ask questions about God,
or a committed Christian who wants a place to grow and serve, you can find a home at RoJ……..we have a place for everyone!
                    </p>
                    
                    
                    
                    
                </div>

                <div class="col-lg-6 about_left_content mt-0 pr-lg-0 pl-lg-5">
                    <br>
                    <h3>
                        We’re glad you’re here.
                    </h3>
                    <p>
                        The only thing we ask of you is: relax. You’re with friends. Even if you’ve never been in church before,
you’ll have no worries about being “out of place”.
<br>
<br>
At RoJ, What you will find is this:
                        <ul style="font-style: italic; font-weight: bold">
                            <li>• A friendly atmosphere</li>
                            <li>• Friendly people who’ll help you find your way around</li>
                            <li>• Contemporary worship</li>
                            <li>• Messages relevant to your daily life</li>
                            <li>• That you matter to God.</li>
                        </ul>
                    </p>
                    <p>
                        So, whether you’re single, married,
with or without children – no matter where you’ve been or what you’ve done – we invite you to experience the God here.
                    </p>


                    <div class="testimonial-quote">
                        <div class="feedback">
                            <h4>OUR MISSION</h4>
                            <strong>
                                To make Heaven and take with us, as many people as we can.
                            </strong>
                            <br><br>
                            <strong>
                                To reach out to youths and young adults, in an atmosphere filled with the SPIRIT of CHRIST and the LOVE of GOD
                            </strong>
                            <br><br>
                            <strong>
                                To build ourselves, until we reach our full potential, modelling Christ in the way we live.
                            </strong>
                        </div>
                        {{-- <div class="user-info d-flex align-items-center">
                            <div class="profile-img bg-cover" style="background-image: url('https://res.cloudinary.com/pilstech/image/upload/v1624069172/rootofjesse_pkyfwt.png')">                                
                            </div>
                            <span>Pastor E.A Adeboye <br><small>(G.O, RCCG)</small></span>
                        </div> --}}
                    </div>
                    

                </div>


                <div class="col-lg-6 about_left_content mt-0 pr-lg-0 pl-lg-5">
                                        <br>
                    <h3>
                        We are;
                    </h3>
                    
                    <p><span style="font-weight: bold;">A Worshiping Church.</span>  A community of people who gather to minister unto the Lord in Biblical
expressions of praise and worship.
</p>

                    <p>
                        <span style="font-weight: bold;">A Bible Believing Church.</span>  A community of people who believe the Bible is God’s Word and the
supreme authority in guiding each individual life.
                    </p>

                    <p>
                        <span style="font-weight: bold;">A Quality Church.</span>  A community of people who believe God deserves our best and most beautiful,
not only in church facilities, but in our own “temple of God”.

                    </p>


                    <p>
                        <span style="font-weight: bold;">A Non-Judgmental Church.</span>  A community of people that can accept and appreciate what the
Lord Jesus is accomplishing through other churches and individuals.

                    </p>

                    <div class="testimonial-quote">
                        <div class="feedback">
                            <h4>OUR VISION</h4>
                            <strong>
                                Serving our generation according to the will of God Acts 
                            </strong>
                        </div>
                        {{-- <div class="user-info d-flex align-items-center">
                            <div class="profile-img bg-cover" style="background-image: url('https://res.cloudinary.com/pilstech/image/upload/v1624069172/rootofjesse_pkyfwt.png')">                                
                            </div>
                            <span>Pastor E.A Adeboye <br><small>(G.O, RCCG)</small></span>
                        </div> --}}
                    </div>

                </div>

            </div>
        </div>
    </section>

    <div class="timeline-wrap bg-cover section-padding disp-0" style="background-image: url('assets/img/timeline-bg.png')">
        <div class="container">
            <div class="row">
                <div class="col-12 p-md-0">
                    <div class="featured-timeline">
                        <div class="timeline">
                            <div class="timeline__wrap">
                              <div class="timeline__items">
                                
                                <div class="timeline__item">
                                  <div class="timeline__content">
                                    <h2>1998</h2>
                                    <p>- Journey Was Started</p>
                                    <img src="assets/img/timeline/1.jpg" alt="">
                                  </div>
                                </div>
                                
                                <div class="timeline__item">
                                  <div class="timeline__content">
                                    <h2>2002</h2>
                                    <p>- Journey Was Started</p>
                                    <img src="assets/img/timeline/2.jpg" alt="">
                                  </div>
                                </div>
                                
                                <div class="timeline__item">
                                  <div class="timeline__content">
                                    <h2>2010</h2>
                                    <p>- Journey Was Started</p>
                                    <img src="assets/img/timeline/3.jpg" alt="">
                                  </div>
                                </div>
                                
                                <div class="timeline__item">
                                  <div class="timeline__content">
                                    <h2>2018</h2>
                                    <p>- Journey Was Started</p>
                                    <img src="assets/img/timeline/4.jpg" alt="">
                                  </div>
                                </div>
                                
                                <div class="timeline__item">
                                  <div class="timeline__content">
                                    <h2>2020</h2>
                                    <p>- Journey Was Started</p>
                                    <img src="assets/img/timeline/1.jpg" alt="">
                                  </div>
                                </div>
                                
                                <div class="timeline__item">
                                  <div class="timeline__content">
                                    <h2>2021</h2>
                                    <p>- Journey Was Started</p>
                                    <img src="assets/img/timeline/2.jpg" alt="">
                                  </div>
                                </div>
                                
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="skills-section section-padding disp-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pr-lg-0">
                    <div class="section-title mb-4">
                        <span><i class="fal fa-heart"></i>skills</span>
                        <h1>Our Skillset <span>Stand</span> On Our Works.</h1>
                    </div>
                    <p>Your $40.00 monthly donation can give 12 people clean water every year. 100% funds water projects.</p>
                    <div class="skills-list row text-center">
                        <div class="single-skill col-sm-6 col-12">
                            <div class="skillprogress" data-bar-color='#d55342' data-percent="76">
                                <span class="percent"></span>
                            </div>
                            <p>Complete Project</p>
                        </div>
                        <div class="single-skill col-sm-6 col-12">
                            <div class="skillprogress" data-bar-color='#00baa3' data-percent="65">
                                <span class="percent"></span>
                            </div>
                            <p>Program Per Month</p>
                        </div>
                    </div>                    
                </div>
                <div class="col-lg-6 offset-lg-1 mt-5 mt-lg-0">
                    <div class="skill-box-items row text-center">
                        <div class="col-12 col-sm-6">
                            <div class="single-skill-box bg-cover" style="background-image: url('assets/img/skill1.jpg')">
                                <div class="skill-content">
                                    <div class="icon">
                                        <i class="fal fa-tint"></i>
                                    </div>
                                    <h3>Our Goal</h3>
                                    <p>Become the One Who is Considered a Hero</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="single-skill-box bg-cover" style="background-image: url('assets/img/skill2.jpg')">
                                <div class="skill-content">
                                    <div class="icon">
                                        <i class="fal fa-hands-heart"></i>
                                    </div>
                                    <h3>Our Missions</h3>
                                    <p>Become the One Who is Considered a Hero</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="single-skill-box bg-cover" style="background-image: url('assets/img/skill3.jpg')">
                                <div class="skill-content">
                                    <div class="icon">
                                        <i class="fal fa-medkit"></i>
                                    </div>
                                    <h3>Our Achievement</h3>
                                    <p>Become the One Who is Considered a Hero</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="single-skill-box bg-cover" style="background-image: url('assets/img/skill4.jpg')">
                                <div class="skill-content">
                                    <div class="icon">
                                        <i class="fal fa-house-flood"></i>
                                    </div>
                                    <h3>Our Dream</h3>
                                    <p>Become the One Who is Considered a Hero</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

    <section class="brands-carousel-section bg-cover bg-overlay section-padding disp-0"  style="background-image: url('assets/img/brand_carousel_bg.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="brands-carousel-active owl-carousel d-flex align-items-center">
                        <div class="single-brand-logo">
                            <img src="assets/img/brand/1.png" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="assets/img/brand/2.png" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="assets/img/brand/3.png" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="assets/img/brand/4.png" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="assets/img/brand/5.png" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="assets/img/brand/6.png" alt="">
                        </div>
                        <div class="single-brand-logo">
                            <img src="assets/img/brand/1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

@endsection