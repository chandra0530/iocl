@extends('user.layouts.user2')

@push('css')
   

@endpush

@section('content')  
<section class="page-head">
			
		</section>
<section class="our-team section">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Our</span> Announcements</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						</div>
					</div>
				</div> <!-- /.row -->
				<div class="row">
				@foreach($announcement as $announce)
				<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="team-each">
							<div class="team-member">
								<img src="{{$announce->announcement_image}}" alt="Team Member">
								
							</div> <!-- /.team-members -->
							<div class="member-name">
								<h4>{{$announce->annoucemnt_name}}</h4>
								<p>{{$announce->announcement_details}}</p>
							</div><!-- /.member-name -->
							<div class="member-content">
								<p>{{$announce->updated_at}}</p>
							</div> <!-- /.member-content -->
						</div> <!-- /.team-each -->
					</div> <!-- /.col -->
				@endforeach
					
					
				</div><!-- row -->
			</div><!-- container -->
		</section>
@endsection


@push('js')
@endpush