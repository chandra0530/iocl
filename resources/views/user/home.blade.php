@extends('user.layouts.user')

@push('css')
   

@endpush
@section('content')      
        <!-- Start Main Slider -->
        <!-- Start Main Slider -->
        <section id="main-slider">
            <!-- Carousel -->
            <div id="main-slide" class="main-slider carousel slide" data-ride="carousel">
                <!-- Carousel inner -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="img-responsive" src="{{ asset('assets/images/Log-In-Page-2.jpg')}}" alt="slider">
                        <div class="container">
                            <div class="slider-content">
                                <div class="container">
                                    <!-- <h2 class="animated4">
                                        <span>Welcome To <strong>IOCL Parivaar</strong></span>
                                    </h2> -->
<!--                                     
                                    <p class="animated4">
                                        <a href="#gallery" class="slider-btn cbiz-btn">Gallery</a>
                                        <a href="#our_events" class="slider-btn cbiz-btn cbiz-btn-border">Events</a>
                                    </p> -->
                                </div>
                            </div>
                        </div> <!-- /.container -->
                    </div> <!-- /.item -->
                   

                </div>
                <!-- Carousel inner end-->

                <!-- Controls -->
                <!-- <a class="left carousel-control" href="#main-slide" data-slide="prev">
                    <span><i class="fa fa-angle-left"></i></span>
                </a>
                <a class="right carousel-control" href="#main-slide" data-slide="next">
                    <span><i class="fa fa-angle-right"></i></span>
                </a> -->
                <div class="click-to-next bottom-top-animation">
                    <i></i>
                </div>

            </div>
            <!-- /carousel -->
        </section> <!-- /.main-slider -->
        <!-- End Main Slider -->

        <section class="recent-blog section" id="news_section" style="padding-top:0px !Important;">
            <div class="container">    
                <div class="row">
                    <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                        <div class="section-heading">
                            <h2 class="title" style="font-family: Samarkan !important;">Thaza Khabar</h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
                        </div>
                    </div>
                </div> <!-- /row -->
                <div class="row">


                @foreach($news as $new)
                <div class="col-sm-6 col-md-4">
                        <div class="re-blog-item">
                            <div class="re-feature-img">
                                <img src="{{$new->images}}" alt="Features" style="height:200px;witth:300px;">
                            </div>
                            <div class="caption">
                                <a href="/news_details/{{$new->id}}"><h4 class="gen-title">{{$new->heading}}</h4></a>
                                <!-- <p>{{$new->news_short_description}}</p> -->
                            </div>
                            <div class="re-time">
                           {{  date('d-m-Y', strtotime($new->created_at)) }}
                            </div>
                        </div> <!-- /.re-blog-item -->
                    </div> <!-- /.col- -->
            @endforeach
                    
                    <!-- <div class="col-sm-6 col-md-4">
                        <div class="re-blog-item">
                            <div class="re-feature-img">
                                <img src="assets/images/post/3.jpg" alt="Features">
                            </div>
                            <div class="caption">
                                <a href="#"><h4 class="gen-title">New Openings In Iocl </h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicingiu elit, sed eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                            <div class="re-time">
                                Dec 14, 2017
                            </div>
                        </div> 
                    </div> 
                    <div class="col-sm-6 col-md-4">
                        <div class="re-blog-item">
                            <div class="re-feature-img">
                                <img src="assets/images/post/3.jpg" alt="Features">
                            </div>
                            <div class="caption">
                                <a href="#"><h4 class="gen-title">New Work Timings</h4></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicingiu elit, sed eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                            <div class="re-time">
                                Dec 14, 2017
                            </div>
                        </div> 
                    </div>  -->
                </div> <!-- /.row -->  
            </div> <!-- /.container -->
        </section>
        <div class="gallery-button" >
            <a href="news">       Show more</a> 
        </div>

        <section class="our-service section" id="our_events">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title">Events</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
						</div>
					</div>
				</div> <!-- /.row -->
			
			</div><!-- container -->
		</section>

        
        
        <!-- <section class="working">
			<div class="full-width-sec">
				<div class="container">    
                @foreach($event as $new)
					<div class="row">
						<div class="col-sm-12 col-md-6 padding-0 pos-static">
							<div class="tab-content">

                            <?php $images=json_decode($event[0]->event_images); ?>
                            @for ($i = 0; $i < sizeof($images); $i++)
                            @if($i ===0)         
                                <div class="cel-feature full-w-h tab-pane fade active in" id="service-img{{$i}}">
									<img class="img-responsive" src="{{$images[$i]}}" alt="Img">
								</div>
                            @else
                                 <div class="cel-feature full-w-h tab-pane fade" id="service-img{{$i}}">
									<img class="img-responsive" src="{{$images[$i]}}" alt="Img">
								</div>   
                            @endif
                            @endfor
								
								
							</div>
						</div> 
                        
						<div class="col-sm-12 col-md-6 padding-0">
							<div class="get-us">
								<div class="get-head">
									<div class="get-icon">
										<img src="assets/images/icons/filter.png" alt="Icon">  
									</div>
									<div class="get-title">
										<h4>{{$new->events_names}}</h4>
									</div>
                                    <p style="padding: 0px 38px 0px 38px;">{!! html_entity_decode($new->event_details) !!} </p>
								</div> 

								<div class="row get-all-items">
									<ul class="slider slider-thumb slick-initialized slick-slider">
										<div class="slick-list draggable">
                                        <div class="slick-track" style="opacity: 1; width: 561px; transform: translate3d(0px, 0px, 0px);">
                                        @for ($i = 0; $i < sizeof($images); $i++)
                                            <li class="col-xs-6 col-sm-4 slick-slide" data-toggle="tab" data-target="#service-img{{$i}}" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 187px;">
                                                <div class="get-item">
                                                    <img src="{{$images[$i]}}" alt="Img">
                                                   
                                                </div>
                                            </li>
                                         @endfor
                                        </div></div> 
										 
										 
									</ul> 
								</div> 
							</div> 				
						</div> 

					</div> 
                    @endforeach
				</div> 
			</div> 

		</section> -->

        <section class="working">
			<div class="full-width-sec">
				<div class="container">    
					<div class="row">
						<div class="col-sm-12 col-md-6 padding-0 pos-static">
							<div class="tab-content">
                            @foreach($event as $key =>$new)
                            <?php $images=json_decode($new->event_images); ?>
                            @if ($key == 0)
                            <div class="cel-feature full-w-h tab-pane active in" id="service-img{{$key}}">
									<img class="img-responsive" src="{{$images[0]}}" alt="Img">
							</div>
                            @else
                            <div class="cel-feature full-w-h tab-pane fade" id="service-img{{$key}}">
									<img class="img-responsive" src="{{$images[0]}}" alt="Img">
							</div>
                            @endif

                            
                            @endforeach
								
								<!-- <div class="cel-feature full-w-h tab-pane fade" id="service-img2">
									<img class="img-responsive" src="assets/images/services/2.jpg" alt="Img">
								</div>
								<div class="cel-feature full-w-h tab-pane fade active in" id="service-img3">
									<img class="img-responsive" src="assets/images/services/3.jpg" alt="Img">
								</div> -->
							</div> <!-- /.tab-content -->
						</div> <!-- /.col -->

						<div class="col-sm-12 col-md-6 padding-0">
							<div class="get-us">
								<div class="get-head">
									
									<div class="get-title">
										<h4 style="padding-left: 0px !Important;">Upcoming Events</h4>
									</div>
								</div> <!-- /.get-head -->
								<div class="slider service-slider-content slick-initialized slick-slider">
									<div class="slick-list"><div class="slick-track" style="opacity: 1; width: 2120px; transform: translate3d(-1590px, 0px, 0px);">

                                    @foreach($event as $key =>$new)
                                    <div class="get-content slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 530px;">
										<p> {{$new->events_names}}</p>
									</div>
                                    @endforeach
                                    <div class="get-content slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 530px;">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
									</div>
                                    @foreach($event as $key =>$new)
                                    <div class="get-content slick-slide" data-slick-index="{{$key}}" aria-hidden="true" tabindex="-1" style="width: 530px;">
										<p>{{$new->events_names}}</p>
									</div>
                                    @endforeach
                                    <div class="get-content slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 530px;">
										<p> Duis aute irure dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
									</div>
                                    </div>
                                </div>
									
									
								</div> <!-- /.service-slider-content -->

								<div class="row get-all-items">
									<ul class="slider slider-thumb slick-initialized slick-slider">
										<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 561px; transform: translate3d(0px, 0px, 0px);">
                                        @foreach($event as $key => $new)
                            <?php $images=json_decode($new->event_images); ?>
                            <!-- <div class="cel-feature full-w-h tab-pane fade" id="service-img1">
									<img class="img-responsive" src="{{$images[0]}}" alt="Img">
							</div> -->
                            @if ($key == 0)
                            <li class="col-xs-6 col-sm-4 active slick-slide slick-active" data-toggle="tab" data-target="#service-img{{$key}}" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 187px;">
											<div class="get-item">
												<img src="{{$images[0]}}" alt="Img">
												<h6>{{$new->events_names}}</h6>
											</div><!-- /.get-item -->
										</li>
                            @else
                            <li class="col-xs-6 col-sm-4 active slick-slide slick-active" data-toggle="tab" data-target="#service-img{{$key}}" data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 187px;">
											<div class="get-item">
												<img src="{{$images[0]}}" alt="Img">
												<h6>{{$new->events_names}}</h6>
											</div><!-- /.get-item -->
										</li>
                            @endif
                            
                            @endforeach

                                       
                                        <!-- <li class="col-xs-6 col-sm-4 slick-slide active slick-active" data-toggle="tab" data-target="#service-img2" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 187px;">
											<div class="get-item">
												<img src="assets/images/services/2.jpg" alt="Img">
												<h6>redesign website</h6>
											</div>
										</li>
                                        <li class="col-xs-6 col-sm-4 slick-slide active slick-current slick-active" data-toggle="tab" data-target="#service-img3" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 187px;">
											<div class="get-item">
												<img src="assets/images/services/3.jpg" alt="Img">
												<h6>heavy marketing</h6>
											</div>
										</li> -->
                                        
                                        </div></div> 
										 
										 
									</ul> <!-- /.slider-thumb -->
								</div> <!-- /.get-all-items -->
							</div> <!-- /.get-us -->					
						</div> <!-- /.col- -->
					</div> <!-- /.row -->  
				</div> <!-- /.container -->
			</div> 

			 
		</section>
      
        <div class="gallery-button" style="margin-top:50px" >
            <a href="events">       Show more</a>
        </div>
      

<section class="we-do section" id="compititions" style="background: aliceblue;">
            <div class="container">    
                <div class="row">
                    <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                        <div class="section-heading">
                            <h2 class="title">Competitions</h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
                        </div>
                    </div>
                </div> <!-- /.row -->
                <div class="row">
                    <div class="tab-content">
                    @foreach($compitition as $key => $compit)
                    <div class="col-xs-12 col-sm-12 col-md-5 tab-pane fade   {{ $key ==  '0' ? 'in active' : ''  }}  " id="creative{{$key}}" >
                    <?php $compimages=json_decode($compit->competition_image); ?>
                            <img src="{{$compimages[0]}}" alt="Img" style="width:400px">
                        </div> <!-- /.col- -->
                    @endforeach
                        
                        
                    </div> <!-- /.tab-content -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <div class="row">
                            <ul class="we-tab">

                            @foreach($compitition as $key => $compit)
                            <li class="{{ $key ==  '1' ? 'in active' : ''  }}" data-toggle="tab" data-target="#creative{{$key}}">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="we-item">
                                        <?php $compimages=json_decode($compit->competition_image); ?>
                                            <!-- <i class="flaticon-idea"></i> -->
                                            <img src="{{$compimages[0]}}" alt="Img" style="width:100%">
                                            
                                            <a href="#"><h4 class="gen-title">{{$compit->competition_name}} </h4></a>
                                            <!-- <p> {!! html_entity_decode($compit->competition_details) !!}</p> -->
                                        </div> <!-- /.we-item -->
                                    </div>
                                </li>
                    @endforeach
                                
                               

                            </ul>
                        </div> <!-- /.row -->
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->  
            </div> <!-- /.container -->
        </section>
        <div class="gallery-button">
            <a href="compotitions">       Show more</a>
        </div>

        <section class="our-service section" id="announcements">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title">Announcements</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
						</div>
					</div>
				</div> <!-- /.row -->
			
			</div><!-- container -->
		</section>
<section class="full-width-sec" >
<!-- /.row -->
            <div class="container">    
                <div class="row">
                    <div class="col-sm-12 col-md-6 pos-static">
                        <div class="cel-feature">
                            <img class="img-responsive" src="assets/images/announcement.jpg" alt="Img" style="height: 560px;" >
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 padding-0">
                        <ul class="cele-list">
                        @foreach($announcement as $key => $announce)
                        <li>
                                <div class="cel-img">
                                    <img class="flaticon-img icon-large" src="{{$announce->announcement_image}}" alt="Icon">
                                </div>
                                <div class="cel-content">
                                    <a href="#">
                                        <h4 class="gen-title">{{$announce->annoucemnt_name}}</h4>
                                    </a>
                                    <p></p>
                                </div>
                            </li>
                    @endforeach
                            
                            <!-- <li>
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
                            </li> -->
                            
                        </ul>
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->  
                
            </div> <!-- /.container -->
            
        </section>
        <div class="gallery-button" style="margin-top: 51px;">
                          <a href="announcement">       Show more</a>
                        </div>




        <section class="portfolios section" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                        <div class="section-heading">
                            <h2 class="title">Gallery</h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
                        </div>
                    </div>
                </div> <!-- /.row -->
                <div class="row">
                    <div class="portfolio-details">
                        <div class="portfolio-container grid" style="position: relative; height: 852.969px;">
                            <div class="grid-item col-md-4 col-xs-6 figts limited" style="position: absolute; left: 0px; top: 0px;">
                                <div class="portfolio-item">
                                    <img class="img-responsive" src="{{$gallery[0]->image}}" alt="Gallery">
                                    <div class="port-hover">
                                        <div class="port-content">
                                            <!-- <a href="#"><h3>Project Title Here</h3></a>
                                            <p>Lorem ipsum dolor sit amet.</p> -->
                                            <a href="{{$gallery[0]->image}}" data-fancybox="group" class="port-icon">
                                                <img class="hidden-thumbnail" src="{{$gallery[0]->image}}" alt="Thumbnail">
                                                <img src="assets/images/icons/plus-btn.png" alt="Icon">
                                            </a>
                                        </div> <!-- /.port-content -->
                                    </div> <!-- /.port-hover -->
                                </div><!-- /.portfolio-item -->
                            </div> <!-- /.grid-item -->
                            <div class="grid-item col-md-4 col-xs-6 feature bseller" style="position: absolute; left: 390px; top: 0px;">
                                <div class="portfolio-item">
                                    <img class="img-responsive" src="{{$gallery[1]->image}}" alt="Gallery">
                                    <div class="port-hover">
                                        <div class="port-content">
                                            <!-- <a href="#"><h3>Project Title Here</h3></a>
                                            <p>Lorem ipsum dolor sit amet.</p> -->
                                            <a href="{{$gallery[1]->image}}" data-fancybox="group" class="port-icon">
                                                <img class="hidden-thumbnail" src="{{$gallery[1]->image}}" alt="Thumbnail">
                                                <img src="assets/images/icons/plus-btn.png" alt="Icon">
                                            </a>
                                        </div> <!-- /.port-content -->
                                    </div> <!-- /.port-hover -->
                                </div><!-- /.portfolio-item -->
                            </div> <!-- /.grid-item -->
                            <div class="grid-item col-md-4 col-xs-6 feature limited figts" style="position: absolute; left: 780px; top: 0px;">
                                <div class="portfolio-item">
                                    <img class="img-responsive" src="{{$gallery[2]->image}}" alt="Gallery">
                                    <div class="port-hover">
                                        <div class="port-content">
                                            <!-- <a href="#"><h3>Project Title Here</h3></a>
                                            <p>Lorem ipsum dolor sit amet.</p> -->
                                            <a href="{{$gallery[2]->image}}" data-fancybox="group" class="port-icon">
                                                <img class="hidden-thumbnail" src="{{$gallery[2]->image}}" alt="Thumbnail">
                                                <img src="assets/images/icons/plus-btn.png" alt="Icon">
                                            </a>
                                        </div> <!-- /.port-content -->
                                    </div> <!-- /.port-hover -->
                                </div><!-- /.portfolio-item -->
                            </div> <!-- /.grid-item -->
                           
                            
                            
                            
                        </div><!-- /.portfolio-container -->
                        <div class="gallery-button">
                          <a href="gallery">       Show more</a>
                        </div>
                        
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
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
                        </div>
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-xs-offset-0">
                        <div class="contact-info">
                            <div class="row">
                                <div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
                                    <div class="con-text in-map">
                                    Indian Oil Bhavan<br>
Eastern Region Office<br>
IndianOil Corporation Limited<br>
2-Gariahat Road (South)<br>
Pin: 700068<br>
                                    </div>
                                </div>
                                <div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
                                    <div class="con-text in-envelope">
                                    Souptik Mukherje
                                   souptikmukherjee@indianoil.in<br>
                                   <br>
                                   Tapan Kumar Pradhan<br>
                                   tapankp@indianoil.in
                                    </div>
                                </div>
                                <div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
                                    <div class="con-text in-phone">
                                    7044062168	<br><br><br>
                                    7993542670<br><br>
                                    </div>
                                </div>
                            </div> <!-- /.row -->
                        </div> <!-- /.contact-info -->
                        
                        
                        
                        <div class="contact-form">
                            <form id="contact-form" method="post" action="" novalidate="true">
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