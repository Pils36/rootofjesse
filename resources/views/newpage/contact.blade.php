@extends('layouts.app')

@section('content')

		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1625217471/site-image/IMG_3414_tlepbu.jpg" alt="Breadcrumbs Image" style="height: 400px; object-fit: cover;">
                </div>
                <div class="breadcrumbs-text white-color padding">
                    <h1 class="page-title white-color">Contact Us</h1>
                    <ul>
                        <li>
                            <a class="active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- Contact Section Start -->
    		<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            	<div class="container">
            		<div class="row rs-contact-box mb-90 md-mb-50">
        				<div class="col-lg-4 col-md-12-4 lg-pl-0 sm-mb-30 md-mb-30">
        					<div class="address-item">
        						<div class="icon-part">
        							<img src="{{ asset('new/assets/images/contact/icon/1.png') }}" alt="">
        						</div>
        						<div class="address-text">
                                    <span class="label">Address</span>
                                    <span class="des">2b Degema close, Rumuibekwe Port Harcourt, Nigeria</span>
                                </div>
        					</div>
        				</div>
                        <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30 md-mb-30">
                            <div class="address-item">
                                <div class="icon-part">
                                    <img src="{{ asset('new/assets/images/contact/icon/2.png') }}" alt="">
                                </div>
                                <div class="address-text">
                                    <span class="label">Email Address</span>
                                    <span class="des"><a href="mailto:info@therootofjessephc.com">info@therootofjessephc.com</a></span>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-4 col-md-12 lg-pl-0 sm-mb-30">
                            <div class="address-item">
                                <div class="icon-part">
                                    <img src="{{ asset('new/assets/images/contact/icon/3.png') }}" alt="">
                                </div>
                                <div class="address-text">
                                    <span class="label">Phone Number</span>
                                    <span class="des"><a href="tel:08033104890">080-331-048-90</a></span>
                                </div>
                            </div>
                        </div>
            		</div>
            		<div class="row align-items-center">
            			<div class="col-lg-6 md-mb-30">
            				<!-- Map Section Start --> 
                            <div class="contact-map3">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d4064226.6368307164!2d2.960535128074049!3d5.859655540017993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d6.5953588!2d3.3639538!4m5!1s0x1069cd9cb66ff4a5%3A0x26d8a3c86a884a05!2s2b%20Degema%20Close%2C%20Obia%2C%20Port%20Harcourt!3m2!1d4.846119799999999!2d7.0456864999999995!5e0!3m2!1sen!2sng!4v1625216090561!5m2!1sen!2sng" style="border:0; width:100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
            			</div>
            			<div class="col-lg-6 pl-60 md-pl-15">
			        		<div class="contact-comment-box">
			        			<div class="inner-part">
                                    <h2 class="title mb-mb-15">Get In Touch</h2>
                                    <p>Send us your requests</p>
                                </div>
			                    <div id="form-messages"></div>
								<form method="post" action="{{ route('message us') }}">
                                    @csrf
									<fieldset>
										<div class="row">
                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                            </div> 
                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="email" name="email" placeholder="Email" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="phone" name="telephone" placeholder="Phone" required="">
                                            </div>   
                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                                            </div>
                                         
                                            <div class="col-lg-12 mb-50">
                                                <textarea class="from-control" id="message" name="message" placeholder=" Message" required=""></textarea>
                                            </div>
										</div>
										<div class="form-group mb-0">
											<input class="btn-send" type="submit" value="Submit Now">
										</div>										   
									</fieldset>
								</form>
			        		</div>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- Contact Section End -->  

            
        </div> 
        <!-- Main content End --> 

@endsection