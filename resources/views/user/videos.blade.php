@extends('user.layouts.user2')

@push('css')
   

@endpush
@section('content')  

        <section class="portfolios section" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                        <div class="section-heading">
                            <h2 class="title">Videos</h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
                        </div>
                    </div>
                </div> <!-- /.row -->
                <div class="row">
                    <div class="portfolio-details">
                        <div class="portfolio-container grid" style="position: relative; height: 270.188px;">
                            <div class="grid-item col-md-4 col-xs-6 figts limited" style="position: absolute; left: 0px; top: 0px;">
                            <video width="320" height="240" style="max-width: 100%;" controls>
  <source src="{{ asset('assets/videos/video1.mp4')}}" type="video/mp4">
Your browser does not support the video tag.
</video>
                            </div> <!-- /.grid-item -->
                            <div class="grid-item col-md-4 col-xs-6 feature bseller" style="position: absolute; left: 390px; top: 0px;">
                                <div class="portfolio-item">
                                <video width="320" height="240" style="max-width: 100%;" controls>
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