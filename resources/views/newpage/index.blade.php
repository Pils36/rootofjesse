

        @extends('layouts.app')

        @section('content')
		<!-- Main content Start -->
        <div class="main-content">

            <!-- Slider Section Start -->
            <div class="rs-slider style2 disp-0">
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                    <div class="slide-part">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-last">
                                    <div class="img-part">
                                        <img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217441/site-image/IMG_3673_ueyepo.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 pr-50">
                                    <div class="content">
                                        <div class="sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">We welcome you!</div>
                                        <h1 class="title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">I feel refreshed everytime I worship at the Root of Jesse.</h1>
                                        <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                            <a class="readon orange-btn" href="{{ route('services') }}">Be at the Next Service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-part">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-last">
                                    <div class="img-part">
                                        <img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217439/site-image/IMG_3457_y8cgl8.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 pr-80">
                                    <div class="content">
                                        <div class="sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">We welcome you!</div>
                                        <h1 class="title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">I feel blessed to be a part of the service.</h1>
                                        <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                            <a class="readon orange-btn" href="{{ route('services') }}">Be at the Next Service</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Section End -->



                        <!-- Slider Section Start -->
            <div class="rs-slider main-home">
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
                    <div class="slider-content slide1">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">We welcome you!</div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Feeling refreshed</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon orange-btn main-home" href="{{ route('about us') }}">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-content slide2">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Stay Blessed</div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">Be a part of our service</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon orange-btn main-home" href="{{ route('more message') }}">Our Sermon</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-content slide3">
                        <div class="container">
                            <div class="content-part">
                                <div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms">Join us!</div>
                                <h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms">We envision you in Christ</h1>
                                <div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
                                    <a class="readon orange-btn main-home" href="{{ route('services') }}">Join Our Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Section start -->
                <div id="rs-features" class="rs-features main-home">
                    <div class="container">
                       <div class="row">
                            <div class="col-lg-4 col-md-12 md-mb-30">
                                <div class="features-wrap">
                                    <div class="icon-part">
                                       <img src="{{ asset('new/assets/images/features/icon/3.png') }}" alt="">
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">
                                            <span class="watermark">Church Auditorium</span>
                                        </h4>
                                        <p class="dese">
                                           2b Degema close, Rumuibekwe Port Harcourt, Nigeria
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 md-mb-30">
                                <div class="features-wrap">
                                    <div class="icon-part">
                                       <img src="{{ asset('new/assets/images/features/icon/2.png') }}" alt="">
                                    </div>
                                    <div class="content-part">
                                      <h4 class="title">
                                          <span class="watermark">Church Vision</span>
                                      </h4>
                                        <p class="dese">
                                            Serving our generation according to the will of God Acts
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="features-wrap">
                                    <div class="icon-part">
                                       <img src="{{ asset('new/assets/images/features/icon/1.png') }}" alt="">
                                    </div>
                                    <div class="content-part">
                                        <h4 class="title">
                                            <span class="watermark">Church Mission</span>
                                        </h4>
                                        <p class="dese">
                                           To make Heaven and take with us, as many people as we can...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features Section End -->
            </div>
            <!-- Slider Section End -->





            <!-- About Section Start -->
            <div class="rs-about style9 pt-100 pb-200 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-4">

                        </div>
                        <div class="col-lg-8">
                            <div class="content-part">
                                <div class="about-img md-mb-50">
                                    <div class="media-icon orange-color">
                                        <img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217357/site-image/IMG_4004_urvgo6.jpg" alt="" style="max-width: 45%; width: 45%;">
                                        {{-- <a class="popup-videos" href="https://www.youtube.com/watch?v=atMUy_bPoQI">
                                            <i class="fa fa-play"></i>
                                        </a> --}}
                                    </div>
                                </div>
                                <div class="sec-title3 pl-65 md-pl-15 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                    <div class="sub-title">About Us</div>
                                    <h2 class="title">Hello & Welcome!</h2>
                                    <h5 class="title">Dear Guest,</h5>
                                     <div class="desc mb-30 pr-50 md-pr-15">Thank you for taking the time to visit our website. We hope you capture a glimpse of RCCG Root of Jesse (RoJ). Our Sunday service is designed to speak to you, right where you are. With a friendly atmosphere, contemporary worship, live WORD and multimedia we seek to express relevant and meaningful truth to all who attend. So whether you’re a spiritual seeker who’s just starting to ask questions about God, or a committed Christian who wants a place to grow and serve, you can find a home at RoJ……..we have a place for everyone!</div>

                                    <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                        <a class="readon orange-btn" href="{{ route('about us') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style8 pt-200 pb-100 md-pt-70 md-pb-50 disp-0">
                <div class="container">
                    <div class="row">
                        <div class="offset-lg-3">

                        </div>
                        <div class="col-lg-9">
                            <div class="main-content">
                                <div class="img-part">
                                    <img src="new/assets/images/about/home8/1.jpg" alt="">
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                       <div class="images-title pl-80 md-pl-15 md-mb-40">
                                           <img src="new/assets/images/about/home8/2.jpg" alt="">
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="sec-title3 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                                           <div class="sub-title">About Me</div>
                                           <h2 class="title">Educavo Kitchen Coach</h2>
                                            <div class="desc mb-30">Lorem ipsum dolor sit amet, consectetur adipisic ing elit, sed eius to mod tempors incididunt ut labore etdo ldore magna this aliqua enims ad minim.Lorem ipsum dolor sit amet, consecte tur adipisic ing elit, sed eius to mod tem incididunt demo data.</div>

                                           <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                                               <a class="readon orange-btn" href="#">Read More</a>
                                           </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row rs-counter style-home8 pt-40">
                                <div class="col-lg-3 col-md-6 md-mb-30">
                                    <div class="counter-item text-center">
                                        <h2 class="rs-count plus">10</h2>
                                        <h4 class="title mb-0">Recipe Books</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 md-mb-30">
                                    <div class="counter-item text-center">
                                        <h2 class="number rs-count kplus">3</h2>
                                        <h4 class="title mb-0">Downloads</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 md-mb-30">
                                    <div class="counter-item text-center">
                                        <h2 class="number rs-count kplus">10</h2>
                                        <h4 class="title mb-0">Subscribers</h4>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-item text-center">
                                        <h2 class="number rs-count plus">40</h2>
                                        <h4 class="title mb-0">Online Courses</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Recipes Section Start -->
            <div class="rs-recipes bg6 pt-100 pb-100 md-pt-70 md-pb-70 disp-0">
               <div class="container">
                   <div class="sec-title3 text-center wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                       <div class="sub-title">Free Books</div>
                       <h2 class="title">​​Free ​Download My Expert<br>
                         Kitchen Spices Ebook</h2>
                        <div class="desc mb-30 md-pr-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eius to mod tempor<br>
                        incididunt ut labore et dolore magna aliqua. Ut enims ad minim veniam.<br>
                        Aenean massa. Cum sociis natoque penatibus et magnis.</div>

                       <div class="btn-part wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                           <a class="readon orange-btn" href="#">Download Now</a>
                       </div>
                   </div>
               </div>
            </div>
            <!-- Recipes Section end -->

            @if (count($data['messages']) > 0)

            <!-- Categories Section Start -->
            <div id="rs-popular-courses" class="rs-popular-courses style5 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title3 text-center mb-45">
                        <div class="sub-title primary"> Message & Sermon</div>
                        <h2 class="title mb-0">Renewal of Mind, Impact & Fellowship</h2>
                    </div>
                    <div class="row">

                        @foreach ($data['messages'] as $sermons)

                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="courses-item">
                                        <div class="courses-grid">
                                            <div class="img-part">
                                                <a href="javascript:void(0)"><img src="{{ $sermons->album_art }}" alt="" style="width: 100%; height: 30vh; object-fit: cover;"></a>
                                            </div>
                                            <div class="content-part">

                                                <h3 class="title" style="font-size: 16px !important;"><a href="{{ route('one sermon', $sermons->id) }}">{{ (strlen($sermons->title) < 50) ? $sermons->title : substr($sermons->title, 0, 50)."..." }}</a></h3>

                                                <ul class="meta-part">
                                                    <audio class="mt-10" style="width: 100%" controls src="{{ $sermons->message }}"> Your browser  does not support the <code>audio</code> element. </audio>
                                                </ul>
                                            </div>
                                        </div>
                                </div>
                                </div>

                        @endforeach



                    </div>
                </div>
            </div>
            <!-- Categories Section End -->

            @endif

            @if (count($data['messages']) > 3)

                <center>
                        <a class="readon orange-btn mb-20" href="{{ route('more message') }}">Listen to More</a>
                </center>

            @endif




            <!-- Events Section Start -->
            <div class="rs-event home8-style1 event-bg pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title3 text-center">
                        <div class="sub-title uppercase mb-10">
                            Latest Events
                        </div>
                        <h2 class="title mb-30">Our Upcoming Events</h2>
                    </div>


                    @if (count($data['events']) > 0)


                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">

                    @foreach ($data['events'] as $event)

                       <div class="event-item">
                           <div class="event-short">
                              <div class="featured-img">
                                  <img src="{{ $event->image }}" alt="Image">
                                    <div class="dates">
                                          {{ $event->event_date }}

                                  </div>
                              </div>
                              <div class="content-part">
                                  <h4 class="title"><a href="{{ route('events', 'slug='.str_replace(" ", "_", $event->name)) }}">{{ $event->name }}</a></h4>
                                <div class="time-sec">

                                    <div class="address"><i class="fa fa-map-o"></i> {{ $event->location }}</div>
                                </div>
                              </div>
                           </div>
                       </div>
                    @endforeach


                   </div>


                    @else

                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                       <div class="event-item">
                           <div class="event-short">
                              <div class="featured-img">
                                  <img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217366/site-image/IMG_4159_pelwy5.jpg" alt="Image">
                                    <div class="dates">
                                          November 11th - 15th, 2021

                                  </div>
                              </div>
                              <div class="content-part">
                                  <h4 class="title"><a href="#">Doing Exploits</a></h4>
                                <div class="time-sec">

                                    <div class="address"><i class="fa fa-map-o"></i> ROJ, PHC Nigeria</div>
                                </div>
                              </div>
                           </div>
                       </div>
                   </div>

                    @endif


                </div>
            </div>
            <!-- Events Section End -->



            <!-- Newsletter section start -->
            <div class="rs-newsletter home8-style1 bg7 pt-100 pb-100 md-pt-70 md-pb-70 disp-0">
                <div class="container">
                    <div class="content-wrap text-center">
                      <div class="sec-title3 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                          <div class="sub-title"> Subscribe Newsletter</div>
                          <h2 class="title">Subscribe To Our Newsletter!</h2>

                      </div>
                        <form class="newsletter-form">
                            <input type="email" id="email" name="email" placeholder="Enter Your Email" required="">
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Newsletter section end -->

            <!-- Testimonial Section Start -->
            <div class="rs-testimonial style8 pt-100 pb-100 md-pt-70 md-pb-70 disp-0">
              <div class="container">
                <div class="sec-title3 text-center">
                    <div class="sub-title uppercase mb-10">
                        Testimonial
                    </div>
                    <h2 class="title mb-30">What Students Saying</h2>
                </div>
                  <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="7000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
                      <div class="testi-item">
                          <div class="author-desc">
                              <div class="desc">Education is the passport to the future for tomorrow belongs to those who pre pare for it today. Sed ut perspiciatis unde omnis  iste natus error sit vo luptatem</div>
                              <div class="author-img">
                                  <img src="new/assets/images/testimonial/style8/1.png" alt="">
                              </div>
                          </div>
                          <div class="author-part">
                              <a class="name" href="#">Mahadi Monsura</a>
                              <span class="designation">Student</span>
                          </div>
                      </div>
                      <div class="testi-item">
                          <div class="author-desc">
                            <div class="desc">Education is the passport to the future for tomorrow belongs to those who pre pare for it today. Sed ut perspiciatis unde omnis  iste natus error sit vo luptatem</div>
                              <div class="author-img">
                                  <img src="new/assets/images/testimonial/style8/2.png" alt="">
                              </div>
                          </div>
                          <div class="author-part">
                              <a class="name" href="#">Mahadi Monsura</a>
                              <span class="designation">Student</span>
                          </div>
                      </div>
                      <div class="testi-item">
                          <div class="author-desc">
                              <div class="desc">Education is the passport to the future for tomorrow belongs to those who pre pare for it today. Sed ut perspiciatis unde omnis  iste natus error sit vo luptatem</div>
                              <div class="author-img">
                                  <img src="new/assets/images/testimonial/style8/3.png" alt="">
                              </div>
                          </div>
                          <div class="author-part">
                              <a class="name" href="#">Mahadi Monsura</a>
                              <span class="designation">Student</span>
                          </div>
                      </div>
                      <div class="testi-item">
                          <div class="author-desc">
                            <div class="desc">Education is the passport to the future for tomorrow belongs to those who pre pare for it today. Sed ut perspiciatis unde omnis  iste natus error sit vo luptatem</div>
                              <div class="author-img">
                                  <img src="new/assets/images/testimonial/style8/4.png" alt="">
                              </div>
                          </div>
                          <div class="author-part">
                              <a class="name" href="#">Mahadi Monsura</a>
                              <span class="designation">Student</span>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
            <!-- Testimonial Section End -->

            <!-- Events Section Start -->
            <div class="rs-gallery style2">
               <div class="row margin-0">
                   @if (count($data['gallery']) > 0)
                       @foreach ($data['gallery'] as $photos)
                           <div class="col-lg-2 padding-0 mb-0 col-md-4 col-sm-6">
                                <div class="gallery-part">
                                    <div class="gallery-img">
                                        <a class="image-popup" href="{{ $photos->imageUrl }}"><img src="{{ $photos->imageUrl }}" alt=""></a>
                                    </div>
                                </div>
                            </div>
                       @endforeach
                   @endif


               </div>
            </div>
            <!-- Events Section End -->
        </div>
        <!-- Main content End -->

        @endsection


