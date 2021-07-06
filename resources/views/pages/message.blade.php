@extends('layouts.app')

@section('content') 

    <section class="page-banner-wrap bg-cover" style="background-image: url('https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217439/site-image/IMG_3457_y8cgl8.jpg')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-heading text-white">
                        <div class="sub-title">
                            <h4><strong>The Chosen Generations</strong></h4>
                        </div>
                        <div class="page-title">
                            <h1>Messages Preached</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Messages Preached</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="upcoming-events-wrap section-padding">
        <div class="container">
            

            <div class="row grid">

                @if (count($data['messages']) > 0)
                    @foreach ($data['messages'] as $messages)
                        <div class="col-12 col-lg-6 col-xl-12 water proevent grid-item">
                            <div class="single-event-ticket row align-items-center">
                                <div class="col-xl-4">
                                    <div class="event-featured-cover bg-cover" style="background-image: url('{{ $messages->album_art }}')">
                                        <div class="event-time-address">
                                            <span><i class="fal fa-calendar-alt"></i>{{ date('d F Y', strtotime($messages->created_at)) }}</span>
                                            <span><i class="fal fa-map-marker-alt"></i>{{ $messages->minister }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 pr-xl-0">
                                    <div class="event-info">
                                        <h2><a href="event-details.html">{{ $messages->title }}</a></h2>
                                        <p>{!! (strlen($messages->description) < 500) ? $messages->description : substr($messages->description, 0, 500)."..." !!}</p>

                                        <audio class="mt-10" style="width: 100%" controls src="{{ $messages->message }}"> Your browser  does not support the <code>audio</code> element. </audio>

                                    </div>
                                </div>
                                
                            </div> <!-- single-event-ticket -->
                        </div> 
                    @endforeach
                @else
                    <div class="col-12 col-lg-6 col-xl-12 water proevent grid-item">
                        <center>
                            <h4>No new message</h4>
                        </center>
                    </div> 
                @endif


               
            </div>

            <div class="row align-items-center">
                <div class="col-12 col-lg-12 text-center">
                    <div class="causes-page-nav mt-50 causes-pages-link">
                        <ul>
                            <li>
                                {{ $data['messages']->links() }}
                            </li>
                        </ul>
                    </div><!-- /.blog-page-nav -->
                </div> <!-- /.col-12 col-lg-12 -->  
            </div>
        </div>
    </section>
@endsection