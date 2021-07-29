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
							<h1 class="page-title">Join Our Services</h1>
							<ul>
								<li>
									<a class="active" href="{{ route('home') }}">Home</a>
								</li>
								<li>Join Our Services</li>
							</ul>
					</div>
			</div>
			<!-- Breadcrumbs End -->

			<!-- About Section Start -->
			<div id="rs-about" class="rs-about style1 pt-100 pb-100 md-pt-70 md-pb-70">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-5 order-last padding-0 md-pl-15 md-pr-15 md-mb-30">
							<div class="img-part">
								<img class="" src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217357/site-image/IMG_4004_urvgo6.jpg" alt="About Image">
							</div>
						</div>
						<div class="col-lg-7 pr-70 md-pr-15">
							<div class="sec-title">
								<h2 class="title mb-17">Join us on the following days,</h2>
								<div class="desc table-responsive">
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

								<div class="desc">

                                        <a href="https://facebook.com/therootofjesse" target="_blank" class="btn readon2 orange">Worship with us online</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Section End -->

			
        </div> 
        <!-- Main content End --> 

@endsection