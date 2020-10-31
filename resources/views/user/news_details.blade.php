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
									<img src="{{$news_details->images}}" alt="Blog Photo">
									<div class="blog-share" style="display:flex">
									<div class="row">
									<div class="col-md-2">
									@if(sizeof($like_status)>0)
										<a href="/deleteNewslike/{{ Auth::user()->id }}/{{$news_details->id}}" ><i class="fa fa-heart heart"></i></a>
									@else
										<a href="/addNewslike/{{ Auth::user()->id }}/{{$news_details->id}}"><i class="fa fa-heart-o" aria-hidden="true"></i></a> 
									@endif
									</div>
									
									<div class="col-md-2">
									<a href="#"><i class="fa fa-facebook" onclick="share_news_fb()"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-envelope" onclick="share_news_mail()"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-whatsapp" onclick="share_news_whatsapp()"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><img src="assets/icons/facebook-messenger-brands.svg" style="width: 15px;" onclick="messenger(1)"></a>
									</div>
									</div>
									</div> <!-- /.blog-share -->
									<br>
									
								</div> <!-- /.blog-feature -->
								<div class="post-title">
									<h3>{{$news_details->heading}}.</h3>
									<h6>{{$news_details->heading}}.</h6>
								</div>
								<div class="post-content">
									<p>{{$news_details->news_short_description}}</p>
									<p> {!! html_entity_decode($news_details->news_details) !!}</p>
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
												<p>{{$comment->news_comment}}</p>
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

									<form method="post" enctype="multipart/form-data" method="POST" action="{{ route('addNewscomment') }}">
                              			@csrf
										  <input type="hidden" name="news_id" value="{{$news_details->id}}"> 
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