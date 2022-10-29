        <!--Full width header Start-->
        <div class="full-width-header home8-style4">
            <!--Header Start-->
            <header id="rs-header" class="rs-header">


                <!-- Menu Start -->
                <div class="menu-area menu-sticky">
                    <div class="container">
                        <div class="row y-middle">
                            <div class="col-lg-2">
                                <div class="logo-cat-wrap">
                                    <div class="logo-part">
                                        <a href="{{ route('home') }}">
                                            <img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1667074331/site-image/Rccg_logo_aotpks.png" alt="">
                                            <img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1667075047/site-image/roj_logo_ar2ior.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 text-right">
                              <div class="rs-menu-area">
                                  <div class="main-menu">
                                      <div class="mobile-menu">
                                          <a class="rs-menu-toggle">
                                              <i class="fa fa-bars"></i>
                                          </a>
                                      </div>
                                      <nav class="rs-menu">
                                         <ul class="nav-menu">
                                            <li class="{{ ($pages == "Home" ? 'current-menu-item' : '') }}"> <a href="{{ route('home') }}">Home</a>

                                            </li>
                                             <li class="{{ ($pages == "About" ? 'current-menu-item' : '') }}">
                                                 <a href="{{ route('about us') }}">About Us</a>

                                             </li>
                                             <li class="{{ ($pages == "Message" ? 'current-menu-item' : '') }}">
                                                 <a href="{{ route('more message') }}">Message</a>

                                             </li>

                                             <li class="menu-item-has-children">
                                                 <a href="#">Connect</a>
                                                 <ul class="sub-menu">
                                                    <li><a href="{{ route('welcome here') }}">New Members</a></li>
                                                    <li class="{{ ($pages == "Services" ? 'current-menu-item' : '') }}"><a href="{{ route('services') }}">Join a service unit</a></li>
                                                    <li><a href="#">Connect Group</a></li>
                                                    <li><a href="#">We love to hear from you</a></li>
                                                 </ul>
                                             </li>


                                             <li class="{{ ($pages == "Give" ? 'current-menu-item' : '') }}">
                                                 <a href="{{ route('give') }}">Giving</a>
                                             </li>



                                             <li class="{{ ($pages == "Contact" ? 'current-menu-item' : '') }}">
                                                 <a href="{{ route('contact us') }}">Contact Us</a>

                                             </li>

                                             <li class="menu-item-has-children">
                                                 <a href="#">Resources</a>
                                                 <ul class="sub-menu">
                                                    <li class="{{ ($pages == "Store" ? 'current-menu-item' : '') }}"><a href="{{ route('store') }}">Free Gift</a></li>
                                                    <li class="{{ ($pages == "Events" ? 'current-menu-item' : '') }}"><a href="{{ route('events') }}">Events</a></li>
                                                    <li class="{{ ($pages == "Gallery" ? 'current-menu-item' : '') }}"><a href="{{ route('photo gallery') }}">Gallery</a></li>
                                                    <li><a href="https://www.facebook.com/TheRootofJesse/" target="_blank">Watch Us Live</a></li>
                                                 </ul>
                                             </li>

                                         </ul> <!-- //.nav-menu -->
                                      </nav>
                                  </div> <!-- //.main-menu -->

                              </div>
                            </div>
                            <div class="col-lg-2 text-right">
                                <div class="expand-btn-inner">
                                    {{-- <ul>

                                        <li>
                                            <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                                                <i class="flaticon-search"></i>
                                            </a>
                                        </li>

                                    </ul> --}}
                                    <a id="nav-expander" class="nav-expander style2">
                                        <span class="dot1"></span>
                                        <span class="dot2"></span>
                                        <span class="dot3"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu End -->

                <!-- Canvas Menu start -->
                <nav class="right_menu_togle hidden-md">
                    <div class="close-btn">
                        <div id="nav-close">
                            <div class="line">
                                <span class="line1"></span><span class="line2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="canvas-logo">
                        <a href="{{ route('home') }}">
                            <img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1667074331/site-image/Rccg_logo_aotpks.png" alt="">
                            <img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1667075047/site-image/roj_logo_ar2ior.png" alt="">
                        </a>
                    </div>
                    <div class="offcanvas-text">
                        <p>Dear Guest,</p>
                        <p>Thank you for taking the time to visit our website. We hope you capture a glimpse of RCCG Root of Jesse (RoJ). Our Sunday service is designed to speak to you, right where you are. With a friendly atmosphere, contemporary worship, live WORD and multimedia we seek to express relevant and meaningful truth to all who attend. So whether you’re a spiritual seeker who’s just starting to ask questions about God, or a committed Christian who wants a place to grow and serve, you can find a home at RoJ……..we have a place for everyone!</p>
                    </div>

                    @if (count($data['gallery']) > 0)

                        <div class="offcanvas-gallery">
                            @foreach ($data['gallery'] as $photoGallery)
                                <div class="gallery-img">
                                    <a class="image-popup" href="{{ $photoGallery->imageUrl }}"><img src="{{ $photoGallery->imageUrl }}" alt=""></a>
                                </div>
                            @endforeach

                        </div>

                        @else

                        <div class="offcanvas-gallery">
                            <div class="gallery-img">
                                <a class="image-popup" href="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217441/site-image/IMG_3673_ueyepo.jpg"><img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217441/site-image/IMG_3673_ueyepo.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217439/site-image/IMG_3457_y8cgl8.jpg"><img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217439/site-image/IMG_3457_y8cgl8.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217478/site-image/IMG_3726_ojijsd.jpg"><img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217478/site-image/IMG_3726_ojijsd.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217385/site-image/IMG_3182_xpxbot.jpg"><img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217385/site-image/IMG_3182_xpxbot.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217366/site-image/IMG_4159_pelwy5.jpg"><img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217366/site-image/IMG_4159_pelwy5.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a class="image-popup" href="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217357/site-image/IMG_4004_urvgo6.jpg"><img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217357/site-image/IMG_4004_urvgo6.jpg" alt=""></a>
                            </div>
                        </div>

                    @endif


                    <div class="map-img">
                        {{-- <img src="new/assets/images/map.jpg" alt=""> --}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d4064226.6368307164!2d2.960535128074049!3d5.859655540017993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d6.5953588!2d3.3639538!4m5!1s0x1069cd9cb66ff4a5%3A0x26d8a3c86a884a05!2s2b%20Degema%20Close%2C%20Obia%2C%20Port%20Harcourt!3m2!1d4.846119799999999!2d7.0456864999999995!5e0!3m2!1sen!2sng!4v1625216090561!5m2!1sen!2sng" style="border:0; width:100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <div class="canvas-contact">
                        <ul class="social">
                            <li><a href="https://facebook.com/therootofjesse" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://instagram.com/rootofjesse_phc"><i class="fa fa-instagram" target="_blank"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
                        </ul>
                    </div>
                </nav>
                <!-- Canvas Menu end -->
            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->
