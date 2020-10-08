@extends('user.layouts.user2')

@push('css')
   

@endpush

@section('content')  
<section class="page-head page-bg" style="background-image: url('assets/images/bg/about.jpg')">
			<div class="container">    
				<h3 class="page-heading">Announcements</h3>
				<div class="sub-title">
					<a href="#"><span>Home</span></a>
					<i class="fa fa-angle-right"></i>
					<span>Announcements</span>
				</div>
			</div> <!-- /.container -->
		</section>
<section class="our-team section">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Our</span> Great Team</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
						</div>
					</div>
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="team-each">
							<div class="team-member">
								<img src="https://www.tattonclassiccarshow.com/wp-content/uploads/sites/27/2020/03/Announcement-scaled.jpg" alt="Team Member">
								
							</div> <!-- /.team-members -->
							<div class="member-name">
								<h4>Announcement1</h4>
								<p>12-12-20</p>
							</div><!-- /.member-name -->
							<div class="member-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim Ut enim minim veniam.</p>
							</div> <!-- /.member-content -->
						</div> <!-- /.team-each -->
					</div> <!-- /.col -->
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="team-each">
							<div class="team-member">
								<img src="https://www.tattonclassiccarshow.com/wp-content/uploads/sites/27/2020/03/Announcement-scaled.jpg" alt="Team Member">
								
							</div> <!-- /.team-members -->
							<div class="member-name">
								<h4>Announcement2</h4>
								<p>12-12-12</p>
							</div><!-- /.member-name -->
							<div class="member-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim Ut enim minim veniam.</p>
							</div> <!-- /.member-content -->
						</div> <!-- /.team-each -->
					</div> <!-- /.col -->
					
					
				</div><!-- row -->
			</div><!-- container -->
		</section>
@endsection


@push('js')
@endpush