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
                    <h1 class="page-title">Events</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Events</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

		    <!-- Events Section Start -->
            <div class="rs-event orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-60 col-md-6">
                            <div class="event-item">
                                <div class="event-short">
                                   <div class="featured-img">
                                       <img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217257/site-image/IMG_3951_r8zf0f.jpg" alt="Image">
                                   </div>
                                   
                                   <div class="content-part">
                                       <div class="address"><i class="fa fa-map-o"></i> ROJ, Portharcourt Nigeria</div>
                                       <h4 class="title"><a href="#">Doing Exploit</a></h4>
                                       <p class="text">
                                           Daniel 11:32b, "... but the people that do know their God shall be strong, and do exploits." (KJV)
                                           <ul class="mt-10" style="list-style: disc">
                                                <li>Salvation</li>
                                                <li>Healings</li>
                                                <li>Worship</li>
                                                <li>Praise</li>
                                            </ul>
                                       </p>
                                            
                                       <div class="event-btm">
                                           <div class="date-part">
                                               <div class="date">
                                                   <i class="fa fa-calendar-check-o"></i>
                                                   November 11th - 15th, {{ date('Y') }} 
                                               </div>
                                           </div>
                                           <div class="btn-part">
                                               <a href="javascript:void(0)">Join Event</a>
                                           </div>
                                       </div>
                                   </div> 
                                </div>
                            </div>
                        </div> 
                    </div>
                </div> 
            </div>
            <!-- Events Section End --> 
 
     </div> 
         <!-- Main content End --> 

@endsection