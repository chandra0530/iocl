@extends('user.layouts.user2')

@push('css')
   

@endpush

@section('content')  
<section class="page-head">
			
		</section>
<section class="our-team section">
			<div class="container">
				<div class="row">
            <button type="button" style="float: right;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#announcement">Add Announcement</button>

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
                     <a href="announcement_details/{{$announce->id}}">
								<h4>{{$announce->annoucemnt_name}}</h4>
								<p>{{$announce->announcement_details}}</p>
                     </a>
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





		<div id="announcement" class="modal fade" role="dialog" style="margin-top: 100px;">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Contribution</h4>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-header">
                           <h4 class="card-title">Add Announcement</h4>
                        </div>
                        <div class="card-content">
                           <div class="card-body">
						   <form enctype="multipart/form-data" method="POST"
                                              action="{{ route('announcements.store') }}">
                                            @csrf
                                            <input type="hidden" name="status" value="inactive">
                                            <div class="row">
                                                <div class="col-sm-12 col-6">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                            Announcement Name
                                                        </div>
                                                        <input type="text" class="form-control" name="announcement_name"
                                                               id="basicInput" placeholder="Enter news headline">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-12 col-6">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Announcement Description
                                                        </div>
                                                        <input type="text" class="form-control" name="announcement_Desc"
                                                               id="basicInput" placeholder="Enter news small description">
                                                    </fieldset>
                                                </div>
                                               
                                                
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                            Photo <small>( 900 * 400 )Px</small>
                                                        </div>
                                                        <input type="file" multiple name="photos" class="form-control"
                                                               id="photos" placeholder="Select product images">
                                                    </fieldset>
                                                </div>
                                               
                                            </div>

                                            <button class="btn btn-primary btn-block waves-effect waves-light"
                                                    type="submit">
                                                Add Announcement
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