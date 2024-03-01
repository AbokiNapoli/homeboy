@extends('layouts.fronttwo')
@section('content')

		<!--Banner Section ======================-->
		<section class="banner-section banner-1 banner-2 position-relative parallax">		
			<div class="container">
				<div class="banner-wrapper d-flex gap-20 gap-lg-40 justify-content-center align-items-lg-center flex-column">
					<h2 class="banner-heading display-3 fw-extra-bold custom-jakarta mb-0">Contack us</h2>
					<nav aria-label="breadcrumb">
						<ol class="blog-breadcrumb breadcrumb">
							<li class="breadcrumb-item"><a href="home-1.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Contack us</li>
						</ol>
					</nav>
				</div>
			</div>								
		</section>
		<!--Banner Section ======================-->
	<!--About Section ======================-->
	<!-- <section class="about-section about-1 pt-50 pt-lg-100 pt-xxl-150">
		<div class="container">
			<div class="row gy-50 gy-lg-0 gx-80 justify-content-lg-between align-items-lg-center">
				<div class="col-lg-6">
					<div>
						<div class="section-title section-title-style-2 mb-4 mb-lg-30 mb-xxl-40">	
							<h3 class="sub-title display-3 fw-extra-bold primary-text-shadow custom-roboto">Eventiva</h3>
						</div>
						<h1 class="display-5 custom-jakarta fw-extra-bold mb-0">
							Where music and magic unite for unforgettable experiences
						</h1>								
						<a href="#ticket" class="btn btn-gradient d-inline-flex align-items-center gap-2 mt-4 mt-lg-40 mt-xxl-60" aria-label="buttons"><span class="buttons-logo"><svg width="25" height="25"><use xlink:href="#buttons-logo"></use></svg></span>Get Ticket</a>
					</div>					
				</div>
				<div class="col-lg-6">
					<div class="about-content-wrapper position-relative">
						<div class="about-image-1 position-relative">
							<div class="about-image-wrapper">
								<img src="assets/images/home-1/about-image-1.jpg" class="img-fluid" alt="img">
							</div>
							<div class="video-popup video-popup-center position-absolute">
								<div class="circle-wrapper">
									<div class="circle-bg"></div>
									<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="inner-circle video-icon video-popup-link">
										<span class=""><svg width="30" height="30"><use xlink:href="#video-icon"></use></svg></span>	
									</a>																	
									<div class="rotate-text2 text-uppercase">
										<p>Where Melodies Unite Hearts Harmonia-</p>	 
									</div>
								</div>
							</div>
							
						</div>
						<div class="about-image-2">									
						</div>
						<div class="ellipse-image-1">
							<img src="assets/images/home-1/ellipse-1.png" class="img-fluid" alt="img">
						</div>
					</div>
				</div>
			</div>					
		</div>
	</section> -->
	<!--About Section ======================-->

	


	<!--Contact Section ======================-->
	<section class="contact-section contact-page pt-70 pt-lg-120 pt-xxl-150">
		<div class="container">
			<div class="row gy-20 gy-lg-0 align-items-lg-end justify-content-lg-between mb-30 mb-lg-70">
				<div class="col-lg-5">
					<div class="section-title section-title-style-2">
						<span class="fs-3 straight-line-wrapper fw-semibold position-relative"> <span class="straight-line"></span>Contact</span>
						<h2 class="title display-3 fw-extra-bold mb-n2 text-opacity"></h2>
						<h3 class="sub-title display-3 fw-extra-bold primary-text-shadow">Get In Touch</h3>						
					</div>
					<!-- section-title -->
				</div>
				<div class="col-lg-5">
					<div class="highlights-text">
						<p class="custom-roboto text-lg-end">
							Immerse in mesmerizing performances,vibrant soundscapes,and interactive art at our music extravaganza. Experience a festival atmosphere like no other, where unforgettable moments.
						</p>
					</div>
				</div>
			</div>
			<!-- row -->
			<div class="contact-us-form">
				<form action="#">						
					<div class="row gx-5 gy-4 gy-lg-5">		
						<div class="col-lg-6">
							<input type="text" class="form-control" id="firstName" placeholder="First Name *" required>							  
						</div>

						<div class="col-lg-6">												
							<input type="text" class="form-control" id="lastName" placeholder="Last Name *">									  
						</div>
											
						<div class="col">												
							<input type="email" class="form-control" placeholder="Email" required>																	
						</div>
							
						<div class="col-12">											
							<textarea class="form-control" placeholder="Your Comment" id="form-textarea" style="height: 100px"></textarea>											
						</div>

						<div class="col-12">									
							<button type="submit" class="btn btn-gradient d-inline-flex" aria-label="buttons">Submit</button>
						</div>
					</div>
					<!-- row -->
				</form>
			</div>
			<!-- contact-us-form -->					
		</div>
		<!-- container -->
	</section>
	<!--Contact Section ======================-->	
@endsection