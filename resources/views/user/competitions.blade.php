@extends('user.layouts.user2')

@push('css')
   

@endpush
@section('content')  
<section class="page-head">
			
		</section>
<section class="skill section">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Our</span> Compition</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
						</div>
					</div>
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#competition">Add Compition</button>
				</div> <!-- /.row -->
				
				@foreach($comp as $new)
				<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-member">
							<img src="{{$new->competition_image}}" alt="Team Member">
							
						</div> <!-- /.team-members -->
					</div> <!-- /.col -->
					<div class="col-xs-12 col-sm-6 col-md-5">
						<div class="skill-info">
						<a href="compotition_details/{{$new->id}}">	<h3>{{$new->competition_name}}</h3>
                            <p>Location: {{$new->compitition_location}}</p>
							<p> {!! html_entity_decode($new->competition_details) !!}</p>
                            </a>
						</div>
					</div> <!-- /.col -->

					<div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card-body">
    <h5 class="card-title">Competition detials</h5>
    <p class="card-text">
        Compitition location:{{$new->compitition_location}} <br>
        Compitition From: {{$new->event_from}}<br>
        Compitition To:{{$new->event_to}} <br>
        Compitition Type: {{$new->event_type}}<br>
    
    </p>
  </div>
                    <div class="row">
									<div class="col-md-2">
									<a href="#"><i class="fa fa-heart heart"></i></a>
									</div>
									
									<div class="col-md-2">
									<a href="#"><i class="fa fa-facebook" onclick="fbs_click(1)"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-envelope" onclick="mail(1)"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-whatsapp" onclick="whatsapp(1)"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><img src="assets/icons/facebook-messenger-brands.svg" style="width: 15px;" onclick="messenger(1)"></a>
									</div>
									</div>
					</div> <!-- /.col- -->
					</div><!-- row -->
				@endforeach
					
				
			</div><!-- container -->
		</section>

		<div id="competition" class="modal fade" role="dialog" style="margin-top: 100px;">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add News</h4>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-header">
                           <h4 class="card-title">Add News</h4>
                        </div>
                        <div class="card-content">
                           <div class="card-body">
						   <form enctype="multipart/form-data" method="POST"
                                              action="{{ route('compititions.store') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6 col-6">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Compitition Name
                                                        </div>
                                                        <input type="text" class="form-control" name="competition_name"
                                                               id="basicInput" placeholder="Enter compitition name">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-6">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Compitition Location
                                                        </div>
                                                        <input type="text" class="form-control" name="competition_location"
                                                               id="basicInput" placeholder="Enter compitition location">
                                                    </fieldset>
                                                </div>
                                                
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                            Photo <small>( 900 * 400 )Px</small>
                                                        </div>
                                                        <input type="file" multiple name="photos[]" class="form-control"
                                                               id="photos" placeholder="Select compitition images">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Compitition From
                                                        </div>
                                                        <input type="datetime-local" class="form-control" name="compitition_from"
                                                               id="basicInput" placeholder="Enter compitition from date">
                                                    </fieldset>
                                                    
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Compitition to
                                                        </div>
                                                        <input type="datetime-local" class="form-control" name="compitition_to"
                                                               id="basicInput" placeholder="Enter compitition to date">
                                                    </fieldset>
                                                    
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Compitition Type
                                                        </div>
                                                        <select class="form-control" name="event_type">
                                                        <option>Free</option>
                                                        <option>Paid</option>
                                                        </select>
                                                    </fieldset>
                                                    
                                                </div>  
                                                <div class="col-sm-12 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                            Description
                                                        </div>
                                                        <textarea id="desc" name="desc"
                                                                  style="height: 500px; width: 100%"></textarea>
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <button class="btn btn-primary btn-block waves-effect waves-light"
                                                    type="submit">
                                                Add Competition
                                            </button>
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
@endpush