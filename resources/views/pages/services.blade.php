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
                            <h1>Services</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-events-wrap section-padding">
        <div class="container">

            <div class="row">
                
                <div class="col-12 col-lg-6 col-xl-12 water proevent grid-item">
                        <h2>Worship with us </h2>

                    <div class="single-event-ticket row align-items-center">
                        <div class=" table table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr style="font-weight: bold;">
                                        <td>Time</td>
                                        <td>Service</td>
                                        <td>Location</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1:00 PM</td>
                                        <td>
                                            Sunday Service
                                        </td>
                                        <td>
                                            Church Auditorium, <br> 2b Degema close, Rumuibekwe Housing Estate Port Harcourt,
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>5:00 PM</td>
                                        <td>
                                            CARE - Connect And Reach Everyone. <br>
                                            Care holds every wednesday by 5.00pm at our various centers.
                                        </td>
                                        <td>
                                            Uniport, Kenploy, Woji, Igbo Etche, Rumukwurushi, Jesus House
                                        </td>

                                    </tr>

                                    
                                </tbody>
                            </table>
                        </div>
                        <a type="button" href="https://facebook.com/therootofjesse" target="_blank" class="btn btn-primary">Worship with us online</a>
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