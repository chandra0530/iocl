@extends('user.layouts.user')

@push('css')
   

@endpush
@section('content')

        <!-- Start Main Slider -->
        <section id="main-slider">
            <!-- Carousel -->
            <div id="main-slide" class="main-slider carousel slide" data-ride="carousel">
                <!-- Carousel inner -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive" src="assets/images/slider/1.jpg" alt="slider">
                        <div class="container">
                            <div class="slider-content">
                                <div class="container">
                                    <h2 class="animated4">
                                        <span>Welcome To <strong>IOCL Family</strong></span>
                                    </h2>
                                    <p class="animated6 slide-para">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</span>
                                    </p>
                                    <p class="animated4">
                                        <a href="#" class="slider-btn cbiz-btn">Gallery</a>
                                        <a href="#" class="slider-btn cbiz-btn cbiz-btn-border">Events</a>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- /.container -->
                    </div> <!-- /.item -->
                    <div class="item">
                        <img class="img-responsive" src="assets/images/slider/2.jpg" alt="slider">
                        <div class="container">
                            <div class="slider-content">
                                <div class="container">
                                    <h2 class="animated2">
                                        <span>We Make Memorable <strong>Bonds</strong></span>
                                    </h2>
                                    <p class="animated3 slide-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    <p class="animated4">
                                    <a href="#" class="slider-btn cbiz-btn">Gallery</a>
                                        <a href="#" class="slider-btn cbiz-btn cbiz-btn-border">Events</a>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- /.container -->
                    </div> <!-- /.item -->
                    <div class="item">
                        <img class="img-responsive" src="assets/images/slider/3.jpg" alt="slider">
                        <div class="container">
                            <div class="slider-content">
                                <div class="container">
                                    <h2 class="animated5">
                                     <span>Welcome to Our <strong>Nest</strong></span>
                                    </h2>
                                    <p class="animated7 slide-para">
                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</span>
                                    </p>
                                    <p class="animated8">
                                    <a href="#" class="slider-btn cbiz-btn">Gallery</a>
                                        <a href="#" class="slider-btn cbiz-btn cbiz-btn-border">Events</a>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- /.container -->
                    </div> <!-- /.item -->

                </div>
                <!-- Carousel inner end-->

                <!-- Controls -->
                <a class="left carousel-control" href="#main-slide" data-slide="prev">
                    <span><i class="fa fa-angle-left"></i></span>
                </a>
                <a class="right carousel-control" href="#main-slide" data-slide="next">
                    <span><i class="fa fa-angle-right"></i></span>
                </a>
                <div class="click-to-next bottom-top-animation">
                    <i></i>
                </div>

            </div>
            <!-- /carousel -->
        </section> <!-- /.main-slider -->
        <!-- End Main Slider -->




<!-- new section -->






<section class="recent-blog section" id="news_section">
            <div class="container">    
                <div class="row">
                    <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                        <div class="section-heading">
                            <h2 class="title"><span>Our</span> Daily News</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                </div> <!-- /row -->
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="re-blog-item">
                            <div class="re-feature-img">
                                <img src="assets/images/post/1.jpg" alt="Features">
                            </div>
                            <div class="caption">
                                <a href="#"><h4 class="gen-title">Top 10 Tips for Design</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicingiu elit, sed eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                            <div class="re-time">
                                Dec 14, 2017
                            </div>
                        </div> <!-- /.re-blog-item -->
                    </div> <!-- /.col- -->
                    <div class="col-sm-6 col-md-4">
                        <div class="re-blog-item">
                            <div class="re-feature-img">
                                <img src="assets/images/post/2.jpg" alt="Features">
                            </div>
                            <div class="caption">
                                <a href="#"><h4 class="gen-title">Business Website Creation </h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicingiu elit, sed eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                            <div class="re-time">
                                Dec 14, 2017
                            </div>
                        </div> <!-- /.re-blog-item -->
                    </div> <!-- /.col- -->
                    <div class="col-sm-6 col-md-4">
                        <div class="re-blog-item">
                            <div class="re-feature-img">
                                <img src="assets/images/post/3.jpg" alt="Features">
                            </div>
                            <div class="caption">
                                <a href="#"><h4 class="gen-title">Best Developer Skills</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicingiu elit, sed eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                            <div class="re-time">
                                Dec 14, 2017
                            </div>
                        </div> <!-- /.re-blog-item -->
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->  
            </div> <!-- /.container -->
        </section>


        <section class="our-service section" id="our_events">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Our</span> Events</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						</div>
					</div>
				</div> <!-- /.row -->
			
			</div><!-- container -->
		</section>

        <section class="working">
			<div class="full-width-sec">
				<div class="container">    
					<div class="row">
						<div class="col-sm-12 col-md-6 padding-0 pos-static">
							<div class="tab-content">
								<div class="cel-feature full-w-h tab-pane fade active in" id="service-img1">
									<img class="img-responsive" src="assets/images/services/b2.jpg" alt="Img">
								</div>
								<div class="cel-feature full-w-h tab-pane fade" id="service-img2">
									<img class="img-responsive" src="assets/images/services/2.jpg" alt="Img">
								</div>
								<div class="cel-feature full-w-h tab-pane fade" id="service-img3">
									<img class="img-responsive" src="assets/images/services/3.jpg" alt="Img">
								</div>
							</div> <!-- /.tab-content -->
						</div> <!-- /.col -->

						<div class="col-sm-12 col-md-6 padding-0">
							<div class="get-us">
								<div class="get-head">
									<div class="get-icon">
										<img src="assets/images/icons/filter.png" alt="Icon">
										<div class="get-number">
											3
										</div>     
									</div>
									<div class="get-title">
										<h4>what you get <br>from us?</h4>
									</div>
								</div> <!-- /.get-head -->
								<div class="slider service-slider-content slick-initialized slick-slider">
									<div class="slick-list"><div class="slick-track" style="opacity: 1; width: 3710px; transform: translate3d(-530px, 0px, 0px);"><div class="get-content slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p> Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div><div class="get-content slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 530px;" tabindex="0">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
									</div><div class="get-content slick-slide" data-slick-index="1" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									</div><div class="get-content slick-slide" data-slick-index="2" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p> Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div><div class="get-content slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
									</div><div class="get-content slick-slide slick-cloned" data-slick-index="4" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									</div><div class="get-content slick-slide slick-cloned" data-slick-index="5" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p> Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div></div></div>
									
									
								</div> <!-- /.service-slider-content -->

								<div class="row get-all-items">
									<ul class="slider slider-thumb slick-initialized slick-slider">
										 
										 
										 
									<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 561px; transform: translate3d(0px, 0px, 0px);"><li class="col-xs-6 col-sm-4 active slick-slide slick-current slick-active" data-toggle="tab" data-target="#service-img1" style="width: 187px;" tabindex="0" data-slick-index="0" aria-hidden="false">
											<div class="get-item">
												<img src="assets/images/services/b2.jpg" alt="Img">
												<h6>website build</h6>
											</div><!-- /.get-item -->
										</li><li class="col-xs-6 col-sm-4 slick-slide active slick-active" data-toggle="tab" data-target="#service-img2" style="width: 187px;" tabindex="0" data-slick-index="1" aria-hidden="false">
											<div class="get-item">
												<img src="assets/images/services/2.jpg" alt="Img">
												<h6>redesign website</h6>
											</div><!-- /.get-item -->
										</li><li class="col-xs-6 col-sm-4 slick-slide active slick-active" data-toggle="tab" data-target="#service-img3" style="width: 187px;" tabindex="0" data-slick-index="2" aria-hidden="false">
											<div class="get-item">
												<img src="assets/images/services/3.jpg" alt="Img">
												<h6>heavy marketing</h6>
											</div><!-- /.get-item -->
										</li></div></div></ul> <!-- /.slider-thumb -->
								</div> <!-- /.get-all-items -->
							</div> <!-- /.get-us -->					
						</div> <!-- /.col- -->
					</div> <!-- /.row -->  
				</div> <!-- /.container -->
			</div> <!-- /.full-width-sec full-width-sec-2nd -->

			<div class="full-width-sec full-width-sec-2nd">
				<div class="container">    
					<div class="row">
						<div class="col-sm-12 col-md-6 padding-0">
							<div class="get-us">
								<div class="get-head">
									<div class="get-icon">
										<img src="assets/images/icons/filter2.png" alt="Icon">
										<div class="get-number">
											6
										</div>     
									</div>
									<div class="get-title">
										<h4>Our several servire <br>for you??</h4>
									</div>
								</div> <!-- /.get-head -->
								<div class="slider service-slider-content-2nd slick-initialized slick-slider">
									<div class="slick-list"><div class="slick-track" style="opacity: 1; width: 6890px; transform: translate3d(-530px, 0px, 0px);"><div class="get-content slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p>Incididunt Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div><div class="get-content slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 530px;" tabindex="0">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
									</div><div class="get-content slick-slide" data-slick-index="1" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									</div><div class="get-content slick-slide" data-slick-index="2" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p> Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div><div class="get-content slick-slide" data-slick-index="3" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p>Minim veniam Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad , quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
									</div><div class="get-content slick-slide" data-slick-index="4" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p>Nisi ut Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris  aliquip ex ea commodo consequat. Duis aute irure dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									</div><div class="get-content slick-slide" data-slick-index="5" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p>Incididunt Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div><div class="get-content slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
									</div><div class="get-content slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									</div><div class="get-content slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p> Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div><div class="get-content slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p>Minim veniam Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad , quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
									</div><div class="get-content slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p>Nisi ut Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris  aliquip ex ea commodo consequat. Duis aute irure dolor Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									</div><div class="get-content slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" style="width: 530px;" tabindex="-1">
										<p>Incididunt Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div></div></div>
									
									
									
									
									

								</div> <!-- /.service-slider-content -->
								<div class="row get-all-items">
									<ul class="get-services slider slider-thumb-2nd slick-initialized slick-slider">
										 
										 
										 
										 
										 
										 
									 <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 480px; transform: translate3d(0px, 0px, 0px);"><li class="active slick-slide slick-current slick-active" data-toggle="tab" data-target="#service-2nd-img1" style="width: 65px;" tabindex="0" data-slick-index="0" aria-hidden="false">Responsive1</li><li data-toggle="tab" data-target="#service-2nd-img2" class="slick-slide slick-active" style="width: 65px;" tabindex="0" data-slick-index="1" aria-hidden="false">Organised</li><li data-toggle="tab" data-target="#service-2nd-img3" class="slick-slide slick-active" style="width: 65px;" tabindex="0" data-slick-index="2" aria-hidden="false">Editable</li><li data-toggle="tab" data-target="#service-2nd-img4" class="slick-slide slick-active" style="width: 65px;" tabindex="0" data-slick-index="3" aria-hidden="false">Creative</li><li data-toggle="tab" data-target="#service-2nd-img5" class="slick-slide slick-active" style="width: 65px;" tabindex="0" data-slick-index="4" aria-hidden="false">Perfect pixel</li><li data-toggle="tab" data-target="#service-2nd-img6" class="slick-slide slick-active" style="width: 65px;" tabindex="0" data-slick-index="5" aria-hidden="false">New trand</li></div></div></ul> 
								</div>
							</div> <!-- /.get-us -->				
						</div> <!-- /.col- -->
						<div class="col-sm-12 col-md-6 padding-0 pos-static">
							<div class="tab-content">
								<div class="cel-feature full-w-h tab-pane fade in active" id="service-2nd-img1">
									<img class="img-responsive" src="assets/images/700x400/2.jpg" alt="Img">
								</div>
								<div class="cel-feature full-w-h tab-pane fade" id="service-2nd-img2">
									<img class="img-responsive" src="assets/images/700x400/1.jpg" alt="Img">
								</div>
								<div class="cel-feature full-w-h tab-pane fade" id="service-2nd-img3">
									<img class="img-responsive" src="assets/images/700x400/3.jpg" alt="Img">
								</div>
								<div class="cel-feature full-w-h tab-pane fade" id="service-2nd-img4">
									<img class="img-responsive" src="assets/images/700x400/4.jpg" alt="Img">
								</div>
								<div class="cel-feature full-w-h tab-pane fade" id="service-2nd-img5">
									<img class="img-responsive" src="assets/images/700x400/5.jpg" alt="Img">
								</div>
								<div class="cel-feature full-w-h tab-pane fade" id="service-2nd-img6">
									<img class="img-responsive" src="assets/images/700x400/6.jpg" alt="Img">
								</div>
							</div> <!-- /.tab-content -->
						</div> <!-- /.col- -->
					</div> <!-- /.row -->  
				</div> <!-- /.container -->
			</div> <!-- /.full-width-sec.full-width-sec-2nd -->
		</section>

        <section class="we-do section" id="compititions">
            <div class="container">    
                <div class="row">
                    <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                        <div class="section-heading">
                            <h2 class="title"><span>Competitions</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                </div> <!-- /.row -->
                <div class="row">
                    <div class="tab-content">
                        <div class="col-xs-12 col-sm-12 col-md-5 tab-pane fade in active" id="creative1">
                            <img src="assets/images/we-do/1.jpg" alt="Img">
                        </div> <!-- /.col- -->
                        <div class="col-xs-12 col-sm-12 col-md-5 tab-pane fade" id="creative2">
                            <img src="assets/images/we-do/2.jpg" alt="Img">
                        </div> <!-- /.col- -->
                        <div class="col-xs-12 col-sm-12 col-md-5 tab-pane fade" id="creative3">
                            <img src="assets/images/we-do/3.jpg" alt="Img">
                        </div> <!-- /.col- -->
                        <div class="col-xs-12 col-sm-12 col-md-5 tab-pane fade" id="creative4">
                            <img src="assets/images/we-do/4.jpg" alt="Img">
                        </div> <!-- /.col- -->
                        <div class="col-xs-12 col-sm-12 col-md-5 tab-pane fade" id="creative5">
                            <img src="assets/images/we-do/5.jpg" alt="Img">
                        </div> <!-- /.col- -->
                        <div class="col-xs-12 col-sm-12 col-md-5 tab-pane fade" id="creative6">
                            <img src="assets/images/we-do/6.jpg" alt="Img">
                        </div> <!-- /.col- -->
                    </div> <!-- /.tab-content -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <div class="row">
                            <ul class="we-tab">
                                <li class="active" data-toggle="tab" data-target="#creative1">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="we-item">
                                            <i class="flaticon-idea"></i>
                                            <a href="#"><h4 class="gen-title">Good Design</h4></a>
                                            <p>Lorem ipsum is simply dummy text.</p>
                                        </div> <!-- /.we-item -->
                                    </div>
                                </li>
                                <li data-toggle="tab" data-target="#creative2">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="we-item">
                                            <i class="flaticon-layers"></i>
                                            <a href="#"><h4 class="gen-title">Fully Layered</h4></a>
                                            <p>Lorem ipsum is simply dummy text.</p>
                                        </div> <!-- /.we-item -->
                                    </div>
                                </li>
                                <li data-toggle="tab" data-target="#creative3">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="we-item">
                                            <i class="flaticon-responsive"></i>
                                            <a href="#"><h4 class="gen-title">Responsive</h4></a>
                                            <p>Lorem ipsum is simply dummy text.</p>
                                        </div> <!-- /.we-item -->
                                    </div>
                                </li>
                                <li data-toggle="tab" data-target="#creative4">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="we-item">
                                            <i class="flaticon-vector-1"></i>
                                            <a href="#"><h4 class="gen-title">Customizable</h4></a>
                                            <p>Lorem ipsum is simply dummy text.</p>
                                        </div> <!-- /.we-item -->
                                    </div>
                                </li>
                                <li data-toggle="tab" data-target="#creative5">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="we-item">
                                            <i class="flaticon-settings"></i>
                                            <a href="#"><h4 class="gen-title">Features</h4></a>
                                            <p>Lorem ipsum is simply dummy text.</p>
                                        </div> <!-- /.we-item -->
                                    </div>
                                </li>
                                <li data-toggle="tab" data-target="#creative6">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="we-item">
                                            <i class="flaticon-podium"></i>
                                            <a href="#"><h4 class="gen-title">24/7 Support</h4></a>
                                            <p>Lorem ipsum is simply dummy text.</p>
                                        </div> <!-- /.we-item -->
                                    </div>
                                </li>

                            </ul>
                        </div> <!-- /.row -->
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->  
            </div> <!-- /.container -->
        </section>






        

<!-- Announcements -->
<section class="full-width-sec" id="announcements">
            <div class="container">    
                <div class="row">
                    <div class="col-sm-12 col-md-6 pos-static">
                        <div class="cel-feature">
                            <img class="img-responsive" src="assets/images/more/1.png" alt="Img">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 padding-0">
                        <ul class="cele-list">
                            <li>
                                <div class="cel-img">
                                    <img class="flaticon-img icon-large" src="assets/flaticons/png/020-goal.png" alt="Icon">
                                </div>
                                <div class="cel-content">
                                    <a href="#">
                                        <h4 class="gen-title">Celebration of success</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                            </li>
                            <li>
                                <div class="cel-img">
                                    <img class="flaticon-img icon-large" src="assets/flaticons/png/010-analytics.png" alt="Icon">
                                </div>
                                <div class="cel-content">
                                    <a href="#">
                                        <h4 class="gen-title">We are Extraordinary</h4>
                                    </a>
                                    <p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales. </p>
                                </div>
                            </li>
                            <li>
                                <div class="cel-img">
                                    <img class="flaticon-img icon-large" src="assets/flaticons/png/015-startup.png" alt="Icon">
                                </div>
                                <div class="cel-content">
                                    <a href="#">
                                        <h4 class="gen-title">Building on the Best</h4>
                                    </a>
                                    <p>Aliquam rhoncus finibus orci et facilisis. Vivamus ullamcorper at erat sit amet congue. Sed quis tellus in ex pellentesque sodales. </p>
                                </div>
                            </li>
                            
                        </ul>
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->  
            </div> <!-- /.container -->
        </section>





        <section class="portfolios section" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                        <div class="section-heading">
                            <h2 class="title"><span>Our</span> Wonderful Gallery</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                </div> <!-- /.row -->
                <div class="row">
                    <div class="portfolio-details">
                        <div class="portfolio-container grid" style="position: relative; height: 852.969px;">
                            <div class="grid-item col-md-4 col-xs-6 figts limited" style="position: absolute; left: 0px; top: 0px;">
                                <div class="portfolio-item">
                                    <img class="img-responsive" src="assets/images/gallery/1.jpg" alt="Gallery">
                                    <div class="port-hover">
                                        <div class="port-content">
                                            <a href="#"><h3>Project Title Here</h3></a>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                            <a href="assets/images/gallery/11.jpg" data-fancybox="group" class="port-icon">
                                                <img class="hidden-thumbnail" src="assets/images/gallery/1.jpg" alt="Thumbnail">
                                                <img src="assets/images/icons/plus-btn.png" alt="Icon">
                                            </a>
                                        </div> <!-- /.port-content -->
                                    </div> <!-- /.port-hover -->
                                </div><!-- /.portfolio-item -->
                            </div> <!-- /.grid-item -->
                            <div class="grid-item col-md-4 col-xs-6 feature bseller" style="position: absolute; left: 390px; top: 0px;">
                                <div class="portfolio-item">
                                    <img class="img-responsive" src="assets/images/gallery/2.jpg" alt="Gallery">
                                    <div class="port-hover">
                                        <div class="port-content">
                                            <a href="#"><h3>Project Title Here</h3></a>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                            <a href="assets/images/gallery/22.jpg" data-fancybox="group" class="port-icon">
                                                <img class="hidden-thumbnail" src="assets/images/gallery/2.jpg" alt="Thumbnail">
                                                <img src="assets/images/icons/plus-btn.png" alt="Icon">
                                            </a>
                                        </div> <!-- /.port-content -->
                                    </div> <!-- /.port-hover -->
                                </div><!-- /.portfolio-item -->
                            </div> <!-- /.grid-item -->
                            <div class="grid-item col-md-4 col-xs-6 feature limited figts" style="position: absolute; left: 780px; top: 0px;">
                                <div class="portfolio-item">
                                    <img class="img-responsive" src="assets/images/gallery/3.jpg" alt="Gallery">
                                    <div class="port-hover">
                                        <div class="port-content">
                                            <a href="#"><h3>Project Title Here</h3></a>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                            <a href="assets/images/gallery/33.jpg" data-fancybox="group" class="port-icon">
                                                <img class="hidden-thumbnail" src="assets/images/gallery/3.jpg" alt="Thumbnail">
                                                <img src="assets/images/icons/plus-btn.png" alt="Icon">
                                            </a>
                                        </div> <!-- /.port-content -->
                                    </div> <!-- /.port-hover -->
                                </div><!-- /.portfolio-item -->
                            </div> <!-- /.grid-item -->
                            <div class="grid-item col-md-4 col-xs-6 feature figts" style="position: absolute; left: 390px; top: 321px;">
                                <div class="portfolio-item">
                                    <img class="img-responsive" src="assets/images/gallery/5.jpg" alt="Gallery">
                                    <div class="port-hover">
                                        <div class="port-content">
                                            <a href="#"><h3>Project Title Here</h3></a>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                            <a href="assets/images/gallery/55.jpg" data-fancybox="group" class="port-icon">
                                                <img class="hidden-thumbnail" src="assets/images/gallery/5.jpg" alt="Thumbnail">
                                                <img src="assets/images/icons/plus-btn.png" alt="Icon">
                                            </a>
                                        </div> <!-- /.port-content -->
                                    </div> <!-- /.port-hover -->
                                </div><!-- /.portfolio-item -->
                            </div> <!-- /.grid-item -->
                            <div class="grid-item col-md-4 col-xs-6 feature bseller" style="position: absolute; left: 0px; top: 516px;">
                                <div class="portfolio-item">
                                    <img class="img-responsive" src="assets/images/gallery/4.jpg" alt="Gallery">
                                    <div class="port-hover">
                                        <div class="port-content">
                                            <a href="#"><h3>Project Title Here</h3></a>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                            <a href="assets/images/gallery/44.jpg" data-fancybox="group" class="port-icon">
                                                <img class="hidden-thumbnail" src="assets/images/gallery/4.jpg" alt="Thumbnail">
                                                <img src="assets/images/icons/plus-btn.png" alt="Icon">
                                            </a>
                                        </div> <!-- /.port-content -->
                                    </div> <!-- /.port-hover -->
                                </div><!-- /.portfolio-item -->
                            </div> <!-- /.grid-item -->
                            <div class="grid-item col-md-4 col-xs-6 limited" style="position: absolute; left: 780px; top: 516px;">
                                <div class="portfolio-item">
                                    <img class="img-responsive" src="assets/images/gallery/6.jpg" alt="Gallery">
                                    <div class="port-hover">
                                        <div class="port-content">
                                            <a href="#"><h3>Project Title Here</h3></a>
                                            <p>Lorem ipsum dolor sit amet.</p>
                                            <a href="assets/images/gallery/66.jpg" data-fancybox="group" class="port-icon">
                                                <img class="hidden-thumbnail" src="assets/images/gallery/6.jpg" alt="Thumbnail">
                                                <img src="assets/images/icons/plus-btn.png" alt="Icon">
                                            </a>
                                        </div> <!-- /.port-content -->
                                    </div> <!-- /.port-hover -->
                                </div><!-- /.portfolio-item -->
                            </div> <!-- /.grid-item -->
                            
                        </div><!-- /.portfolio-container -->
                    </div> <!-- /.portfolio-details -->
                </div> <!-- /.row -->
            </div> <!-- /.container --> 
        </section>



        <section class="get-touch section" id="contact_us"> 
            <div class="container">    
                <div class="row">
                    <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                        <div class="section-heading">
                            <h2 class="title"><span>Get</span> in Touch</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-xs-offset-0">
                        <div class="contact-info">
                            <div class="row">
                                <div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
                                    <div class="con-text in-map">
                                        43, Chanmary Bazar,<br>
                                        shipyards, khulna-9201
                                    </div>
                                </div>
                                <div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
                                    <div class="con-text in-envelope">
                                        admin@yoursite.com<br>
                                        muzahid@yoursite.com
                                    </div>
                                </div>
                                <div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
                                    <div class="con-text in-phone">
                                        +880 123 727 525<br>
                                        +8800 123 111 555
                                    </div>
                                </div>
                            </div> <!-- /.row -->
                        </div> <!-- /.contact-info -->
                        
                        
                        
                        <div class="contact-form">
                            <form id="contact-form" method="post" action="../../../../external.html?link=http://themeforsale.com/template/preview-template/preview-template-v2.0/assets/contact-script/contact.php" novalidate="true">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Write your name">
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Write your valid email address">
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Write your subject">
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="comment" class="form-control" placeholder="Message" required="required" data-error="Write your comment"></textarea>
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="form-group col-xs-12 col-md-12">
                                        <div class="form-btn">
                                            <input type="submit" name="submit" value="Send" class="contact-form-btn disabled">
                                        </div>
                                    </div>
                                    <div class="messages"></div>
                                </div> <!-- /.row -->
                            </form>
                        </div> <!-- /.contact-form -->
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->  
            </div> <!-- /.container -->
        </section>







      































        


       


       
@endsection


@push('js')
@endpush