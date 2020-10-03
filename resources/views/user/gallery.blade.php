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
<div class="sharetastic"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Our</span> Events</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						</div>
					</div>
				</div> <!-- /.row -->
				<div class="portfolio-filter">
					<a class="current" href="#" data-filter="*">All</a>
					@foreach ($events as $event)
					<a href="#" data-filter=".{{$event->gallery_event_name}}" class="">{{$event->gallery_event_name}}</a>
					@endforeach
				</div> <!-- /.portfolio-filter -->
				<div class="row">
					<div class="portfolio-details">
						<div class="portfolio-container grid" style="position: relative; height: 1189.78px;">

						@foreach ($eventpictures as $picture)
						<div class="grid-item col-md-4 col-sm-6 col-xs-12 {{$picture->gallery_event_name}} limited" style="position: absolute; left: 0%; top: 0px;">
								<div class="portfolio-item">
									<img class="img-responsive" src="{{$picture->image}}" alt="Gallery">	
								</div><!-- /.portfolio-item -->
							</div> <!-- /.grid-item -->
					@endforeach
													
						</div><!-- /.portfolio-container -->
					</div> <!-- /.portfolio-details -->
				</div> <!-- /.row -->
			</div> <!-- /.container --> 
		</section>
@endsection


@push('js')
@endpush