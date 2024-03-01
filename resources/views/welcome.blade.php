@extends('layouts.front')
@section('content')
    <div class="main"  data-bs-spy="scroll" data-bs-target="#navContentmenu" data-bs-root-margin="0px 0px -50%" data-bs-smooth-scroll="true">


        <!--Hero Section ======================-->
        <section class="hero-section hero-3 position-relative">	
            <div class="hero-wrapper mx-auto position-relative parallax">					
                <div class="hero-inner-text position-relative">	
                    <div class="hero-6-texts">							
                        <!-- <img src="assets/images/home-3/musicfest-2.png" class="musicfest-image mb-10" alt="img"> -->
                        <h1 class="custom-poppins extra-huge-text-1 text-primary fw-extra-huge-bold text-uppercase mb-0">Homeboy</h1>							
                        <h2 class="custom-poppins extra-huge-text-2 fw-extra-bold">2024</h2>
                    </div>
                    <div class="circle-wrapper hero-3-circle">
                        <div class="star-icon">
                            <span><svg width="47" height="42"><use xlink:href="#star-icon"></use></svg></span>
                        </div>
                        <div class="circle-bg"></div>
                        <div class="rotate-text text-uppercase">
                            <p>Bra HomeBoy THE MCS GENERAL</p>	 
                        </div>
                    </div>
                </div>	
                <div class="social-links">
                    <a class="d-flex gap-2 gap-xxl-20 align-items-center text-decoration-none" href="#">
                        <span class="facebook-icon"><svg width="36" height="36"><use xlink:href="#facebook-icon-2"></use></svg></span>
                        <h3 class="fw-bold">fb.com/</h3>
                    </a>
                    <a class="d-flex gap-2 gap-xxl-20 align-items-center text-decoration-none" href="https://www.instagram.com/" target="_blank"> 
                        <img src="assets/images/instagram-logo.svg" alt="img" style="width: 34px;">
                        <h3 class="fw-bold">instagram.com/</h3>
                    </a>
                    <a class="d-flex gap-2 gap-xxl-20 align-items-center text-decoration-none" href="https://www.youtube.com/" target="_blank">
                        <span class="youtube-icon"><svg width="36" height="36"><use xlink:href="#youtube-icon-2"></use></svg></span>
                        <h3 class="fw-bold">youtube.com/</h3>
                    </a>
                </div>								
            </div>				
        </section>
        <!--Hero Section ======================-->


        <!--Countdown Section ======================-->
        <!-- <div class="countdown-section py-5 py-lg-50 py-xl-70 position-relative">
            <div class="container"> -->
                <!--CountDown Section ======================-->			
                <!-- <div class="countdown">
                    <div class="row row-cols-2 row-cols-lg-3 row-cols-xl-4 justify-content-between align-items-center">
                        <div class="col">
                            <div class="countdown-item">
                                <span class="countdown-number text-primary custom-jakarta" id="days">00</span>
                                <span class="countdown-label countdown-text-stroke text-opacity custom-roboto">Days</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="countdown-item">
                                <span class="countdown-number text-primary custom-jakarta" id="hours">00</span>
                                <span class="countdown-label countdown-text-stroke text-opacity custom-roboto">Hours</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="countdown-item">
                                <span class="countdown-number text-primary custom-jakarta" id="minutes">00</span>
                                <span class="countdown-label countdown-text-stroke text-opacity custom-roboto">Minutes</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="countdown-item">
                                <span class="countdown-number text-primary custom-jakarta" id="seconds">00</span>
                                <span class="countdown-label countdown-text-stroke text-opacity custom-roboto">Seconds</span>
                            </div>
                        </div>
                    </div>
                </div>	 -->
            <!-- </div>
        </div> -->
        <!--Countdown Section ======================-->
        <!--Scroll Section ======================-->
        <div class="scroll-section py-30 py-lg-50 position-relative" >				
            <div class="marquee-elements">
                <div class="scroll-elements">
                    <span class="scroll-items js-elements">
                        <span class="scroll-light-text fs-180 fw-extra-bold text-uppercase d-flex gap-10 mb-0"><span>GENERAL</span>
                        <span class="mx-10 mx-lg-4">/</span><span class="primary-text-shadow me-30 me-lg-50">MC'S</span> </span>
                    </span>						
                </div>					
            </div>			
        </div>
        <!--Scroll Section ======================-->


        <!--About Section ======================-->
        <section id="about" class="about-section about-3 pb-50 pb-lg-100">
            <div class="container">
                <div class="row gx-30 gx-xxl-70 gy-lg-0 gy-40 align-items-center">
                    <div class="col-lg-4 col-xl-5">
                        <div class="about-3-image">
                            <!-- <img src="assets/images/home-6/about-3-image.jpg" class="img-fluid rounded-5" alt="about-image"> -->
                            <img src="assets/images/home-3/hb3.jpeg" class="img-fluid rounded-5" alt="about-image">
                        </div>
                    </div>
                    <!-- col-5 -->
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-title mb-30 mb-xxl-40">
                            <span class="fs-3 straight-line-wrapper fw-semibold position-relative"> <span class="straight-line"></span>About The Nyam Ne Bossu</span>
                            <h2 class="title display-3 fw-extra-bold d-flex flex-column">
                                <span class="mb-n2 text-opacity">Bra</span>
                                <span class="sub-title fw-extra-bold text-primary">Homeboy</span> 
                            </h2>								
                            <p class="custom-jakarta custom-font-style-2 mb-0 mt-30">
                                Experience Harmonia: where melodies transcend boundaries. Immerse in captivating performances that ignite the stage. Unleash your musical senses and embrace rhythmic bliss.
                            </p>							
                        </div>														
                        <!-- section-title -->
                        <!-- <div class="about-3-text d-flex flex-column flex-lg-row gap-4 justify-content-between align-items-lg-center mb-40 mb-xl-80 mb-xxl-100">
                            <div>
                                <h4 class="fw-extra-bold custom-jakarta">25-28 Dec, 2023</h4>
                                <p class="custom-jakarta custom-font-style-2 fw-semibold mb-0">4pm-12am</p>
                            </div>
                            <div>
                                <h4 class="text-uppercase fw-extra-bold custom-jakarta">Basement</h4>
                                <p class="custom-jakarta custom-font-style-2 fw-semibold mb-0">135 W, 46nd Street, New York</p>
                            </div>
                        </div> -->
                        <!-- about-3-text -->
                        <div class="event-counter">
                            <div class="row row-cols-2 row-cols-md-3 gy-lg-0 gy-4 justify-content-between">
                                <div class="col">
                                    <div class="d-flex align-items-center gap-1 gap-lg-2">
                                        <span class="odometer text-primary display-2" data-count-to=30></span>
                                        <h3 class="fw-extra-bold d-flex flex-column mb-0 custom-jakarta"><span>Event</span><span>Artists</span></h3>
                                    </div>									
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center gap-1 gap-lg-2">
                                        <span class="odometer text-primary display-2" data-count-to=10></span>
                                        <h3 class="fw-extra-bold d-flex flex-column mb-0 custom-jakarta"><span>Event</span><span>Stages</span></h3>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="d-flex align-items-center gap-1 gap-lg-2">
                                        <span class="odometer text-primary display-2" data-count-to=13></span>
                                        <h3 class="fw-extra-bold d-flex flex-column mb-0 custom-jakarta"><span>Days</span><span>Concert</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
        </section>

        <!--About Section ======================-->


        <!--Highlights Section ======================-->
        <section class="highlight-section highlight-2 pb-50 pb-lg-100 pb-xxl-120">
            <div class="container position-relative">					
                <div class="row gy-4 gy-lg-0 align-items-lg-end justify-content-lg-between mb-30 mb-lg-70">
                    <div class="col-lg-5">
                        <div class="section-title">
                            <span class="fs-3 straight-line-wrapper fw-semibold position-relative"> <span class="straight-line"></span>Highlights</span>
                            <h2 class="title display-3 fw-extra-bold d-flex flex-column">
                                <span class="mb-n2 text-opacity">Our</span>
                                <span class="sub-title fw-extra-bold text-primary">services</span> 
                                <!-- Extravaganza  -->
                            </h2>													
                        </div>														
                        <!-- section-title -->
                    </div>
                    <div class="col-lg-5">
                        <div class="highlights-text">
                            <p class="custom-jakarta custom-font-style-2 text-lg-end mb-2">
                                Immerse in mesmerizing performances, vibrant soundscapes and interactive art at our music extravaganza. Experience a festival atmosphere like no other.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-30">
                    <div class="col">
                        <a href="#" class="highlights-item-3 text-decoration-none position-relative d-flex flex-column gap-20 px-30 px-lg-40 py-40 py-lg-50">
                            <div class="highlights-icon-style-1">
                                <svg width="68" height="64"><use xlink:href="#highlights-icon-1"></use></svg>
                            </div>
                            <h3 class="fw-extra-bold mb-0 custom-jakarta">Weddings</h3>	
                            <p class="custom-jakarta custom-font-style-2">
                                Experience a diverse array of musical genres of talented artists.
                            </p>
                        </a>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <a href="#" class="highlights-item-3 text-decoration-none position-relative d-flex flex-column gap-20 px-30 px-lg-40 py-40 py-lg-50">
                            <div class="highlights-icon-style-1">
                                <svg width="58" height="68"><use xlink:href="#highlights-icon-2"></use></svg>
                            </div>
                            <h3 class="fw-extra-bold mb-0 custom-jakarta">Birthdays</h3>	
                            <p class="custom-jakarta custom-font-style-2">
                                Immerse yourself in captivating live performances that ignite the stage
                            </p>
                        </a>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <a href="#" class="highlights-item-3 text-decoration-none position-relative d-flex flex-column gap-20 px-30 px-lg-40 py-40 py-lg-50">
                            <div class="highlights-icon-style-1">
                                <svg width="60" height="68"><use xlink:href="#highlights-icon-3"></use></svg>
                            </div>
                            <h3 class="fw-extra-bold mb-0 custom-jakarta">Cooperate Events</h3>	
                            <p class="custom-jakarta custom-font-style-2">
                                Easily plan your day with an interactive event schedule.
                            </p>
                        </a>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <a href="#" class="highlights-item-3 text-decoration-none position-relative d-flex flex-column gap-20 px-30 px-lg-40 py-40 py-lg-50">
                            <div class="highlights-icon-style-1">
                                <svg width="68" height="68"><use xlink:href="#highlights-icon-4"></use></svg>
                            </div>
                            <h3 class="fw-extra-bold mb-0 custom-jakarta">Weddings</h3>	
                            <p class="custom-jakarta custom-font-style-2">
                                Indulge in a delightful culinary journey with a variety of food and beverage.
                            </p>
                        </a>
                    </div>
                    <!-- col -->
                    <div class="col">
                        <a href="#" class="highlights-item-3 text-decoration-none position-relative d-flex flex-column gap-20 px-30 px-lg-40 py-40 py-lg-50">
                            <div class="highlights-icon-style-1">
                                <svg width="68" height="68"><use xlink:href="#highlights-icon-5"></use></svg>
                            </div>
                            <h3 class="fw-extra-bold mb-0 custom-jakarta">Weddigs</h3>	
                            <p class="custom-jakarta custom-font-style-2">
                                Beyond music, engage in a range of activities.
                            </p>
                        </a>
                    </div>
                    <!-- col -->
                    <!-- <div class="col">
                        <div class="highlights-link position-relative d-flex align-items-center justify-content-center h-100">
                            <a href="#" class="text-decoration-none d-flex gap-10">
                                <span class="fs-4 fw-extra-bold custom-jakarta">See More</span>
                                <span class="arrow-up-short"><svg width="30" height="29"><use xlink:href="#arrow-up-short"></use></svg></span>
                            </a>								
                        </div>
                    </div> -->
                    <!-- col -->
                </div>
                <!-- row -->

            </div>
        </section>
        <!--Highlights Section ======================-->


        <!--LineUp Section ======================-->
        <section id="line-up" class="lineup-section lineup-2 subscription-2 pt-40 pb-100 pt-lg-100 pb-lg-130 pt-xxl-120 pb-xxl-180 mb-20">	
            
            <div class="container">
                <div class="row gx-60 gx-xxl-80 gy-30 align-items-center">
                    <div class="col-lg-4">
                        <div class="lineup-right-content mt-3 mt-lg-0">
                            <div class="section-title mb-4 mb-lg-30 mb-xxl-40">
                                <span class="fs-3 straight-line-wrapper fw-semibold position-relative"> <span class="straight-line"></span>Our</span>
                                <h2 class="title display-3 fw-extra-bold d-flex flex-column">
                                    <span class="mb-n2 text-opacity">Endorsements and</span>
                                    <span class="sub-title fw-extra-bold text-primary">Hype</span> 
                                </h2>								
                            </div>			
                            <!-- section-title -->
                            <p class="custom-jakarta custom-font-style-2 mb-4 mb-lg-30">
                                Unleash the rhythm with an extraordinary lineup. Get ready for a musical extravaganza that will captivate your senses. 
                            </p>							

                            <div class="py-2 pb-lg-0 pt-lg-3">
                                <a href="#" class="download-link d-flex align-items-center gap-30" aria-label="buttons">See More<span class="ticket-arrow arrow-up-right"><svg width="32" height="32"><use xlink:href="#arrow-up-right"></use></svg></span></a>
                            </div>
                        </div>
                        <!-- lineup-right-content -->
                    </div>
                    <!-- col-5 -->
                    <div class="col-lg-8">
                        <div class="swiper-custom-progress progress-style-1 position-relative">
                            <div class="swiper lineup-swiper">
                                <div class="swiper-wrapper"> 
                                    <a href="https://www.youtube.com/watch?v=ecPfXqweOmE" class="video-popup-link">
                                    <div class="swiper-slide">
                                        <div class="lineup-image-wrapper position-relative">
                                            <div class="lineup-image lineup-image-style-2">
                                                <img src="assets/images/home-3/jdumel.jpeg" class="img-fluid" alt="lineup-image"> 
                                            </div>		
                                            <div class="lineup-image-hover">
                                                <p class="author-name">John Dumelo</p>
                                                <div class="line-up-hover-content">
                                                    <h5 class="fw-medium mb-20">Personality : <span class="text-uppercase">Actor</span></h5>
                                                    <div class="line-up-icons d-flex align-items-center gap-3 gap-lg-20">
                                                        <a href="#" class="facebook-icon" aria-label="facebook"><svg width="20" height="20"><use xlink:href="#facebook-icon"></use></svg></a>
                                                        <a href="#" class="instagram-icon" aria-label="instagram"><svg width="20" height="20"><use xlink:href="#instagram-icon"></use></svg></a>
                                                        <a href="youtube.com" class="youtube-icon" aria-label="youtube"><svg width="20" height="20"><use xlink:href="#youtube-icon"></use></svg></a>
                                                        <a href="#" class="spotify-icon" aria-label="spotify"><svg width="20" height="20"><use xlink:href="#spotify-icon"></use></svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- lineup-image-hover -->
                                        </div>		
                                        <!-- lineup-image-wrapper -->
                                    </div>
                                    </a>
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="lineup-image-wrapper position-relative">
                                            <div class="lineup-image lineup-image-style-2">
                                                <img src="assets/images/home-1/lineup-image-5.jpg" class="img-fluid" alt="lineup-image">
                                            </div>												
                                            <div class="lineup-image-hover">
                                                <p class="author-name">Orion Ryder</p>
                                                <div class="line-up-hover-content">
                                                    <h5 class="fw-medium mb-20">Genere : <span class="text-uppercase">rock</span></h5>
                                                    <div class="line-up-icons d-flex align-items-center gap-3 gap-lg-20">
                                                        <a href="#" class="facebook-icon" aria-label="facebook"><svg width="20" height="20"><use xlink:href="#facebook-icon"></use></svg></a>
                                                        <a href="#" class="instagram-icon" aria-label="instagram"><svg width="20" height="20"><use xlink:href="#instagram-icon"></use></svg></a>
                                                        <a href="#" class="youtube-icon" aria-label="youtube"><svg width="20" height="20"><use xlink:href="#youtube-icon"></use></svg></a>
                                                        <a href="#" class="spotify-icon" aria-label="spotify"><svg width="20" height="20"><use xlink:href="#spotify-icon"></use></svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- lineup-image-hover -->
                                        </div>						
                                        <!-- lineup-image-wrapper -->																	
                                    </div>
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="lineup-image-wrapper position-relative">
                                            <div class="lineup-image lineup-image-style-2">
                                                <img src="assets/images/home-1/lineup-image-6.jpg" class="img-fluid" alt="lineup-image">
                                            </div>
                                            <div class="lineup-image-hover">
                                                <p class="author-name">Electra Nova</p>
                                                <div class="line-up-hover-content">
                                                    <h5 class="fw-medium mb-20">Genere : <span class="text-uppercase">hip-hop</span></h5>
                                                    <div class="line-up-icons d-flex align-items-center gap-3 gap-lg-20">
                                                        <a href="#" class="facebook-icon" aria-label="facebook"><svg width="20" height="20"><use xlink:href="#facebook-icon"></use></svg></a>
                                                        <a href="#" class="instagram-icon" aria-label="instagram"><svg width="20" height="20"><use xlink:href="#instagram-icon"></use></svg></a>
                                                        <a href="#" class="youtube-icon" aria-label="youtube"><svg width="20" height="20"><use xlink:href="#youtube-icon"></use></svg></a>
                                                        <a href="#" class="spotify-icon" aria-label="spotify"><svg width="20" height="20"><use xlink:href="#spotify-icon"></use></svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- lineup-image-hover -->
                                        </div>					
                                        <!-- lineup-image-wrapper -->														
                                    </div> 
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="lineup-image-wrapper position-relative">
                                            <div class="lineup-image lineup-image-style-2">
                                                <img src="assets/images/home-1/lineup-image-4.jpg" class="img-fluid" alt="lineup-image">
                                            </div>
                                            <div class="lineup-image-hover">
                                                <p class="author-name">Luna Echo</p>
                                                <div class="line-up-hover-content">
                                                    <h5 class="fw-medium mb-20">Genere : <span class="text-uppercase">pop</span></h5>
                                                    <div class="line-up-icons d-flex align-items-center gap-3 gap-lg-20">
                                                        <a href="#" class="facebook-icon" aria-label="facebook"><svg width="20" height="20"><use xlink:href="#facebook-icon"></use></svg></a>
                                                        <a href="#" class="instagram-icon" aria-label="instagram"><svg width="20" height="20"><use xlink:href="#instagram-icon"></use></svg></a>
                                                        <a href="#" class="youtube-icon" aria-label="youtube"><svg width="20" height="20"><use xlink:href="#youtube-icon"></use></svg></a>
                                                        <a href="#" class="spotify-icon" aria-label="spotify"><svg width="20" height="20"><use xlink:href="#spotify-icon"></use></svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- lineup-image-hover -->												
                                        </div>					
                                        <!-- lineup-image-wrapper -->																									
                                    </div>
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="lineup-image-wrapper position-relative">
                                            <div class="lineup-image lineup-image-style-2">
                                                <img src="assets/images/home-1/lineup-image-5.jpg" class="img-fluid" alt="lineup-image">
                                            </div>
                                            <div class="lineup-image-hover">
                                                <p class="author-name">Orion Ryder</p>
                                                <div class="line-up-hover-content">
                                                    <h5 class="fw-medium mb-20">Genere : <span class="text-uppercase">rock</span></h5>
                                                    <div class="line-up-icons d-flex align-items-center gap-3 gap-lg-20">
                                                        <a href="#" class="facebook-icon" aria-label="facebook"><svg width="20" height="20"><use xlink:href="#facebook-icon"></use></svg></a>
                                                        <a href="#" class="instagram-icon" aria-label="instagram"><svg width="20" height="20"><use xlink:href="#instagram-icon"></use></svg></a>
                                                        <a href="#" class="youtube-icon" aria-label="youtube"><svg width="20" height="20"><use xlink:href="#youtube-icon"></use></svg></a>
                                                        <a href="#" class="spotify-icon" aria-label="spotify"><svg width="20" height="20"><use xlink:href="#spotify-icon"></use></svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- lineup-image-hover -->
                                        </div>	 
                                        <!-- lineup-image-wrapper -->
                                    </div>
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="lineup-image-wrapper position-relative">
                                            <div class="lineup-image lineup-image-style-2">
                                                <img src="assets/images/home-1/lineup-image-6.jpg" class="img-fluid" alt="lineup-image">
                                            </div>
                                            <div class="lineup-image-hover">
                                                <p class="author-name">Electra Nova</p>
                                                <div class="line-up-hover-content">
                                                    <h5 class="fw-medium mb-20">Genere : <span class="text-uppercase">hio-hop</span></h5>
                                                    <div class="line-up-icons d-flex align-items-center gap-3 gap-lg-20">
                                                        <a href="#" class="facebook-icon" aria-label="facebook"><svg width="20" height="20"><use xlink:href="#facebook-icon"></use></svg></a>
                                                        <a href="#" class="instagram-icon" aria-label="instagram"><svg width="20" height="20"><use xlink:href="#instagram-icon"></use></svg></a>
                                                        <a href="#" class="youtube-icon" aria-label="youtube"><svg width="20" height="20"><use xlink:href="#youtube-icon"></use></svg></a>
                                                        <a href="#" class="spotify-icon" aria-label="spotify"><svg width="20" height="20"><use xlink:href="#spotify-icon"></use></svg></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- lineup-image-hover -->
                                        </div>			
                                        <!-- lineup-image-wrapper -->
                                    </div> 
                                    <!-- swiper-slide-->	
                                </div>
                                <!-- swiper-wrapper -->
                            </div>
                            <!-- swiper -->
                            <div class="lineup-swiper-pagination"></div>
                            
                            <div class="swiper-button-progress">								
                                <div class="swiper-button-next">
                                    <span class="chevron-right-icon"><svg width="12" height="14"><use xlink:href="#chevron-right-icon"></use></svg></span>
                                </div>
                                <div class="swiper-button-prev">
                                    <span class="chevron-left-icon"><svg width="12" height="14"><use xlink:href="#chevron-left-icon"></use></svg></span>
                                </div>								
                            </div>
                            <div class="ellipse-image-5">
                                <img src="assets/images/ellipse-5.png" class="img-fluid" alt="img">
                            </div>
                        </div>	
                    </div>
                    <!-- col-7 -->						
                </div>
                <!-- row -->
            </div>
            <!-- container -->	
        </section>
        <!--LineUp Section ======================-->
        
        
        


        


        <!--Pricing Section ======================-->
        <section id="pricing" class="pricing-section pricing-1 pt-lg-4 pb-50 pb-lg-100 pb-xxl-120">
            <div class="container">		
                <div class="row gy-4 gy-lg-0 align-items-lg-end justify-content-lg-between mb-30 mb-lg-70">
                    <div class="col-lg-4">
                        <div class="section-title">
                            <span class="fs-3 straight-line-wrapper fw-semibold position-relative"> <span class="straight-line"></span>Talk to Us</span>
                            <h2 class="title display-3 fw-extra-bold d-flex flex-column">
                                <span class="mb-n2 text-opacity">Nyame Ne</span>
                                <span class="sub-title fw-extra-bold text-primary">Bossu</span> 
                            </h2>													
                        </div>
                        <!-- section-title -->
                    </div>
                    <div class="col-lg-5">
                        <div class="highlights-text">
                            <p class="custom-jakarta custom-font-style-2 text-lg-end mb-2">
                                Unleash the rhythm with an extraordinary lineup. Get ready for a musical extravaganza that will captivate your senses. 
                            </p>
                        </div>
                    </div>
                </div>
                <!-- row -->			
                <div class="row gx-30 gy-50">
                    <div class="col-md-12 col-xl-16">
                        <div class="pricing-wrapper bg-ticket position-relative">
                            <div class="pricing-top-content">
                                <!-- <div class="pricing-icon mb-10">
                                    <svg width="55" height="49"><use xlink:href="#pricing-1-icon"></use></svg>
                                </div> -->
                                <center><h3 class="fw-semibold pricing-title">Please fill the form and we will reach out to you</h3></center>
                                <!-- <h3 class="mb-40">									
                                    <span class="display-2 fw-extra-bold text-primary me-10 custom-jakarta">$42</span><span class="fw-semibold pricing-subtitle">/ Person</span>
                                </h3> -->
                                <div class="subscription-form position-relative">
                                    <input type="text" class="form-control" id="subscriptionInput1" placeholder="Enter your name">
                                </div>
                                <hr>
                                <div class="subscription-form position-relative">
                                    <input type="email" class="form-control" id="subscriptionInput1" placeholder="Enter your Email">
                                </div>
                                <hr>
                                <div class="subscription-form position-relative">
                                    <input type="text" class="form-control" id="subscriptionInput1" placeholder="Enter your Phone Number">
                                </div>
                                <hr>
                                <div class="subscription-form position-relative">
                                    <textarea class="form-control" cols="30" rows="10" id="subscriptionInput1" placeholder="tell us about your event"></textarea>
                                </div>
                                <!-- <ul class="pricing-list list-unstyled d-flex flex-column gap-10">
                                    <li class="mb-0"><span class="check-icon"><svg width="16" height="16"><use xlink:href="#check-icon"></use></svg></span>Access to the Event</li>
                                    <li class="mb-0"><span class="check-icon"><svg width="16" height="16"><use xlink:href="#check-icon"></use></svg></span>Affordable Entertainment</li>
                                    <li class="mb-0"><span class="check-icon"><svg width="16" height="16"><use xlink:href="#check-icon"></use></svg></span>Shared Memories</li>
                                </ul> -->
                            </div>								
                            
                            <div class="pricing-separator">
                                <svg viewBox="0 0 420 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3632_1203)">
                                <g clip-path="url(#clip1_3632_1203)">
                                <path d="M30 -418H390C406.016 -418 419 -405.016 419 -389V8.63272C419 16.9435 414.514 24.6071 407.267 28.6754C390.261 38.222 390.261 62.702 407.267 72.2486C414.514 76.3169 419 83.9804 419 92.2912V190C419 206.016 406.016 219 390 219H30C13.9838 219 1 206.016 1 190V92.9604C1 84.3293 5.89026 76.4435 13.6218 72.607C31.9323 63.5211 31.9323 37.4029 13.6218 28.317C5.89026 24.4804 1 16.5946 1 7.9635V-389C1 -405.016 13.9837 -418 30 -418Z" stroke-width="2"/>
                                <line x1="28" y1="49" x2="394" y2="49"  stroke-width="2" stroke-dasharray="10 10"/>
                                </g>
                                </g>
                                <defs>
                                <clipPath id="clip0_3632_1203">
                                <rect width="420" height="100" fill="white"/>
                                </clipPath>
                                <clipPath id="clip1_3632_1203">
                                <rect width="420" height="616" fill="white" transform="translate(0 -419)"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </div>

                            <div class="pricing-bottom-content position-relative">
                                
                                <a href="#" class="btn btn-primary" aria-label="buttons">Submit</a>
                            </div>																
                        </div>
                    </div>						
                
                    <!-- <div class="col-md-6 col-xl-4">
                        <div class="pricing-wrapper bg-ticket position-relative">
                            <div class="pricing-top-content">
                                <div class="pricing-icon mb-10">
                                    <svg width="55" height="49"><use xlink:href="#pricing-2-icon"></use></svg>
                                </div>
                                <h3 class="fw-semibold pricing-title">VIP Experience</h3>
                                <h3 class="mb-40">									
                                    <span class="display-2 fw-extra-bold text-primary me-10 custom-jakarta">$100</span><span class="fw-semibold pricing-subtitle">/ Person</span>
                                </h3>
                                <ul class="pricing-list list-unstyled d-flex flex-column gap-10">
                                    <li class="mb-0"><span class="check-icon"><svg width="16" height="16"><use xlink:href="#check-icon"></use></svg></span>Premium Seating</li>
                                    <li class="mb-0"><span class="check-icon"><svg width="16" height="16"><use xlink:href="#check-icon"></use></svg></span>Backstage Access</li>
                                    <li class="mb-0"><span class="check-icon"><svg width="16" height="16"><use xlink:href="#check-icon"></use></svg></span>Artist Interaction</li>
                                </ul>
                            </div>
                            
                            <div class="pricing-separator">
                                <svg viewBox="0 0 420 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3632_1203)">
                                <g clip-path="url(#clip1_3632_1203)">
                                <path d="M30 -418H390C406.016 -418 419 -405.016 419 -389V8.63272C419 16.9435 414.514 24.6071 407.267 28.6754C390.261 38.222 390.261 62.702 407.267 72.2486C414.514 76.3169 419 83.9804 419 92.2912V190C419 206.016 406.016 219 390 219H30C13.9838 219 1 206.016 1 190V92.9604C1 84.3293 5.89026 76.4435 13.6218 72.607C31.9323 63.5211 31.9323 37.4029 13.6218 28.317C5.89026 24.4804 1 16.5946 1 7.9635V-389C1 -405.016 13.9837 -418 30 -418Z" stroke-width="2"/>
                                <line x1="28" y1="49" x2="394" y2="49"  stroke-width="2" stroke-dasharray="10 10"/>
                                </g>
                                </g>
                                <defs>
                                <clipPath id="clip0_3632_1203">
                                <rect width="420" height="100" fill="white"/>
                                </clipPath>
                                <clipPath id="clip1_3632_1203">
                                <rect width="420" height="616" fill="white" transform="translate(0 -419)"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </div>

                            <div class="pricing-bottom-content position-relative">
                                
                                <a href="#" class="btn btn-outline-primary" aria-label="buttons">Buy Now</a>
                            </div>																
                        </div>
                    </div>
                
                    <div class="col-md-6 col-xl-4">
                        <div class="pricing-wrapper bg-ticket position-relative">									
                            <div class="pricing-top-content">
                                <div class="pricing-icon mb-10">
                                    <svg width="55" height="49"><use xlink:href="#pricing-3-icon"></use></svg>
                                </div>
                                <h3 class="fw-semibold pricing-title">Student Discount</h3>
                                <h3 class="mb-40">									
                                    <span class="display-2 fw-extra-bold text-primary me-10 custom-jakarta">$25</span><span class="fw-semibold pricing-subtitle">/ Person</span>
                                </h3>
                                <ul class="pricing-list list-unstyled d-flex flex-column gap-10">
                                    <li class="mb-0"><span class="check-icon"><svg width="16" height="16"><use xlink:href="#check-icon"></use></svg></span>Affordable Access</li>
                                    <li class="mb-0"><span class="check-icon"><svg width="16" height="16"><use xlink:href="#check-icon"></use></svg></span> Cultural Enrichment</li>
                                    <li class="mb-0"><span class="check-icon"><svg width="16" height="16"><use xlink:href="#check-icon"></use></svg></span>Community Connection</li>
                                </ul>
                            </div>
                            
                            <div class="pricing-separator">
                                <svg viewBox="0 0 420 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_3632_1203)">
                                <g clip-path="url(#clip1_3632_1203)">
                                <path d="M30 -418H390C406.016 -418 419 -405.016 419 -389V8.63272C419 16.9435 414.514 24.6071 407.267 28.6754C390.261 38.222 390.261 62.702 407.267 72.2486C414.514 76.3169 419 83.9804 419 92.2912V190C419 206.016 406.016 219 390 219H30C13.9838 219 1 206.016 1 190V92.9604C1 84.3293 5.89026 76.4435 13.6218 72.607C31.9323 63.5211 31.9323 37.4029 13.6218 28.317C5.89026 24.4804 1 16.5946 1 7.9635V-389C1 -405.016 13.9837 -418 30 -418Z" stroke-width="2"/>
                                <line x1="28" y1="49" x2="394" y2="49"  stroke-width="2" stroke-dasharray="10 10"/>
                                </g>
                                </g>
                                <defs>
                                <clipPath id="clip0_3632_1203">
                                <rect width="420" height="100" fill="white"/>
                                </clipPath>
                                <clipPath id="clip1_3632_1203">
                                <rect width="420" height="616" fill="white" transform="translate(0 -419)"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </div>

                            <div class="pricing-bottom-content position-relative">
                                
                                <a href="#" class="btn btn-outline-primary" aria-label="buttons">Buy Now</a>
                            </div>																
                        </div>
                    </div> -->
                </div>									
            </div>
        </section>
        <!--Pricing Section ======================-->


        <!--Separator Section ======================-->
        <div class="container">
            <div class="separator"></div>
        </div>
        <!--Separator Section ======================-->


        <!--Sponsor Section ======================-->
        <section id="sponsor" class="sponsor-section sponsor-2 position-relative pt-50 pt-lg-100 pt-xxl-120">				
            <div class="container">			
                <div class="row gy-4 gy-lg-0 align-items-lg-end justify-content-lg-between mb-40 mb-lg-70">
                    <div class="col-lg-4">
                        <div class="section-title">
                            <span class="fs-3 straight-line-wrapper fw-semibold position-relative"> <span class="straight-line"></span>The Power Behind Us</span>
                            <h2 class="title display-3 fw-extra-bold d-flex flex-column">
                                <span class="mb-n2 text-opacity">Our</span>
                                <span class="sub-title fw-extra-bold text-primary">Contributors</span> 
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="highlights-text">
                            <p class="custom-jakarta custom-font-style-2 text-lg-end mb-2">
                                Elevating Events. Our valued partners and sponsors play a pivotal role in bringing our vision to life. We orchestrate an unforgettable music celebration that resonates.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- <div class="row gy-4 gy-lg-0 justify-content-lg-between mb-60 mb-lg-100">
                    <div class="col-lg-4">
                        <div class="sponsors-type">
                            <h2 class="fw-extra-bold mb-0">Platinum Sponsors</h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 g-20 g-lg-30 align-items-center">
                            <div class="col">
                                <a href="#" class="sponsor-wrapper">
                                    <img src="assets/images/brand-1.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="sponsor-wrapper">
                                    <img src="assets/images/brand-2.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="sponsor-wrapper">
                                    <img src="assets/images/brand-3.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="sponsor-wrapper">
                                    <img src="assets/images/brand-4.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="sponsor-wrapper">
                                    <img src="assets/images/brand-5.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="row gy-4 gy-lg-0 justify-content-lg-between mb-60 mb-lg-100">
                    <div class="col-lg-4">
                        <div class="sponsors-type">
                            <h2 class="fw-extra-bold mb-0">Gold Sponsors</h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 g-20 g-lg-30 align-items-center">
                            <div class="col">
                                <a href="#" class="sponsor-wrapper">
                                    <img src="assets/images/brand-6.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#"  class="sponsor-wrapper">
                                    <img src="assets/images/brand-7.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#"  class="sponsor-wrapper">
                                    <img src="assets/images/brand-8.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#"  class="sponsor-wrapper">
                                    <img src="assets/images/brand-9.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#"  class="sponsor-wrapper">
                                    <img src="assets/images/brand-10.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#"  class="sponsor-wrapper">
                                    <img src="assets/images/brand-11.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#"  class="sponsor-wrapper">
                                    <img src="assets/images/brand-12.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="row gy-4 gy-lg-0 justify-content-lg-between">
                    <div class="col-lg-4">
                        <div class="sponsors-type">
                            <h2 class="fw-extra-bold mb-0">Silver Sponsors</h2>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row row-cols-2 row-cols-md-2 row-cols-lg-3 g-20 g-lg-30 align-items-center">
                            <div class="col">
                                <a href="#" class="sponsor-wrapper">
                                    <img src="assets/images/brand-13.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="sponsor-wrapper">
                                    <img src="assets/images/brand-7.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="sponsor-wrapper">
                                    <img src="assets/images/brand-14.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="sponsor-wrapper">
                                    <img src="assets/images/brand-9.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="sponsor-wrapper">
                                    <img src="assets/images/brand-10.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="sponsor-wrapper">
                                    <img src="assets/images/brand-15.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                            <div class="col">
                                <a href="#" class="sponsor-wrapper">
                                    <img src="assets/images/brand-16.png" class="img-fluid" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <!--Sponsor Section ======================-->

        
        <!--Gallery Section ======================-->
        <div class="gallery-section gallery-1 py-50 py-lg-100 py-xxl-120">		
            <div class="swiper swiper_gallery">
                <div class="swiper-wrapper"> 
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video-popup-link hover-area" data-cursor-text="Video">
                                <img src="assets/images/gallery-1.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="assets/images/gallery-2.jpg" class="image-link hover-area" data-cursor-text="Image">
                                <img src="assets/images/gallery-2.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video-popup-link hover-area" data-cursor-text="Video">
                                <img src="assets/images/gallery-3.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="assets/images/gallery-4.jpg" class="image-link hover-area" data-cursor-text="Image">
                                <img src="assets/images/gallery-4.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video-popup-link hover-area" data-cursor-text="Video">
                                <img src="assets/images/gallery-5.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="assets/images/gallery-5.jpg" class="image-link hover-area" data-cursor-text="Image">
                                <img src="assets/images/gallery-5.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video-popup-link hover-area" data-cursor-text="Video">
                                <img src="assets/images/gallery-6.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                </div>
            </div>
            <!-- swiper-gallery -->

            <div class="swiper swiper_gallery2">
                <div class="swiper-wrapper"> 
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="assets/images/gallery-6.jpg" class="image-link hover-area" data-cursor-text="Image">
                                <img src="assets/images/gallery-6.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video-popup-link hover-area" data-cursor-text="Video">
                                <img src="assets/images/gallery-7.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="assets/images/gallery-8.jpg" class="image-link hover-area" data-cursor-text="Image">
                                <img src="assets/images/gallery-8.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video-popup-link hover-area" data-cursor-text="Video">
                                <img src="assets/images/gallery-9.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="assets/images/gallery-10.jpg" class="image-link hover-area" data-cursor-text="Image">
                                <img src="assets/images/gallery-10.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="video-popup-link hover-area" data-cursor-text="Video">
                                <img src="assets/images/gallery-11.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="gallery-image">
                            <a href="assets/images/gallery-1.jpg" class="image-link hover-area" data-cursor-text="Image">
                                <img src="assets/images/gallery-1.jpg" alt="img">
                            </a>				
                        </div>
                    </div>
                </div>
            </div>
            <!-- swiper-gallery2 -->			
        </div>
        <!--Gallery Section ======================-->

        <!--Merchandise Section ======================-->
        <section id="merchandise" class="merchandise-section merchandise-1 position-relative mb-50 mb-lg-100 mb-xxl-120 py-50 py-lg-100 py-xxl-120">
            <div class="container">
                <div class="row gy-4 gy-lg-0 align-items-lg-end justify-content-lg-between mb-40 mb-lg-70">
                    <div class="col-lg-4">
                        <div class="section-title">
                            <span class="fs-3 straight-line-wrapper fw-semibold position-relative"> <span class="straight-line"></span>The Shop</span>
                            <h2 class="title display-3 fw-extra-bold d-flex flex-column">
                                <span class="mb-n2 text-opacity">Our</span>
                                <span class="sub-title fw-extra-bold text-primary">Philantropic</span> 
                                <span class="mb-n2 text-opacity">works</span>
                            </h2>														
                        </div>
                        <!-- section-title -->
                    </div>
                    <div class="col-lg-5">
                        <div class="highlights-text">
                            <p class="custom-jakarta custom-font-style-2 text-lg-end mb-2">
                                We strive to make the world a better place not just is our works but actions.......
                            </p>
                        </div>
                    </div>
                </div>
                <!-- row -->

                <div class="merchandise-contents position-relative">
                    <div class="ellipse-image-4">
                        <img src="assets/images/ellipse-4.png" class="img-fluid" alt="img">
                    </div>
                    <div class="swiper merchandise-swiper py-20">							
                        <div class="swiper-wrapper"> 
                            <div class="swiper-slide">
                                <div class="merchandise-wrapper">
                                    <div class="merchandise-image mb-4">
                                        <img src="assets/images/home-6/visit.jpeg" alt="img">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div >
                                            <h5>Visit to Korlebu intensive care unit</h5>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- swiper-slide  -->
                            <div class="swiper-slide">
                                <div class="merchandise-wrapper">
                                    <div class="merchandise-image mb-4">
                                        <img src="assets/images/home-6/visit.jpeg" alt="img">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div >
                                            <h5>Visit to Korlebu intensive care unit</h5>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- swiper-slide  -->
                            <div class="swiper-slide">
                                <div class="merchandise-wrapper">
                                    <div class="merchandise-image mb-4">
                                        <img src="assets/images/home-6/visit.jpeg" alt="img">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div >
                                            
                                            <h5>Visit to Korlebu intensive care unit</h5>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- swiper-slide  -->
                            <div class="swiper-slide">
                                <div class="merchandise-wrapper">
                                    <div class="merchandise-image mb-4">
                                        <img src="assets/images/home-6/visit.jpeg" alt="img">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div >
                                            
                                            <h5>Visit to Korlebu intensive care unit</h5>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- swiper-slide  -->
                        </div>
                        <!-- swiper-wrapper -->
                    </div>
                    <!-- merchandise-swiper -->	
                </div>
                                
            </div>
        </section>
        <!--Merchandise Section ======================-->


    


        <!--CTA Section ======================-->
        <section class="cta-section cta-1 pb-50 pb-lg-100 pb-xxl-120">
            <div class="dark-wrapper-bg">
                <div class="container">
                    <div class="row gy-20 gy-lg-0 align-items-lg-center justify-content-lg-between">
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 class="fs-180-style-2 fw-extra-bold text-primary d-flex align-items-center gap-2 mb-0">
                                    <span class="odometer" data-count-to=30></span>
                                    <span class="d-flex flex-column cta-percent-off">
                                        <span class="cta-percent fw-extra-bold">%</span>
                                        <span class="cta-off fw-extra-bold">Off</span>
                                    </span>
                                </h2>
                                <div class="d-block d-lg-none">
                                    <div class="cta-icon">
                                        <a href="#ticket" aria-label="icons">
                                            <span class="arrow-up-right-big"><svg><use xlink:href="#arrow-up-right-big"></use></svg></span>
                                        </a>
                                    </div>
                                </div>
                            </div>	
                        </div>
                        <div class="col-lg-5">
                            <h2 class="cta-text ms-xl-n60 display-3 fw-extra-bold text-opacity">
                                Get a disount for early Valz booking!
                            </h2>
                        </div>
                        <div class="col-lg-3">
                            <div class="cta-icon d-none d-lg-block ms-xl-70 ms-xxl-100">
                                <a href="#ticket" aria-label="icons">
                                    <span class="arrow-up-right-big"><svg width="205" height="205"><use xlink:href="#arrow-up-right-big"></use></svg></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
            <!-- cta-wrapper -->
        </section>
        <!--CTA Section ======================-->


        <!--Subscription Section ======================-->
        <section class="subscription-section subscription-2 position-relative py-50 py-lg-70 py-xxl-100">				
            <div class="container">
                <div class="subscription-wrapper">
                    <div class="row justify-content-between gy-40 gy-lg-0">
                        <div class="col-lg-5">
                            <div class="subscription-left-content">
                                <div class="section-title mb-4 mb-lg-5">
                                    <span class="fs-3 straight-line-wrapper fw-semibold position-relative"> <span class="straight-line"></span>Join our Community</span>
                                    <h2 class="title display-3 fw-extra-bold d-flex flex-column">
                                        <span class="mb-n2 text-opacity">Sonic</span>
                                        <span class="sub-title fw-extra-bold text-primary">Dispatch</span> 
                                    </h2>											
                                </div>
                                <!-- section-title -->
                                <p class="custom-jakarta custom-font-style-2 mb-30">
                                    Become Part of Our Community and Receive Exclusive Updates, Special Offers, and Exciting News about our services Straight to Your Inbox.
                                </p>	
                                <form action="#">
                                    <div class="subscription-form position-relative">
                                        <input type="email" class="form-control" id="subscriptionInput1" placeholder="Enter your Email">
                                        <button class="subscription-form-arrow" type="submit"><svg width="37" height="38"><use xlink:href="#subscription-form-arrow"></use></svg></button>								  
                                    </div>
                                </form>
                            </div>
                            <!-- subscription-left-content -->
                        </div>
                        <!-- col-5 -->

                        <div class="col-lg-5">
                            <!-- <h3 class="straight-line-wrapper fw-semibold position-relative mb-20"> <span class="straight-line"></span>Harmonia Wayfinder</h3> -->
                            <!-- <div class="map-image parallax position-relative">
                                <span class="map-marker">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16"><path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>
                                </span>								

                                <div class="map-popup-content"><h3>Basement</h3><p>135W, 46nd Street, New York</p><a id="mapDirectionBtn" href="#" class="btn btn-primary btn-custom-dark btn-map-direction btn-sm d-flex align-items-center justify-content-center custom-roboto gap-10"  data-bs-toggle="modal" data-bs-target="#RoutingMapModal">Get Direction <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg></a></div>
                            </div> -->

                            <!-- Modal-Map -->
                            <!-- <div class="modal modal-fullscreen routing-map-modal fade" id="RoutingMapModal" tabindex="-1" aria-labelledby="RoutingMapLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="RoutingMapLabel">135 W, 46nd Street, New York</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <div id="RoutingMap"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- Modal-Map -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Subscription Section ======================-->

    </div>
@endsection