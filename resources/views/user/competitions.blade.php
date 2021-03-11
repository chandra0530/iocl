@extends('user.layouts.user2')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    
@endpush
@section('content')  
<section class="page-head">
		</section>
        <section class="skill section">
			<div class="container">
            <!-- @include('user.partials.message') -->
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Ongoing</span> Competitions</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
						</div>
					</div>
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#competition">Participate</button>
				</div> <!-- /.row -->
                @include('user.partials.message')
				@foreach($comp as $new)
				<div class="row">
                <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#competition">Participate</button> -->
				<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-member">
                        <?php $images = json_decode($new->competition_image); ?>
							<img src="{{$images[0]}}" alt="Team Member">
							
						</div> <!-- /.team-members -->
					</div> <!-- /.col -->
					<div class="col-xs-12 col-sm-6 col-md-5">
						<div class="skill-info">
						<a href="competition_details/{{$new->id}}">	<h3>{{$new->competition_name}}</h3>
                            <p>Location: {{$new->compitition_location}}</p>
							<p  style="-webkit-line-clamp: 2; !Important"> {!! html_entity_decode($new->competition_details) !!}</p>
                            </a>
						</div>
					</div> <!-- /.col -->

					<div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card-body">
                        <h5 class="card-title">Competition Details</h5>
                        <p class="card-text">
                        Competition location:{{$new->compitition_location}} <br>
                        

                        Competition From: {{ date('d-M-Y', strtotime($new->event_from)) }}<br>
                        Competition To:{{ date('d-M-Y', strtotime($new->event_to)) }} <br>
                        Competition Type: {{ $new->event_type}}<br>
                        
                        </p>
                    </div>
                    <div class="row" style="display:flex;position: relative;">
									<div class="col-md-2">
									<a href="#"><i class="fa fa-facebook" onclick="share_news_fb()"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-envelope" onclick="share_news_mail()"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-whatsapp" onclick="share_news_whatsapp()"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><img src="assets/icons/facebook-messenger-brands.svg" style="width: 15px;" onclick="messenger(1)"></a>
									</div>
                                    <div class="col-md-2">
									
									</div>
									</div>
					</div> <!-- /.col- -->
				</div><!-- row -->
				@endforeach
					
				
			</div><!-- container -->
		</section>
        <section class="skill section">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Upcoming</span> Competitions</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
						</div>
					</div>
					<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#competition">Contribution</button> -->
				</div> <!-- /.row -->
				
				@foreach($upcomingcomp as $new)
				<div class="row">
                <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#competition">Participate</button> -->
				<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-member">
                        <?php $images = json_decode($new->competition_image); ?>
							<img src="{{$images[0]}}" alt="Team Member">
							
						</div> <!-- /.team-members -->
					</div> <!-- /.col -->
					<div class="col-xs-12 col-sm-6 col-md-5">
						<div class="skill-info">
						<a href="competition_details/{{$new->id}}">	<h3>{{$new->competition_name}}</h3>
                            <p>Location: {{$new->compitition_location}}</p>
							<p  style="-webkit-line-clamp: 2; !Important"> {!! html_entity_decode($new->competition_details) !!}</p>
                            </a>
						</div>
					</div> <!-- /.col -->

					<div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card-body">
                        <h5 class="card-title">Competition detials</h5>
                        <p class="card-text">
                        Competition location:{{$new->compitition_location}} <br>
                        Competition From: {{ date('d-M-Y', strtotime($new->event_from)) }}<br>
                        Competition To:{{ date('d-M-Y', strtotime($new->event_to)) }} <br>
                        Competition Type: {{$new->event_type}}<br>
                        
                        </p>
                    </div>
                    <div class="row" style="display:flex;position: relative;">
									<div class="col-md-2">
									<a href="#"><i class="fa fa-facebook" onclick="share_news_fb()"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-envelope" onclick="share_news_mail()"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-whatsapp" onclick="share_news_whatsapp()"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><img src="assets/icons/facebook-messenger-brands.svg" style="width: 15px;" onclick="messenger(1)"></a>
									</div>
                                    <div class="col-md-2">
									
									</div>
									</div>
					</div> <!-- /.col- -->
				</div><!-- row -->
				@endforeach
					
				
			</div><!-- container -->
		</section>
        <section class="skill section">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Past</span> Competitions</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
						</div>
					</div>
					<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#competition">Contribution</button> -->
				</div> <!-- /.row -->
				
				@foreach($pastcomp as $new)
				<div class="row">
                <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#competition">Participate</button> -->
				<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="team-member">
                        <?php $images = json_decode($new->competition_image); ?>
							<img src="{{$images[0]}}" alt="Team Member">
							
						</div> <!-- /.team-members -->
					</div> <!-- /.col -->
					<div class="col-xs-12 col-sm-6 col-md-5">
						<div class="skill-info">
						<a href="competition_details/{{$new->id}}">	<h3>{{$new->competition_name}}</h3>
                            <p>Location: {{$new->compitition_location}}</p>
							<p  style="-webkit-line-clamp: 2; !Important"> {!! html_entity_decode($new->competition_details) !!}</p>
                            </a>
						</div>
					</div> <!-- /.col -->

					<div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card-body">
                        <h5 class="card-title">Competition detials</h5>
                        <p class="card-text">
                        Competition location:{{$new->compitition_location}} <br>
                        Competition From: {{ date('d-M-Y', strtotime($new->event_from)) }}<br>
                        Competition To:{{ date('d-M-Y', strtotime($new->event_to)) }} <br>
                        Competition Type: {{$new->event_type}}<br>
                        
                        </p>
                    </div>
                    <div class="row" style="display:flex;position: relative;">
									<div class="col-md-2">
									<a href="#"><i class="fa fa-facebook" onclick="share_news_fb()"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-envelope" onclick="share_news_mail()"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><i class="fa fa-whatsapp" onclick="share_news_whatsapp()"></i></a>
									</div>
									<div class="col-md-2">
									<a href="#"><img src="assets/icons/facebook-messenger-brands.svg" style="width: 15px;" onclick="messenger(1)"></a>
									</div>
                                    <div class="col-md-2">
									
									</div>
									</div>
					</div> <!-- /.col- -->
				</div><!-- row -->
				@endforeach
					
				
			</div><!-- container -->
		</section>


        <section class="get-touch section contact" id="contact_us" style="padding-top:0px !important;"> 
            <div class="container">    
                <div class="row">
                    <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                        <div class="section-heading">
                            <h2 class="title"><span>Get</span> in Touch</h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
                        </div>
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-xs-offset-0">
                         <div class="contact-info">
                            <div class="row">
                                <div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
                                    <div class="con-text in-map">
                                    Indian Oil Bhavan<br>
                                        Eastern Region Office<br>
                                        IndianOil Corporation Limited<br>
                                        2-Gariahat Road (South)<br>
                                        Pin: 700068<br>
                                    </div>
                                </div>
                                <div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
                                    <div class="con-text in-envelope">
                                    Arup Das<br>
                                    arupdas@indianoil.in<br>
                                    98306 04960
                                    </div>
                                </div>
                                <div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
                                    <div class="con-text in-envelope">
                                    Souptik Mukherje<br>
                                   souptikmukherjee@indianoil.in<br>
                                   7044062168<br>
                                   <br>
                                   Tapan Kumar Pradhan<br>
                                   tapankp@indianoil.in<br>
                                   7993542670
                                    </div>
                                </div>
                                
                            </div> <!-- /.row -->
                        </div> <!-- /.contact-info -->
                        
                        
                        
                        <div class="contact-form">
                            
                            <form  method="post" action="{{ route('submitcontactform') }}" >
                            @csrf
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Write your name">
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Write your valid email address">
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" required="required"  placeholder="Phone Number">
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject " required="required" data-error="Write your subject">
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="comment" class="form-control" placeholder="Message" required="required" data-error="Write your comment"></textarea>
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="form-group col-xs-12 col-md-12">
                                        <div class="form-btn">
                                            <input type="submit" name="submit" value="Send" class="contact-form-btn disabled">
                                        </div>
                                    </div>
                                    <div class="messages"></div>
                                </div> <!-- /.row -->
                            </form>
                        </div> <!-- /.contact-form -->
                    </div> <!-- /.col- -->
                </div> <!-- /.row -->  
            </div> <!-- /.container -->
        </section>  
        <footer class="footer">
             <!-- /.footer-main -->
            <div class="copyright">
                <div class="container">
                    IOCL Parivar © 2018 All rights reserved.
                </div>
            </div> <!-- /.copyright -->
        </footer>
        
        


		<div id="competition" class="modal fade" role="dialog" style="margin-top: 100px;">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Competition</h4>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-header">
                           <h4 class="card-title">Add Competition</h4>
                        </div>
                        <div class="card-content">
                           <div class="card-body">
						   <form enctype="multipart/form-data" method="POST"
                                              action="{{ route('publishreview') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6 col-6">
                                                <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Compitition Name
                                                        </div>
                                                        <select class="form-control" name="comp_id" required>
                                                        @foreach($competitions as $competition)


<option value="{{$competition->id}}">{{$competition->competition_name}}</option>

@endforeach
                                                        </select>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-6">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                            Photo <small>( 600 * 400 )Px</small> (Max size 5mb)(Accepted image formats .jpeg, .jpg, .png,)
                                                        </div>
                                                        <input type="file" multiple name="photos[]" class="form-control"
                                                               id="photos" placeholder="Select compitition images" accept="image/x-png,image/gif,image/jpeg" required>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-6">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                            Videos (Max size 30mb)(Accepted video formats .mp4)
                                                        </div>
                                                        <input type="file" multiple name="videos[]" class="form-control"
                                                               id="videos" placeholder="Select compitition images" accept="video/mp4,video/x-m4v,video/*"
>
                                                    </fieldset>
                                                </div>
                                                
                                                <div class="col-sm-6 col-6">
                                                   
                                                    
                                                </div>  
                                                <div class="col-sm-12 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                            Description
                                                        </div>
                                                        <textarea name="desc"
                                                                  style="height: 300px; width: 100%" required></textarea>
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <button class="btn btn-primary btn-block waves-effect waves-light"
                                                    type="submit">
                                               Submit
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
