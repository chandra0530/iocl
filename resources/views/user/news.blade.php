@extends('user.layouts.user2')

@push('css')
   

@endpush
@section('content')  



<section class="page-head page-bg" style="background-image: url('assets/images/bg/blog.jpg')">
			<div class="container">    
				<h3 class="page-heading">News</h3>
				<div class="sub-title">
					<a href="#"><span>Home</span></a>
					<i class="fa fa-angle-right"></i>
					<span>News</span>
				</div>
			</div> <!-- /.container -->
		</section>



<div class="page-in section">
			<div class="container">    
				<div class="row">
				<div class="blog">
				<div class="col-xs-12 col-sm-12 col-md-6">
						@foreach($news as $key => $news)
						

					
					
							<div class="blog-content">
								<div class="blog-feature">
									<img src="{{$news->images}}"  height="500px" width="500px" alt="Blog Photo">
									<div class="blog-share">
										<a href="#"><i class="fa fa-share-alt"></i></a>
										<a href="#"><i class="fa fa-comment"></i></a>
									</div> <!-- /.blog-share -->
									<div class="posted-by">
										<div class="posted-details">
											<div class="posted-left">
												<a class="posted-date" href="#">{{$news->created_at}}</a>
											</div> 
											<div class="posted-right">
												<a class="posted-like" href="#"><i class="fa fa-heart"></i><span> (73)</span></a>
											</div>
										</div> <!-- /.posted-details -->
									</div> <!-- /.posted-by -->
								</div> <!-- /.blog-feature -->
								<div class="post-title">
									<a href="/news_details/{{$news->id}}">
										<h3>{{$news->heading}}.</h3>
									</a>
								</div>
								<div class="post-content">
									<p>{{$news->news_short_description}}</p>
								</div>
								<div class="read-more">
									<a href="/news_details/{{$new->id}}">Read More</a>
								</div>
							</div> <!-- /.blog-content -->	
						
					
					
				
							@endforeach		
							</div> <!-- /.col- -->
							</div> <!-- /.blog -->		
				</div> <!-- /.row -->  


				<!-- /.blog-pagination -->

				

			</div> <!-- /.container -->
		</div>
@endsection


@push('js')
@endpush