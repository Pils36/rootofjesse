@extends('layouts.app')

@section('content')


		<!-- Main content Start -->
		<div class="main-content">
			<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217441/site-image/IMG_3673_ueyepo.jpg" alt="Breadcrumbs Image" style="height: 400px; object-fit: cover;">
					</div>
					<div class="breadcrumbs-text white-color">
							<h1 class="page-title">Store</h1>
							<ul>
								<li>
									<a class="active" href="{{ route('home') }}">Home</a>
								</li>
								<li>Store</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- CTA Section Start -->
			<div class="rs-cta style2 pt-100 pb-100 md-pt-70 md-pb-70">
				<div class="partition-bg-wrap inner-page">
					<div class="container">
						<div class="row y-bottom">
							<div class="col-lg-6 pb-50 md-pt-70 md-pb-70">
								<div class="video-wrap">
									
								</div>
							</div>
							<div class="col-lg-6 pl-62 pt-134 pb-150 md-pt-50 md-pb-50 md-pl-15">
								<div class="sec-title mb-40 md-mb-20">
										<h2 class="title mb-16">QUARTERLY MAGAZINE</h2>
										<div class="desc">You can download our quarterly magazines here</div>
								</div>
								<div class="btn-part">
										<a class="readon2 orange" href="javascript:void(0)" download="">Download</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CTA Section End -->

			
        </div> 
        <!-- Main content End --> 

@endsection