@extends('user.layouts.user2')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css')}}" type="text/css" />
@endpush
@section('content')  
<section class="page-head">
			
		</section>
<section class="page-in section">
			<div class="container">    
			@include('user.partials.message')
				<div class="row">
					<div class="blog">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="blog-content">
								<div class="blog-feature" style="display: flex;">
								<?php $images=json_decode($comp_details->competition_image);?>
                            @for ($i = 0; $i < sizeof($images); $i++)
                            <img class="img-responsive" src="{{$images[$i]}}" alt="Img" style="width:500px;height:500px">
                            @endfor


							
									
								</div> <!-- /.blog-feature -->

							

								
								<div class="blog-share" style="display:flex;position: relative;">
									<div class="row" style="border: 3px solid #d4d4d4;
										background: #11193d; margin-left:0px !important;display: flex;">
										 <div class="col-md-4"> <p  style="color: white;">Total like {{$total_count}}</p></div>
										<div class="col-md-2">
										@if(sizeof($like_status)>0)
											<a href="/deletecomplike/{{ Auth::user()->id }}/{{$comp_details->id}}" ><i style="font-size: 39px;color: white;" class="fa fa-heart heart"></i></a>
										@else
											<a href="/addcomplike/{{ Auth::user()->id }}/{{$comp_details->id}}"><i style="font-size: 39px;color: white;" class="fa fa-heart-o" aria-hidden="true"></i></a> 
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
										
									</div>
								</div>  <!-- /.blog-share -->
								<p style="
    color: cadetblue;
    font-size: 24px;
    font-family: initial;
">Live In 2d 6 h 40mins 20sec</p>
								<div class="post-title">
									<h3>{{$comp_details->competition_name}}.</h3>
									<h6>{{$comp_details->created_at}}.</h6>
								</div>
								<div class="post-content">
									<p>{{$comp_details->compitition_location}}</p>
									<p>{{$comp_details->event_from}} {{$comp_details->event_to}} {{$comp_details->event_type}}</p>
									<p style="text-align: justify;"> {!! html_entity_decode($comp_details->competition_details) !!}</p>
								</div>
							</div> <!-- /.blog-content -->

							<div class="comments-section">
								<div class="admin">
									<div class="admin-img">
										<img src="https://image.freepik.com/free-vector/assorted-user-avatars-collection_23-2147546967.jpg" alt="Img">
									</div>
									<div class="admin-content">
										<a href="#">
											<h3>Iocl Admin</h3>
										</a>
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
<a href="/delete-comment/{{$comment->competition_id}}/{{$comment->user_id}}" class="btn btn-danger" style="float: right;">Delete</a>
@endif
												<p style="text-align: justify;">{{$comment->competition_comment}}</p>
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

									<form method="post" enctype="multipart/form-data" method="POST" action="{{ route('addcompcomment') }}">
                              			@csrf
										  <input type="hidden" name="competition_id" value="{{$comp_details->id}}"> 
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
<div class="row">
@foreach ($user_uploads as $user)
<div class="col-md-6">
								<div class="blog-feature" style="">

								<?php $images=json_decode($user->compotition_images);?>
								@for ($i = 0; $i < sizeof($images); $i++)
								<a class="example-image-link" href="{{$images[$i]}}" target="_blank" data-lightbox="example-set" data-title="Uploaded By : {{$user->user_name}}  Description : {{$user->compotition_details}} "><img style="width:100px;height:100px;" class="example-image" src="{{$images[$i]}}" alt=""/></a>
								<!-- <img class="img-responsive" src="{{$images[$i]}}" style="width:70px;height:70px;" alt="Img" style="width:500px;height:500px"> -->
								<p>Uploaded By : {{$user->user_name}}  
								{{$user->employe_relation_id}}
								@if($user->relation_type !=NULL)     
								<?php
$user = \App\Models\User::find($user->employe_relation_id);
?>    
                              
                                {{ $user->relation_type}} of {{$user->name}}
                                @endif
								
								</p>
								<p style="text-align: justify;">Description : {{$user->compotition_details}}</p>
								@endfor
								<br>
								<div class="blog-feature" style="margin-top: 23px;">
								<?php $videos=json_decode($user->compotition_videos);?>
								@if(is_array($videos))   
                               			@for ($i = 0; $i < sizeof($videos); $i++)
								<a class="example-image-link" href="{{$videos[$i]}}" data-lightbox="example-set" data-title="Uploaded By : {{$user->user_name}}  Description : {{$user->compotition_details}} "><video width="320" height="240"  style="max-width: 100%;" controls playsinline><source src="{{$videos[$i]}}" type="video/mp4">Your browser does not support the video tag.</video></a>
								<!-- <img class="img-responsive" src="{{$images[$i]}}" style="width:70px;height:70px;" alt="Img" style="width:500px;height:500px"> -->
								
								@endfor
								@endif
								</div>
								<div class="blog-share" style="display:flex;position: relative;">
									<div class="row" style="border: 3px solid #d4d4d4;
										background: #11193d; margin-left:0px !important;display: flex;">
										<?php
										$total_likes = \App\Models\CompetitionUserUploadLikes::where('user_upload_id',$user->upload_id)->count();
										$user_like=\App\Models\CompetitionUserUploadLikes::where('user_upload_id',$user->upload_id)->where('user_id',Auth::user()->id)->get();
										?>

										 <div class="col-md-4"> <p  style="color: white;">Total like {{$total_likes}}</p></div>
										<div class="col-md-2">
										@if(sizeof($user_like)>0)
											<a href="/deleteuploadcomplike/{{ Auth::user()->id }}/{{$user->upload_id}}" ><i style="font-size: 39px;color: white;" class="fa fa-heart heart"></i></a>
										@else
											<a href="/adduploadcomplike/{{ Auth::user()->id }}/{{$user->upload_id}}"><i style="font-size: 39px;color: white;" class="fa fa-heart-o" aria-hidden="true"></i></a> 
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
										
									</div>
								</div>  <!-- /.blog-share -->
								<br>
							</div>
</div>
							@endforeach



</div>
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
                           
                            <form  method="post" action="{{ route('submitcontactform') }}" >
                            @csrf
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
                                            <input type="text" name="phone" class="form-control" required="required"  placeholder="Phone Number">
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject " required="required" data-error="Write your subject">
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
<script src="{{ asset('assets/js/lightbox-plus-jquery.min.js')}}"></script>
@endpush
