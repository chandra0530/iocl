@extends('user.layouts.user2')

@push('css')
   

@endpush
@section('content')  
<section class="page-head page-bg" style="background-image: url('assets/images/bg/about.jpg')">
			<div class="container">    
				<h3 class="page-heading">Events</h3>
				<div class="sub-title">
					<a href="#"><span>Home</span></a>
					<i class="fa fa-angle-right"></i>
					<span>Events</span>
				</div>
			</div> <!-- /.container -->
		</section>
<section class="about-content-area section">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Our</span> Events</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						</div>
					</div>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
			<div class="about-overview">
				<div class="container">   
				@foreach($event as $key => $event)
						
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="about-text">
								<h4>{{$event->events_names}}.</h4>
								<p> {!! html_entity_decode($event->event_details) !!}</p>
							</div>
						</div> <!-- /.col- -->
						<div class="about-overview-img">
							<div class="col-sm-12 col-md-6 visible-xs visible-sm">
								<img class="img-responsive" src="{{$event->event_images}}" alt="Img">
							
							</div>
						</div> <!-- /.about-overview-img -->
					</div> <!-- /.row -->  
				@endforeach
				</div> <!-- /.container -->
			</div> <!-- /.about-overview -->
		</section>
@endsection


@push('js')
@endpush