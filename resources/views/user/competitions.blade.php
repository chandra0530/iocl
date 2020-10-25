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
							<div class="member-hover">
								<div class="member-info">
									<div>
										<a href="#" class="cbiz-btn">About More</a>
									</div>
									<div class="member-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube"></i></a></li>

										</ul>
									</div>
								</div>
							</div><!-- /.member-hover -->
						</div> <!-- /.team-members -->
						<div class="member-name">
							<h4>{{$new->competition_name}}</h4>
							<p>Location: Bag stadium</p>
						</div><!-- /.member-name -->
					</div> <!-- /.col -->
					<div class="col-xs-12 col-sm-6 col-md-5">
						<div class="skill-info">
							<h3>Compotition Name</h3>
							<p> {!! html_entity_decode($new->competition_details) !!}</p>
						</div>
					</div> <!-- /.col -->

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="skill-progress">
							<div class="progressbar-start">
								<div class="prog-item">
									<h5>1st prize</h5>
									<div id="web" data-percent="100" data-color="rgba(38,71,108,.7)" class="bar-progres prog-web"><div class="progressbar" style="width: 100%; background-color: rgb(238, 238, 238); border-radius: 0px;"><div class="proggress" style="background-color: rgba(38, 71, 108, 0.7); height: 10px; border-radius: 0px; width: 79%;"><div class="percentCount">100k</div></div></div></div>
								</div>
								<div class="prog-item">
									<h5>2nd prize</h5>
									<div id="graphic" data-percent="85" data-color="rgba(249,186,72,.7)" class="bar-progres prog-graphic"><div class="progressbar" style="width: 100%; background-color: rgb(238, 238, 238); border-radius: 0px;"><div class="proggress" style="background-color: rgba(249, 186, 72, 0.7); height: 10px; border-radius: 0px; width: 95%;"><div class="percentCount">85k</div></div></div></div>
								</div> 
								<div class="prog-item">
									<h5>3rd prize</h5>
									<div id="writing" data-percent="60" data-color="rgba(50,143,127,.7)" class="bar-progres prog-writing"><div class="progressbar" style="width: 100%; background-color: rgb(238, 238, 238); border-radius: 0px;"><div class="proggress" style="background-color: rgba(50, 143, 127, 0.7); height: 10px; border-radius: 0px; width: 60%;"><div class="percentCount">60k</div></div></div></div>
								</div> 
								<!-- <div class="prog-item">
									<h5>HTML/CSS</h5>
									<div id="html" data-percent="91" data-color="rgba(201,105,105,.7)" class="bar-progres prog-html"><div class="progressbar" style="width: 100%; background-color: rgb(238, 238, 238); border-radius: 0px;"><div class="proggress" style="background-color: rgba(201, 105, 105, 0.7); height: 10px; border-radius: 0px; width: 91%;"><div class="percentCount">91%</div></div></div></div>
								</div>  -->
							</div>
						</div> <!-- /.skill-progress -->
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