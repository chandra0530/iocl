@extends('user.layouts.user')

@push('css')
   

@endpush
@section('content')  
<section class="page-head page-bg" style="background-image: url('assets/images/bg/blog.jpg')">
			<div class="container">    
				<h3 class="page-heading">News details</h3>
				<div class="sub-title">
					<a href="#"><span>Home</span></a>
					<i class="fa fa-angle-right"></i>
					<span>News Details</span>
				</div>
			</div> <!-- /.container -->
		</section>
<section class="page-in section">
			<div class="container">    
				<div class="row">
					<div class="blog">
						<div class="col-xs-12 col-sm-12 col-md-8">
							<div class="blog-content">
								<div class="blog-feature">
									<img src="assets/images/700x400/5.jpg" alt="Blog Photo">
									<div class="blog-share">
										<a href="#"><i class="fa fa-share-alt"></i></a>
										<a href="#"><i class="fa fa-comment"></i></a>
									</div> <!-- /.blog-share -->
									<div class="posted-by">
										<div class="posted-details">
											<div class="posted-left">
												<a class="posted-date" href="#">21, Aug 2017</a>
												By
												<a class="posted-author" href="#">Anna Swford</a>
											</div> 
											<div class="posted-right">
												<a class="posted-like" href="#"><i class="fa fa-heart"></i><span> (73)</span></a>
											</div>
										</div> <!-- /.posted-details -->
									</div> <!-- /.posted-by -->
								</div> <!-- /.blog-feature -->
								<div class="post-title">
									<h3>Consectetur adipisicing elit, sed do eiusmod.</h3>
								</div>
								<div class="post-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eserunt mollit anim id labor laborumlabor laborum est.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eserunt mollit anim id labor laborumlabor laborum est.</p>
								</div>
							</div> <!-- /.blog-content -->

							<div class="comments-section">
								<div class="admin">
									<div class="admin-img">
										<img src="assets/images/400.jpg" alt="Img">
									</div>
									<div class="admin-content">
										<a href="#">
											<h3>Admin</h3>
										</a>
										<div class="his-text">
											<p>It is a long established fact that a reader will be distracted by the readable content Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci veritatis, tempora suscipit</p>
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
								<div class="comment-title">
									<h3>Recent Post</h3>
								</div>

								<div class="wi-content wi-news">
								   <ul>
									   <li>
										   <div class="news-left">
											   <a href="#">
													<img src="assets/images/post/1.jpg" alt="News">
												</a>
										   </div>    
										   <div class="news-right">
												<a href="#">
													<h5>Sed do eiusmod tempor.</h5>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  consectetur adipisicing elit, sed do eiusmod tempor.</p>
												<div class="posted">
												   <span class="post-date"><a href="#">Aug 05, 2017</a></span>
												   <span class="post-tag"><a href="#"><i class="fa fa-comments"></i>18</a></span>
												   <span class="post-like"><a href="#"><i class="fa fa-heart"></i>32</a></span>
												</div>
											</div> <!-- /.news-right -->
									   </li>
									   <li>
										   <div class="news-left">
											   <a href="#">
													<img src="assets/images/post/2.jpg" alt="News">
												</a>
										   </div>    
										   <div class="news-right">
												<a href="#">
													<h5>Sed do eiusmod tempor.</h5>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod consectetur adipisicing elit, sed do eiusmod tempor.</p>
												<div class="posted">
												   <span class="post-date"><a href="#">Aug 05, 2017</a></span>
												   <span class="post-tag"><a href="#"><i class="fa fa-comments"></i>18</a></span>
												   <span class="post-like"><a href="#"><i class="fa fa-heart"></i>32</a></span>
												</div>
											</div> <!-- /.news-right -->
									   </li>
									   <li>
										   <div class="news-left">
											   <a href="#">
													<img src="assets/images/post/3.jpg" alt="News">
												</a>
										   </div>    
										   <div class="news-right">
												<a href="#">
													<h5>Sed do eiusmod tempor.</h5>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporconsectetur adipisicing elit, sed do eiusmod .</p>
												<div class="posted">
												   <span class="post-date"><a href="#">Aug 05, 2017</a></span>
												   <span class="post-tag"><a href="#"><i class="fa fa-comments"></i>18</a></span>
												   <span class="post-like"><a href="#"><i class="fa fa-heart"></i>32</a></span>
												</div>
											</div> <!-- /.news-right -->
									   </li>
								   </ul>
								</div> <!-- /wi-content -->
							</div> <!-- /.comments-section -->
						</div> <!-- /.col- -->
					</div> <!-- /.blog -->

					<!-- Sidebar Area Start -->
					<aside class="sidebar">
						<div class="col-xs-12 col-sm-12 col-md-4">
						   
							
							<div class="widget">
								<div class="wi-side">
									<div class="wi-border">
										<h3 class="wi-border-title">Categories</h3>
									</div>
									<div class="wi-content wi-cat">
										<ul>
											<li>
												<a href="#">
													<span>consectetur</span>
													<span>(26)</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span>Science</span>
													<span>(05)</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span>Compute</span>
													<span>(73)</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span>consectetur</span>
													<span>(26)</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span>consectetur</span>
													<span>(26)</span>
												</a>
											</li>
											<li>
												<a href="#">
													<span>consectetur</span>
													<span>(26)</span>
												</a>
											</li>

										</ul>
									</div> <!-- /.wi-content -->
								</div> <!--     /.wi-side -->
							</div> <!-- /.widget -->


							<div class="widget">
								<div class="wi-side">
									<div class="wi-border">
										<h3 class="wi-border-title">Search</h3>
									</div>
									<div class="wi-content wi-search">
										<form action="#">
											<div class="form-group">
												<input type="search" placeholder="Search here.." class="form-control">
											</div>
											<div class="form-group">
												<div class="search-btn">
													<input type="submit" value="" class="form-control">
												</div>
											</div>
										</form>
									</div> <!-- /.wi-content -->
								</div> <!--     /.wi-side -->
							</div> <!-- /.widget -->

							<div class="widget">
								<div class="wi-side">
									<div class="wi-border">
										<h3 class="wi-border-title">Popular Post</h3>
									</div>
									<div class="wi-content wi-recent">
										<ul>
											<li><a href="#">consectetur adipisicing elit, sed.</a></li>
											<li><a href="#">do eiusmod tempor incididunt ut</a></li>
											<li><a href="#">do eiusmod tempor incididunt ut</a></li>
											<li><a href="#">do eiusmod tempor incididunt ut</a></li>
											<li><a href="#">do eiusmod tempor incididunt ut</a></li>
											<li><a href="#">do eiusmod tempor incididunt ut</a></li>
										</ul>
									</div> <!-- /.wi-content -->
								</div> <!--     /.wi-side -->
							</div> <!-- /.widget -->

							

						</div> <!-- /.col- -->
					</aside> <!-- /.sidebar -->
					<!-- Sidebar Area End -->
				</div> <!-- /.row -->  
			</div> <!-- /.container -->
		</section>


@endsection


@push('js')
@endpush