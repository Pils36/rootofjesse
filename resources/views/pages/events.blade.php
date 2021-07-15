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
                            <h1>Upcoming Events</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">events</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-events-wrap section-padding">
        <div class="container">

            <div class="row grid">
                <div class="col-12 col-lg-6 col-xl-12 water proevent grid-item">
                    <div class="single-event-ticket row align-items-center">
                        <div class="col-xl-4">
                            <div class="event-featured-cover bg-cover" style="background-image: url('{{ asset('assets/img/event/e1.jpg') }}')">
                                <div class="event-time-address">
                                    <span><i class="fal fa-calendar-alt"></i>11th - 15th November 2021</span>
                                    <span><i class="fal fa-map-marker-alt"></i>ROJ, PHC. Nigeria</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 pr-xl-0">
                            <div class="event-info">
                                <h2><a href="#">DOING EXPLOIT</a></h2>
                                <p>Daniel 11:32b, "... but the people that do know their God shall be strong, abd do exploits." (KJV)</p>
                                <ul>
                                    <li>Salvation</li>
                                    <li>Healings</li>
                                    <li>Worship</li>
                                    <li>Praise</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 text-xl-right disp-0">
                            <div class="event-ticket-buy">
                                <a href="#" class="ticket-buy-btn"><i class="fal fa-home"></i>Book A Seat</a>
                            </div>
                        </div>
                    </div> <!-- single-event-ticket -->
                </div>                
                
                
            </div>

            <div class="row align-items-center disp-0">
                <div class="col-12 col-lg-12 text-center">
                    <div class="causes-page-nav mt-50 causes-pages-link">
                        <ul>
                            <li><a href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                            <li><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                            <li><a href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                        </ul>
                    </div><!-- /.blog-page-nav -->
                </div> <!-- /.col-12 col-lg-12 -->  
            </div>
        </div>
    </section>

    @endsection