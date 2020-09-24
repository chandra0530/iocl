@extends('user.layouts.user')

@push('css')
   

@endpush
@section('content')  
<section class="page-head page-bg" style="background-image: url('assets/images/bg/portfolio.jpg');">
			<div class="container">    
				<h3 class="page-heading">Our Gallery</h3>
				<div class="sub-title">
					<a href="#"><span>Home</span></a>
					<i class="fa fa-angle-right"></i>
					<span>Gallery</span>
				</div>
			</div> <!-- /.container -->
		</section>
<section class="portfolios section">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Our</span> Awesome Works</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						</div>
					</div>
				</div> <!-- /.row -->
				<div class="portfolio-filter">
					<a class="current" href="#" data-filter="*">All</a>
					<a href="#" data-filter=".feature" class="">Featured</a>
					<a href="#" data-filter=".bseller" class="">Best Seller</a>
					<a href="#" data-filter=".limited" class="">Limited</a>
					<a href="#" data-filter=".figts" class="">Our Figts</a>
				</div> <!-- /.portfolio-filter -->
				<div class="row">
					<div class="portfolio-details">
						<div class="portfolio-container grid" style="position: relative; height: 1189.78px;">
							<div class="grid-item col-md-4 col-sm-6 col-xs-12 figts limited" style="position: absolute; left: 0%; top: 0px;">
								<div class="portfolio-item">
									<img class="img-responsive" src="assets/images/gallery/port/1.jpg" alt="Gallery">
									<div class="port-hover">
										<div class="port-content">
											<a href="#"><h3>Project Title Here</h3></a>
											<p>Lorem ipsum dolor sit amet.</p>
											<a href="assets/images/gallery/port/11.jpg" data-fancybox="group" class="port-icon">
												<img class="hidden-thumbnail" src="assets/images/gallery/port/1.jpg" alt="Thumbnail">
												<img src="assets/images/icons/plus-btn.png" alt="Icon">
											</a>
										</div> <!-- /.port-content -->
									</div> <!-- /.port-hover -->
								</div><!-- /.portfolio-item -->
							</div> <!-- /.grid-item -->
							<div class="grid-item col-md-4 col-sm-6 col-xs-12 feature bseller" style="position: absolute; left: 33.3333%; top: 0px;">
								<div class="portfolio-item">
									<img class="img-responsive" src="assets/images/gallery/port/2.jpg" alt="Gallery">
									<div class="port-hover">
										<div class="port-content">
											<a href="#"><h3>Project Title Here</h3></a>
											<p>Lorem ipsum dolor sit amet.</p>
											<a href="assets/images/gallery/port/22.jpg" data-fancybox="group" class="port-icon">
												<img class="hidden-thumbnail" src="assets/images/gallery/port/2.jpg" alt="Thumbnail">
												<img src="assets/images/icons/plus-btn.png" alt="Icon">
											</a>
										</div> <!-- /.port-content -->
									</div> <!-- /.port-hover -->
								</div><!-- /.portfolio-item -->
							</div> <!-- /.grid-item -->
							<div class="grid-item col-md-4 col-sm-6 col-xs-12 feature limited figts" style="position: absolute; left: 66.6667%; top: 0px;">
								<div class="portfolio-item">
									<img class="img-responsive" src="assets/images/gallery/port/3.jpg" alt="Gallery">
									<div class="port-hover">
										<div class="port-content">
											<a href="#"><h3>Project Title Here</h3></a>
											<p>Lorem ipsum dolor sit amet.</p>
											<a href="assets/images/gallery/port/33.jpg" data-fancybox="group" class="port-icon">
												<img class="hidden-thumbnail" src="assets/images/gallery/port/3.jpg" alt="Thumbnail">
												<img src="assets/images/icons/plus-btn.png" alt="Icon">
											</a>
										</div> <!-- /.port-content -->
									</div> <!-- /.port-hover -->
								</div><!-- /.portfolio-item -->
							</div> <!-- /.grid-item -->
							<div class="grid-item col-md-4 col-sm-6 col-xs-12 feature figts" style="position: absolute; left: 33.3333%; top: 321px;">
								<div class="portfolio-item">
									<img class="img-responsive" src="assets/images/gallery/port/5.jpg" alt="Gallery">
									<div class="port-hover">
										<div class="port-content">
											<a href="#"><h3>Project Title Here</h3></a>
											<p>Lorem ipsum dolor sit amet.</p>
											<a href="assets/images/gallery/port/55.jpg" data-fancybox="group" class="port-icon">
												<img class="hidden-thumbnail" src="assets/images/gallery/port/5.jpg" alt="Thumbnail">
												<img src="assets/images/icons/plus-btn.png" alt="Icon">
											</a>
										</div> <!-- /.port-content -->
									</div> <!-- /.port-hover -->
								</div><!-- /.portfolio-item -->
							</div> <!-- /.grid-item -->
							<div class="grid-item col-md-4 col-sm-6 col-xs-12 feature bseller" style="position: absolute; left: 0%; top: 516px;">
								<div class="portfolio-item">
									<img class="img-responsive" src="assets/images/gallery/port/4.jpg" alt="Gallery">
									<div class="port-hover">
										<div class="port-content">
											<a href="#"><h3>Project Title Here</h3></a>
											<p>Lorem ipsum dolor sit amet.</p>
											<a href="assets/images/gallery/port/44.jpg" data-fancybox="group" class="port-icon">
												<img class="hidden-thumbnail" src="assets/images/gallery/port/4.jpg" alt="Thumbnail">
												<img src="assets/images/icons/plus-btn.png" alt="Icon">
											</a>
										</div> <!-- /.port-content -->
									</div> <!-- /.port-hover -->
								</div><!-- /.portfolio-item -->
							</div> <!-- /.grid-item -->
							<div class="grid-item col-md-4 col-sm-6 col-xs-12 limited" style="position: absolute; left: 66.6667%; top: 516px;">
								<div class="portfolio-item">
									<img class="img-responsive" src="assets/images/gallery/port/6.jpg" alt="Gallery">
									<div class="port-hover">
										<div class="port-content">
											<a href="#"><h3>Project Title Here</h3></a>
											<p>Lorem ipsum dolor sit amet.</p>
											<a href="assets/images/gallery/port/66.jpg" data-fancybox="group" class="port-icon">
												<img class="hidden-thumbnail" src="assets/images/gallery/port/6.jpg" alt="Thumbnail">
												<img src="assets/images/icons/plus-btn.png" alt="Icon">
											</a>
										</div> <!-- /.port-content -->
									</div> <!-- /.port-hover -->
								</div><!-- /.portfolio-item -->
							</div> <!-- /.grid-item -->
							<div class="grid-item col-md-8 col-sm-6 col-xs-12 limited" style="position: absolute; left: 0%; top: 852px;">
								<div class="portfolio-item">
									<img class="img-responsive" src="assets/images/gallery/port/8.jpg" alt="Gallery">
									<div class="port-hover">
										<div class="port-content">
											<a href="#"><h3>Project Title Here</h3></a>
											<p>Lorem ipsum dolor sit amet.</p>
											<a href="assets/images/gallery/port/88.jpg" data-fancybox="group" class="port-icon">
												<img class="hidden-thumbnail" src="assets/images/gallery/port/6.jpg" alt="Thumbnail">
												<img src="assets/images/icons/plus-btn.png" alt="Icon">
											</a>
										</div> <!-- /.port-content -->
									</div> <!-- /.port-hover -->
								</div><!-- /.portfolio-item -->
							</div> <!-- /.grid-item -->
							<div class="grid-item col-md-4 col-sm-6 col-xs-12 limited" style="position: absolute; left: 66.6667%; top: 852px;">
								<div class="portfolio-item">
									<img class="img-responsive" src="assets/images/gallery/port/7.jpg" alt="Gallery">
									<div class="port-hover">
										<div class="port-content">
											<a href="#"><h3>Project Title Here</h3></a>
											<p>Lorem ipsum dolor sit amet.</p>
											<a href="assets/images/gallery/port/77.jpg" data-fancybox="group" class="port-icon">
												<img class="hidden-thumbnail" src="assets/images/gallery/port/7.jpg" alt="Thumbnail">
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
@endsection


@push('js')
@endpush