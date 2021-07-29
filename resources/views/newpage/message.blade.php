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
                    <h1 class="page-title">Message & Sermons</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Message & Sermons</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Popular Courses Section Start -->
            <div id="rs-popular-courses" class="rs-popular-courses style3 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">                  
                    <div class="row"> 
                        
                        @if (count($data['messages']) > 0)
                            @foreach ($data['messages'] as $sermons)
                                <div class="col-lg-4 col-md-6 col-sm-6 mb-40">
                                    <div class="courses-item">
                                        <div class="img-part">
                                            <img src="{{ $sermons->album_art }}" alt="">
                                        </div>
                                        <div class="content-part">
                                            <span><a class="categories" href="#">{{ (strlen($sermons->minister) < 12) ? $sermons->minister : substr($sermons->minister, 0, 12)."..." }}</a></span>
                                            
                                            <h3 class="title"><a href="{{ route('one sermon', $sermons->id) }}">{{ (strlen($sermons->minister) < 20) ? $sermons->minister : substr($sermons->minister, 0, 20)."..." }}</a></h3>
                                            <div class="bottom-part">
                                                <audio class="mt-10" style="width: 100%" controls src="{{ $sermons->message }}"> Your browser  does not support the <code>audio</code> element. </audio>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else

                            <div class="col-lg-12 col-md-12 col-sm-12 mb-40">
                                <div class="courses-item">
                                    
                                    <div class="content-part">
                                        
                                        <h3 class="title text-center"><a href="javascript:void(0)">No message yet</a></h3>
                                        
                                    </div>
                                </div>
                            </div>
                            
                        @endif


                        
                        
                        
                    </div>

                    <center>
                            <ul class="pagination-part">
                                <li>{{ $data['messages']->links() }}</li>
                            </ul>
                    </center>
                </div>
            </div>
            <!-- Popular Courses Section End -->

            
        </div> 
        <!-- Main content End --> 
        
@endsection