@extends('user.layouts.user2')

@push('css')
   

@endpush
@section('content')  
<section class="page-head">
			
		</section>
<section class="portfolios section">
<div class="sharetastic"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Our</span> Events Gallery</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
						</div>
					</div>
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#gallery">Add Gallery</button>
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

						@foreach ($eventpictures as $key => $picture)
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
                                    @if($userlikes[$key])
									<a href="/deletegallerylike/{{ Auth::user()->id }}/{{$picture->id}}" ><i class="fa fa-heart heart"></i></a>
									@else
                                    <a href="/addgallerylike/{{ Auth::user()->id }}/{{$picture->id}}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
									@endif
									</div>
									<div class="col-md-2">
									<a href="gallery_details/{{$picture->id}}"><i class="fa fa-comment"></i></a>
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



		<section class="portfolios section" id="gallery2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                        <div class="section-heading">
                            <h2 class="title">Videos</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        </div>
                    </div>
                </div> <!-- /.row -->
                <div class="row">
                    <div class="portfolio-details">
                        <div class="portfolio-container grid" style="position: relative; height: 270.188px;">
                            <div class="grid-item col-md-4 col-xs-6 figts limited" style="position: absolute; left: 0px; top: 0px;">
                            <video width="320" height="240" controls>
  <source src="{{ asset('assets/videos/video1.mp4')}}" type="video/mp4">
Your browser does not support the video tag.
</video>
                            </div> <!-- /.grid-item -->
                            <div class="grid-item col-md-4 col-xs-6 feature bseller" style="position: absolute; left: 390px; top: 0px;">
                                <div class="portfolio-item">
                                <video width="320" height="240" controls>
  <source src="{{ asset('assets/videos/video2.mp4')}}" type="video/mp4">
Your browser does not support the video tag.
</video>
                                </div><!-- /.portfolio-item -->
                            </div> <!-- /.grid-item -->
                            <div class="grid-item col-md-4 col-xs-6 feature limited figts" style="position: absolute; left: 780px; top: 0px;">
                                <div class="portfolio-item">
                                   
                                </div><!-- /.portfolio-item -->
                            </div> <!-- /.grid-item -->
                           
                            
                            
                            
                        </div><!-- /.portfolio-container -->
                   
                        
                    </div> <!-- /.portfolio-details -->
                    
                </div> <!-- /.row -->
                
            </div> <!-- /.container --> 
        </section>




		<div id="gallery" class="modal fade" role="dialog" style="margin-top: 100px;">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Gallery</h4>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-header">
                           <h4 class="card-title">Add Gallery</h4>
                        </div>
                        <div class="card-content">
                           <div class="card-body">
						   <form enctype="multipart/form-data" method="POST" action="{{ route('galleryevent.store') }}">
                                        @csrf
                        <input type="hidden" name="status" value="status" >
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <fieldset class="form-group">
                                    <label for="basicInputFile">Select Event</label>
                                    <div class="form-group">
                                                        <select class="select2 form-control" id='choice_attributes' name="event_id">
                                                        @foreach($events as $event)
                                        <option value="{{ $event->id }}">{{ $event->gallery_event_name }}</option>
                                    @endforeach
                                                        </select>
                                                    </div>
                                    
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <fieldset class="form-group">
                                    <label for="basicInputFile">With Browse button</label>
                                    <div class="custom-file">
                                        <input type="file" name="gallery_image" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                        </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
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