@extends('user.layouts.user2')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')  
<section class="page-head">
			
		</section>
<section class="about-content-area section">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Our</span> Events</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
						</div>
					</div>
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#events">Contribution</button>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
			<div class="about-overview">
				<div class="container">   
				@foreach($event as $key => $event)
						
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<div class="about-text" >
                            <a  href="event_details/{{$event->id}}">
								<h4>{{$event->events_names}}.</h4>
								<p> {!! html_entity_decode($event->event_details) !!}</p>
                                </a>
							</div>
						</div> <!-- /.col- -->
						<!-- <div class="about-overview-img"> -->
							<div class="col-sm-12 col-md-6 " style="display: flex;">
                            <?php $images=json_decode($event->event_images);?>
                            @for ($i = 0; $i < sizeof($images); $i++)
                            <img class="img-responsive" src="{{$images[$i]}}" alt="Img" style="width:100px;height:100px">
                            @endfor
								
                                
							
							</div>
						<!-- </div> /.about-overview-img -->
					</div> <!-- /.row -->  
				@endforeach
				</div> <!-- /.container -->
			</div> <!-- /.about-overview -->
		</section>

		<div id="events" class="modal fade" role="dialog" style="margin-top: 100px;">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Event</h4>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-header">
                           <h4 class="card-title">Add Event</h4>
                        </div>
                        <div class="card-content">
                           <div class="card-body">
						   <form enctype="multipart/form-data" method="POST"
                                              action="{{ route('events.store') }}">
                                            @csrf
                                            <input type="hidden" name="status" value="inactive">
                                            <div class="row">
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Event name
                                                        </div>
                                                        <input type="text" class="form-control" name="event_name"
                                                               id="basicInput" placeholder="Enter news headline">
                                                    </fieldset>
                                                </div>
                                                
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                            Photo <small>( 900 * 400 )Px</small>
                                                        </div>
                                                        <input type="file" multiple name="photos[]" class="form-control"
                                                               id="photos" placeholder="Select product images">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Event From
                                                        </div>
                                                        <input type="datetime-local" class="form-control" name="event_from"
                                                               id="basicInput" placeholder="Enter news headline">
                                                    </fieldset>
                                                    
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Event to
                                                        </div>
                                                        <input type="datetime-local" class="form-control" name="event_to"
                                                               id="basicInput" placeholder="Enter news headline">
                                                    </fieldset>
                                                    
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Event Type
                                                        </div>
                                                        <select class="form-control" name="event_type">
                                                        <option>Free</option>
                                                        <option>Paid</option>
                                                        </select>
                                                    </fieldset>
                                                    
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                            Event location
                                                        </div>
                                                        <input type="text" class="form-control" name="event_location"
                                                               id="basicInput" placeholder="Enter news headline">
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
                                                Add Event
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#desc').summernote();
            $('#choice_attributes').on('change', function () {
                $('#customer_choice_options').html(null);
                $('#sku_choice_options').html(null);
                $.each($("#choice_attributes option:selected"), function () {
                    add_more_customer_choice_option($(this).val(), $(this).text());
                });
            });

            function add_more_customer_choice_option(i, name) {
                $('#customer_choice_options').append('' +
                    '<div class="row mb-3">' +
                    '<div class="col-8 col-md-3 order-1 order-md-0">' +
                    '<input type="hidden" name="choice_no[]" value="' + i + '">' +
                    '<input type="text" class="form-control" name="choice[]" value="' + name + '" placeholder="Choice Title" readonly>' +
                    '</div>' +
                    '<div class="col-12 col-md-7 col-xl-8 order-3 order-md-0 mt-2 mt-md-0">' +
                    '<input type="text" class="form-control" id="choice_options_' + i + '" name="choice_options_' + i + '[]" onChange="getProductCombinations()" placeholder="Enter choice values by comma" >' +
                    '</div>' +
                    '<div class="col-4 col-xl-1 col-md-2 order-2 order-md-0 text-right">' +
                    '<button type="button" onclick="delete_row(this)" class="btn btn-link btn-icon text-danger">' +
                    '<i class="fa fa-trash-o"></i>' +
                    '</button>' +
                    '</div>' +
                    '</div>');
            }

        });

        function delete_row(em) {
            $('#sku_choice_options').html(null);
            $(em).closest('.row').remove();
        }

       

    </script>
@endpush