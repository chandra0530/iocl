@extends('user.layouts.user2')

@push('css')
   

@endpush
@section('content')  


<section class="page-head page-bg" style="background-image: url('assets/images/bg/contact.jpg')">
			<div class="container">    
				<h3 class="page-heading">Contact</h3>
				<div class="sub-title">
					<a href="#"><span>Home</span></a>
					<i class="fa fa-angle-right"></i>
					<a href="#"><span>Contact</span></a>
				</div>
			</div> <!-- /.container -->
		</section>
<section class="contact-us section">
			<div class="container">    
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<div class="contact-content">
							<div class="comm-title">
								<h3>Contact Us</h3>
							</div>
							<p>Lsed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat. Cupidatat non proident, sunt in culpa qui</p> 
							<p>Officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.  accusantium doloremque laudantium. totam rem aperiam.eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim iporem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
						</div> <!-- /.contact-content -->
						<div class="lets-contact">
							 <ul class="contact-list">
								<li>
									<a href="#"><i class="fa fa-paper-plane-o"></i>iocl</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-envelope-o"></i>admin@iocl.com</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-phone"></i>+iocl</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-history"></i>9.00 am to 9.00 pm in a day, 7 days a week</a>
								</li>

							</ul> <!-- /.contact-list -->
							<div class="contact-social">
								<ul>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-facebook"></i>
										  <i class="fa hover-show fa-facebook"></i>
									  </a>
								  </li>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-twitter"></i>
										  <i class="fa hover-show fa-twitter"></i>
									  </a>
								  </li>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-google-plus"></i>
										  <i class="fa hover-show fa-google-plus"></i>
									  </a>
								  </li>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-pinterest-p"></i>
										  <i class="fa hover-show fa-pinterest-p"></i>
									  </a>
								  </li>
								  <li>
									  <a href="#">
										  <i class="fa normal-show fa-youtube"></i>
										  <i class="fa hover-show fa-youtube"></i>
									  </a>
								  </li>
							  </ul>
							</div> <!-- /.contact-social -->
						</div> <!-- /.lets-contact -->
					</div> <!-- /.col- -->
					<div class="col-xs-12 col-sm-6">
						<div class="border-in">
							<div class="comm-title">
								<h3>Get in touch with us</h3>
							</div>
							<div class="contact-form">
								<form id="contact-form" method="post" action="assets/contact-script/contact.php" novalidate="true">
									<div class="row">
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="name" class="form-control" placeholder="Your Name" required="required" data-error="Write your name">
											</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="Your Email" required="required" data-error="Write your valid email address">
											</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Your Subject">
											</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<textarea name="comment" class="form-control" placeholder="Your Message" required="required" data-error="Write your comment"></textarea>
											</div>
										</div> <!-- /.col- -->
										<div class="form-group col-xs-12">
											<div class="form-btn">
												<input type="submit" name="submit" value="Send" class="contact-form-btn disabled">
											</div>
										</div>
										<div class="messages"></div>
									</div> <!-- /.row -->
								</form>
							</div> <!-- /.contact-form -->
						</div>
					</div> <!-- /.col- -->
				</div> <!-- /.row -->  
			</div> <!-- /.container -->
		</section>
@endsection


@push('js')
@endpush