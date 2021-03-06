@extends('layouts.app')

@section('content')

<section class="page-banner-wrap bg-cover" style="background-image: url('https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217471/site-image/IMG_3414_tlepbu.jpg')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-heading text-white">
                    <div class="sub-title">
                        <h4><strong>The Chosen Generations</strong></h4>
                    </div>
                    <div class="page-title">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="contact-page-wrap section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-contact-card card1">
                    <div class="top-part">
                        <div class="icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="title">
                            <h4>Email Address</h4>
                            <span>Sent mail asap anytime</span>
                        </div>
                    </div>
                    <div class="bottom-part">
                        <div class="info">
                            <p>info@therootofjessephc.com</p>
                            <p>&nbsp;</p>
                        </div>
                        <div class="icon">
                            <i class="fal fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-contact-card card2">
                    <div class="top-part">
                        <div class="icon">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="title">
                            <h4>Phone Number</h4>
                            <span>call us anytime</span>
                        </div>
                    </div>
                    <div class="bottom-part">
                        <div class="info">
                            <p>080-331-048-90</p>
                            <p>&nbsp;</p>
                        </div>
                        <div class="icon">
                            <i class="fal fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-contact-card card3">
                    <div class="top-part">
                        <div class="icon">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="title">
                            <h4>Church Address</h4>
                            <span>Send mail anytime</span>
                        </div>
                    </div>
                    <div class="bottom-part">
                        <div class="info">
                            <p>2b Degema close, Rumuibekwe</p>
                            <p>Port Harcourt, Nigeria</p>
 
                        </div>
                        <div class="icon">
                            <i class="fal fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="contact-map-wrap">
                    <div id="map">
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5457.875323165521!2d144.90402300269133!3d-37.792722838344716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612018663424!5m2!1sen!2sbd"
                            frameborder="0" style="border:0; width:100%" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe> --}}

                            <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d4064226.6368307164!2d2.960535128074049!3d5.859655540017993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d6.5953588!2d3.3639538!4m5!1s0x1069cd9cb66ff4a5%3A0x26d8a3c86a884a05!2s2b%20Degema%20Close%2C%20Obia%2C%20Port%20Harcourt!3m2!1d4.846119799999999!2d7.0456864999999995!5e0!3m2!1sen!2sng!4v1625216090561!5m2!1sen!2sng" style="border:0; width:100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row section-padding pb-0">
            <div class="col-12 text-center mb-20">
                <div class="section-title">
                    <span><i class="fal fa-pen"></i>Write Here</span>
                    <h1>Get In Touch</h1>
                </div>
            </div>

            <div class="col-12 col-lg-12">
                <div class="contact-form">
                    <form action="{{ route('message us') }}" class="row conact-form" method="POST">
                        @csrf
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="fname">Full Name</label>
                                <input type="text" id="fname" name="name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="Enter Email Address">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" name="telephone" placeholder="Enter Number">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="single-personal-info">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-12 col-12">
                            <div class="single-personal-info">
                                <label for="subject">Enter Message</label>
                                <textarea id="message" name="message" placeholder="Enter message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-12 text-center">
                            <input class="submit-btn" type="submit" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
