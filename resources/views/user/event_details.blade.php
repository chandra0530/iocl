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
								<div class="blog-feature" style="display: flex;">
								<?php $images=json_decode($event_details->event_images);?>
									@for ($i = 0; $i < sizeof($images); $i++)
										<img class="img-responsive" src="{{$images[$i]}}" alt="Img" style="width:500px;height:500px">
									@endfor
								<br>
								</div> <!-- /.blog-feature -->
								<div class="blog-share" style="display:flex;position: relative;">
									<div class="row" style="border: 3px solid #d4d4d4;
										background: #11193d; margin-left:0px !important;display: flex;">
										<div class="col-md-1"></div>
										<div class="col-md-2">
										@if(sizeof($like_status)>0)
											<a href="/deleteNewslike/{{ Auth::user()->id }}/{{$event_details->id}}" ><i style="font-size: 39px;color: white;" class="fa fa-heart heart"></i></a>
										@else
											<a href="/addNewslike/{{ Auth::user()->id }}/{{$event_details->id}}"><i style="font-size: 39px;color: white;" class="fa fa-heart-o" aria-hidden="true"></i></a> 
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
								</div>  <!-- /.blog-share -->
								<div class="post-title">
									<h3>{{$event_details->events_names}}.</h3>
									<h6>{{$event_details->created_at}}.</h6>
								</div>
								<div class="post-content">
									<p>{{$event_details->event_location}}</p>
									<p>{{$event_details->event_from}} {{$event_details->event_to}} {{$event_details->event_type}}</p>
									<p> {!! html_entity_decode($event_details->event_details) !!}</p>
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
													<a href="#">Imran</a>
													 - 
													 <a href="#">{{$comment->created_at}}</a>
												</h4>
												<p>{{$comment->event_comment}}</p>
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

									<form method="post" enctype="multipart/form-data" method="POST" action="{{ route('addEventscomment') }}">
                              			@csrf
										  <input type="hidden" name="event_id" value="{{$event_details->id}}"> 
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


@endsection


@push('js')
@endpush