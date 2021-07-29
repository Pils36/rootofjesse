@extends('layouts.app')

@section('content')

	   <!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217367/site-image/IMG_3179_g65nzp.jpg" alt="Breadcrumbs Image" style="height: 400px; object-fit: cover;">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Photo Gallery</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Photo Gallery</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

            <!-- Events Section Start -->
            <div class="rs-gallery pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                   <div class="row">

                        @if (count($data['gallery']) > 0)

                            @foreach ($data['gallery'] as $photos)
                                <div class="col-lg-4 mb-30 col-md-6">
                                    <div class="gallery-item">
                                        <div class="gallery-img">
                                            <a class="image-popup" href="{{ $photos->imageUrl }}"><img src="{{ $photos->imageUrl }}" alt=""></a>
                                        </div>
                                        <div class="title">
                                            {{ $photos->name }}
                                        </div>
                                    </div>
                                </div> 
                            @endforeach
                            
                        @else

                        <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-item">
                                <div class="gallery-img">
                                    <a class="image-popup" href="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217796/site-image/IMG_0451_y767xz.jpg"><img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217796/site-image/IMG_0451_y767xz.jpg" alt=""></a>
                                </div>
                                <div class="title">
                                    We Pray Together
                                </div>
                            </div>
                        </div> 

                        <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-item">
                                <div class="gallery-img">
                                    <a class="image-popup" href="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217441/site-image/IMG_3673_ueyepo.jpg"><img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217441/site-image/IMG_3673_ueyepo.jpg" alt=""></a>
                                </div>
                                <div class="title">
                                    Dancing in the Lord Everyday
                                </div>
                            </div>
                        </div> 


                        <div class="col-lg-4 mb-30 col-md-6">
                            <div class="gallery-item">
                                <div class="gallery-img">
                                    <a class="image-popup" href="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217385/site-image/IMG_3182_xpxbot.jpg"><img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217385/site-image/IMG_3182_xpxbot.jpg" alt=""></a>
                                </div>
                                <div class="title">
                                    Lifting holy hands
                                </div>
                            </div>
                        </div> 
                            
                        @endif

                         
                   </div>
                </div> 
            </div>
            <!-- Events Section End -->


        </div> 
            <!-- Main content End --> 
          
  @endsection