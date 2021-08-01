@extends('layouts.app')

@section('content')


		<!-- Main content Start -->
		<div class="main-content">
			<!-- Breadcrumbs Start -->
			<div class="rs-breadcrumbs breadcrumbs-overlay">
					<div class="breadcrumbs-img">
							<img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1627783513/site-image/tithe_and_offering_on4rzs.jpg" alt="Breadcrumbs Image" style="height: 400px; object-fit: cover;">
					</div>
					<div class="breadcrumbs-text white-color disp-0">
							<h1 class="page-title">Giving & Donations</h1>
							<ul>
								<li>
									<a class="active" href="{{ route('home') }}">Home</a>
								</li>
								<li>Giving & Donations</li>
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
								<h4 class="title mb-17">A gift opens the way and ushers the giver into the presence  of the great - Prov. 18:16</h4>
								<div class="desc table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr>
                                                <td style="font-weight: bold;">Purpose</td>
                                                <td>Tithe/Offering</td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight: bold;">Bank</td>
                                                <td>Guarantee Trust Bank</td>
                                            </tr>
                                            <tr>
                                                <td style="font-weight: bold;">Account Information</td>
                                                <td>
                                                    Account Name: <span style="font-weight: bold;">RCCG Root of Jesse</span> <br>
                                                    Account Number: <span style="font-weight: bold;">0038608552</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

								<div class="desc">

                                        <a href="{{ route('more message') }}" class="btn readon2 orange">Message & Sermons</a>
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