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
									<div class="blog-share">
										<a href="#"><i class="fa fa-share-alt"></i></a>
										<a href="#"><i class="fa fa-comment"></i></a>
									</div> <!-- /.blog-share -->
									<div class="posted-by">
										<div class="posted-details">
											<div class="posted-left">
												<a class="posted-date" href="#">{{$news_details->updated_at}}</a>
											</div> 
											<div class="posted-right">
												<a class="posted-like" href="#"><i class="fa fa-heart"></i><span> (73)</span></a>
											</div>
										</div> <!-- /.posted-details -->
									</div> <!-- /.posted-by -->
								</div> <!-- /.blog-feature -->
								<div class="post-title">
									<h3>{{$news_details->heading}}.</h3>
								</div>
								<div class="post-content">
									<p>{{$news_details->news_short_description}}</p>
									<p> {!! html_entity_decode($news_details->news_details) !!}</p>
								</div>
							</div> <!-- /.blog-content -->

							<div class="comments-section">
								<div class="admin">
									<div class="admin-img">
										<img src="{{ asset('assets/images/400.jpg')}}" alt="Img">
									</div>
									<div class="admin-content">
										<a href="#">
											<h3>Admin</h3>
										</a>
										<div class="his-text">
											
										</div>
									</div> <!-- /.admin-content -->
								</div> <!-- /.admin -->
								
								<!-- /.comments -->
								
								<!-- Comment Form Start -->
								<!-- <div class="contact-form comment-form">
									<div class="comment-title">
										<h3>Post your Comments</h3>
										<p>Please don't hesitate, we will hide your email. Required fields are marked*</p>
									</div>

									<form method="post" action="#">
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-6">
												<div class="form-group">
													<input type="text" name="Name" class="form-control" required="" placeholder="Name">
												</div>
											</div> 
											<div class="col-xs-12 col-sm-12 col-md-6">
												<div class="form-group">
													<input type="email" name="Email" class="form-control" required="" placeholder="Email">
												</div>
											</div> 
											<div class="col-xs-12 col-sm-12 col-md-6">
												<div class="form-group">
													<input type="text" name="Phone" class="form-control" placeholder="Phone Number">
												</div>
											</div> 
											<div class="col-xs-12 col-sm-12 col-md-6">
												<div class="form-group">
													<input type="text" name="Subject" class="form-control" placeholder="Subject">
												</div>
											</div> 
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<textarea name="Comment" class="form-control" required="" placeholder="Message"></textarea>
												</div>
											</div> 
											<div class="form-group col-xs-12 col-md-12">
												<div class="form-btn">
													<input type="submit" name="submit" value="Send" class="contact-form-btn">
												</div>
											</div>
										</div> 
									</form>
								</div> -->
                                 <!-- /.contact-form -->

								<!-- Recent Post -->
								
							</div> <!-- /.comments-section -->
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