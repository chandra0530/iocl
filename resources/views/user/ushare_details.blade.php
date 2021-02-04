@extends('user.layouts.user2')

@push('css')
   

@endpush
@section('content')  
<section class="page-head">
			
		</section>
<section class="page-in section">
			<div class="container">    
				<div class="row">
					<div class="blog">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="blog-content">
								<div class="blog-feature">
                                <?php $images = json_decode($post_details->ushare_images); ?>
                                @foreach ($images as $image)
                                <img src="{{$image}}" alt="Blog Photo">
                                @endforeach

								<?php $videos = json_decode($post_details->videos); ?>
                                @foreach ($videos as $video)
								<video width="320" height="240" controls>
								<source src="{{$video}}" type="video/mp4">
								Your browser does not support the video tag.
								</video>
                                @endforeach
									
								<!-- /.blog-share -->
									<br>
									
								</div> <!-- /.blog-feature -->
								<div class="blog-share" style="display:flex;position: relative;">
									<div class="row" style="border: 3px solid #d4d4d4;
										background: #11193d; margin-left:0px !important;display: flex;">
										<div class="col-md-1"></div>
										<div class="col-md-2">
										@if(sizeof($like_status)>0)
											<a href="/deleteUsharelike/{{ Auth::user()->id }}/{{$post_details->id}}" ><i style="font-size: 39px;color: white;" class="fa fa-heart heart"></i></a>
										@else
											<a href="/addUsharelike/{{ Auth::user()->id }}/{{$post_details->id}}"><i style="font-size: 39px;color: white;" class="fa fa-heart-o" aria-hidden="true"></i></a> 
										@endif
										</div>
									
										<div class="col-md-2">
										<a href="#"><i class="fa fa-facebook" style="font-size: 39px;color: white;" onclick="share_news_fb()"></i></a>
										</div>
										<div class="col-md-2">
										<a href="#"><i style="font-size: 39px;color: white;" class="fa fa-envelope" onclick="share_news_mail()"></i></a>
										</div>
										<div class="col-md-2">
										<a href="#"><i style="font-size: 39px;color: white;" class="fa fa-whatsapp" onclick="share_news_whatsapp()"></i></a>
										</div>
										<div class="col-md-2">
										<a href="#">
										<!-- <i style="font-size: 39px;color: white;" class="fa fa-facebook-messenger" onclick="messenger(1)"></i> -->
										<img src="{{ asset('assets/icons/messenger-white.png')}}" style="width: 40px;" onclick="messenger(1)">
										</a>
										</div>
										<div class="col-md-1"></div>
										</div>
									</div> 
								<div class="post-title">
                                @if ($post_details->ushare_type == 'my_holiday_experience')
                                <h3>My holiday experience.</h3>
                                @endif
                                @if ($post_details->ushare_type == 'my_pession')
                                <h3>My Passion.</h3>
                                @endif
                                @if ($post_details->ushare_type == 'social_service')
                                <h3>Social Service</h3>
                                @endif
                                @if ($post_details->ushare_type == 'my_views')
                                <h3>My Views.</h3>
                                @endif
									<!-- <h3>{{$post_details->ushare_type}}.</h3> -->
									<h6>{{$post_details->ushare_name}}.</h6>
								</div>
								<div class="post-content">
									<p style="text-align: justify;">{{$post_details->experience}}</p>
								</div>
							</div> <!-- /.blog-content -->

							<div class="comments-section">
								<div class="admin">
									<div class="admin-img">
										<!-- <img src="https://image.freepik.com/free-vector/assorted-user-avatars-collection_23-2147546967.jpg" alt="Img"> -->
									</div>
									<div class="admin-content">
										<!-- <a href="#">
											<h3>Iocl Admin</h3>
										</a> -->
										<div class="his-text">
											<!-- <p>It is a long established fact that a reader will be distracted by the readable content Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci veritatis, tempora suscipit</p> -->
										</div>
									</div> <!-- /.admin-content -->
								</div> <!-- /.admin -->
								
								<div class="comments">
									<div class="comment-title">
										<!-- <h3>2 Comments</h3> -->
									</div>
									<div class="media-all">
									@foreach($comments as $comment)
									<div class="media">
											<div class="media-body">
												<h4 class="media-heading">
													<a href="#">{{$comment->name}}</a>
													 - 
													 <a href="#">{{$comment->created_at}}</a>
												</h4>
												@if($comment->user_id == Auth::user()->id)         
<a href="/delete-ushare-comment/{{$comment->competition_id}}/{{$comment->user_id}}" class="btn btn-danger" style="float: right;">Delete</a>
@endif
												<p>{{$comment->ushare_comment}}</p>
											</div> <!-- /.media-body -->
										</div> <!-- /.media -->
									@endforeach
									</div>
								</div> <!-- /.comments -->
								
								<!-- Comment Form Start -->
								<div class="contact-form comment-form">
									<div class="comment-title">
										<h3>Post your Comments</h3>
										<p>Please don't hesitate, we will hide your email. Required fields are marked*</p>
									</div>

									<form method="post" enctype="multipart/form-data" method="POST" action="{{ route('addUsharecomment') }}">
                              			@csrf
										  <input type="hidden" name="ushare_id" value="{{$post_details->id}}"> 
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<textarea name="comment" class="form-control" required="" placeholder="Message"></textarea>
												</div>
											</div> <!-- /.col- -->
											<div class="form-group col-xs-12 col-md-12">
												<div class="form-btn">
													<input type="submit" name="submit" value="Send" class="contact-form-btn">
												</div>
											</div>
										</div> <!-- /.row -->
									</form>
								</div> <!-- /.contact-form -->

								<!-- Recent Post -->
								
							
							</div>
						</div> <!-- /.col- -->
					</div> <!-- /.blog -->

					<!-- Sidebar Area Start -->
					
					<!-- Sidebar Area End -->
				</div> <!-- /.row -->  
			</div> <!-- /.container -->
		</section>
		<section class="get-touch section contact" id="contact_us" style="padding-top:0px !important;"> 
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
                                    Arup Das<br>
                                    arupdas@indianoil.in<br>
                                    98306 04960
                                    </div>
                                </div>
                                <div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
                                    <div class="con-text in-envelope">
                                    Souptik Mukherje<br>
                                   souptikmukherjee@indianoil.in<br>
                                   7044062168<br>
                                   <br>
                                   Tapan Kumar Pradhan<br>
                                   tapankp@indianoil.in<br>
                                   7993542670
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
        <footer class="footer">
             <!-- /.footer-main -->
            <div class="copyright">
                <div class="container">
                    IOCL Parivar © 2018 All rights reserved.
                </div>
            </div> <!-- /.copyright -->
        </footer>

@endsection


@push('js')
@endpush
