@extends('layouts.app')

@section('content')

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217366/site-image/IMG_4159_pelwy5.jpg" alt="Breadcrumbs Image" style="height: 400px; object-fit: cover;">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">{{ $data['messages']->title }}</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Message & Sermons</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

            <!-- Intro Courses -->
            <section class="intro-section gray-bg pt-94 pb-100 md-pt-64 md-pb-70">
                <div class="container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="col-lg-8 md-mb-50">
                            <!-- Intro Info Tabs-->
                            <div class="intro-info-tabs">
                                <ul class="nav nav-tabs intro-tabs tabs-box" id="myTab" role="tablist">
                                    <li class="nav-item tab-btns">
                                        <a class="nav-link tab-btn active" id="prod-overview-tab" data-toggle="tab" href="#prod-overview" role="tab" aria-controls="prod-overview" aria-selected="true">Overview</a>
                                    </li>
                                    
                                </ul>
                                <div class="tab-content tabs-content" id="myTabContent">
                                    <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                                        <div class="content white-bg pt-30">
                                            <!-- Cource Overview -->
                                            <div class="course-overview">
                                                <div class="inner-box">
                                                    <h4>{{ $data['messages']->title }}</h4>
                                                    

                                                    {!! $data['messages']->description !!}
                                                    {{-- <ul class="student-list">
                                                        <li>23,564 Total Students</li>
                                                        <li><span class="theme_color">4.5</span> <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span> (1254 Rating)</li>
                                                        <li>256 Reviews</li>
                                                    </ul> --}}
                                                    
                                                    <h3 class="mt-20">Be blessed as you listen</h3>
                                                    <ul class="review-list">
                                                        <audio class="mt-10" style="width: 100%" controls src="{{ $data['messages']->message }}"> Your browser  does not support the <code>audio</code> element. </audio>
                                                    </ul>                                                                                                         
                                                </div>
                                            </div>                                                
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Video Column -->
                        <div class="video-column col-lg-4">
                            <div class="inner-column">
                            <!-- Video Box -->
                                <div class="intro-video media-icon orange-color2">
                                    <img class="video-img" src="{{ $data['messages']->album_art }}" alt="Video Image">
                                    
                                </div>
                                <!-- End Video Box -->
                                <div class="course-features-info">
                                    <ul>
                                        <li class="lectures-feature">
                                            <i class="fa fa-files-o"></i>
                                            <span class="label">{{ $data['messages']->minister }}</span>
                                        </li>
                                       
                                        <li class="duration-feature">
                                            <i class="fa fa-clock-o"></i>
                                            <span class="label">Published:</span>
                                            <span class="value">{{ $data['messages']->created_at->diffForHumans() }}</span>
                                        </li>
                                      
                                        
                                    </ul>
                                </div>
                                
                                <div class="btn-part">
                                    <a href="{{ route('give') }}" class="btn readon2 orange">Give</a>
                                </div>
                            </div>
                        </div>                        
                    </div>                
                </div>
            </section>
            <!-- End intro Courses -->


        </div> 
        <!-- Main content End --> 

        
@endsection