@extends('user.layouts.user')

@push('css')
   

@endpush
@include('user.partials.nav2')
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
<div class="sharetastic"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Our</span> Events Gallery</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						</div>
					</div>
				</div> <!-- /.row -->
				<div class="portfolio-filter">
					<a class="current" href="#" data-filter="*">All</a>
					@foreach ($events as $event)
					<a href="#" data-filter=".{{$event->slug}}" class="">{{$event->gallery_event_name}}</a>
					@endforeach
				</div> <!-- /.portfolio-filter -->
				<div class="row">
					<div class="portfolio-details">
						<div class="portfolio-container grid" style="position: relative; height: 1189.78px;">

						@foreach ($eventpictures as $picture)
						<div class="grid-item col-md-4 col-sm-6 col-xs-12 {{$picture->slug}} limited" style="position: absolute; left: 0%; top: 0px;">
								<div class="portfolio-item">
									<img class="img-responsive" id="image{{$picture->id}}" src="{{$picture->image}}" alt="Gallery">
									<div class="port-hover">
										<div class="port-content">
										<p>Added by admin.</p>
											<a href="{{$picture->image}}" data-fancybox="group" class="port-icon">
												<img class="hidden-thumbnail" src="{{$picture->image}}" alt="Thumbnail">
												<img src="assets/images/icons/plus-btn.png" alt="Icon">
											</a>
										</div> <!-- /.port-content -->
									</div>
								</div><!-- /.portfolio-item -->
								<div class="blog-share">
									<div class="row">
									<div class="col-md-2">
									<a href="#"><i class="fa fa-heart heart"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-comment"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-facebook" onclick="fbs_click({{$picture->id}})"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-envelope" onclick="mail({{$picture->id}})"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-whatsapp" onclick="whatsapp({{$picture->id}})"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><img src="assets/icons/facebook-messenger-brands.svg" style="width: 15px;" onclick="messenger({{$picture->id}})"></a>
									</div>
									</div>
										
										
										
										
										
									</div>	
								
							</div> <!-- /.grid-item -->
					@endforeach
													
						</div><!-- /.portfolio-container -->
					</div> <!-- /.portfolio-details -->
				</div> <!-- /.row -->
			</div> <!-- /.container --> 
		</section>
@endsection


@push('js')
<script>
	$( document ).ready(function() {
    console.log( "ready!" );
	function fbs_click(TheImg) {
     console.log(TheImg);
	
    // window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(TheImg),'sharer','toolbar=0,status=0,width=626,height=436');return false;
}
});
    
</script>
@endpush