@extends('user.layouts.user2')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')  



<section class="page-head">
</section>
<div class="page-in section">
			<div class="container">  
            <!-- @include('user.partials.message')   -->
			<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Our</span> Ushare</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
						</div>
					</div>
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add</button>
					
				</div> <!-- /.row -->
                @include('user.partials.message')
            <div class="row">
				<div class="blog">
				<div class="col-xs-12 col-sm-12 col-md-6">
					@foreach($left as $key => $news)
						<div class="blog-content">
							<div class="blog-feature" style="width: 100%;
    height: 500px;
    overflow: hidden;">
                     <?php $images = json_decode($news->ushare_images); ?>
							<img src="{{$images[0]}}" alt="Team Member" height="500px" width="100%">
								
								<div class="posted-by">
									<div class="posted-details">
										<div class="posted-left">
											<a class="posted-date" href="#">{{$news->created_at}}</a>
										</div> 
										
									</div> <!-- /.posted-details -->
								</div> <!-- /.posted-by -->
							</div> <!-- /.blog-feature -->
							<div class="post-title">
								<a href="/ushare/{{$news->id}}">
									<h3>{{$news->ushare_name}}.</h3>
								</a>
							</div>
							<div class="post-content">

							  <p><b>Posted by {{$news->user_name}}</b> 

                              @if($news->relation_type !=NULL)         
                              $user = \App\Models\User::find($news->employe_relation_id);
                                {{ $news->relation_type}} of {{$user->name}}
                                @endif
</p>
							</div>
							<div class="read-more">
								<a href="/ushare/{{$news->id}}">Read More</a>
							</div>
						</div> <!-- /.blog-content -->	
					@endforeach		
				</div> <!-- /.col- -->
				<div class="col-xs-12 col-sm-12 col-md-6">
					@foreach($right as $key => $news)
						<div class="blog-content">
							<div class="blog-feature" style="width: 100%;
    height: 500px;
    overflow: hidden;">
                     <?php $images = json_decode($news->ushare_images); ?>
							<img src="{{$images[0]}}" alt="Team Member" height="500px" width="100%">
								<div class="posted-by">
									<div class="posted-details">
										<div class="posted-left">
											<a class="posted-date" href="#">{{$news->created_at}}</a>
										</div> 
									</div> <!-- /.posted-details -->
								</div> <!-- /.posted-by -->
							</div> <!-- /.blog-feature -->
							<div class="post-title">
								<a href="/ushare/{{$news->id}}">
									<h3>{{$news->ushare_name}}.</h3>
								</a>
							</div>
                            <div class="post-content">
								    <p><b>Posted by {{$news->user_name}}</b></p>
							</div>
							<div class="read-more">
								<a href="/ushare/{{$news->id}}">Read More</a>
							</div>
						</div> <!-- /.blog-content -->	
					@endforeach		
				</div> <!-- /.col- -->
							</div> <!-- /.blog -->		
				</div> 
				
				


				<!-- /.blog-pagination -->

				
                {{ $posts->links() }}
			</div> <!-- /.container -->
		</div>


		<div id="myModal" class="modal fade" role="dialog" style="margin-top: 100px;">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Ushare</h4>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-header">
                           <h4 class="card-title">Add new ushare </h4>
                        </div>
                        <div class="card-content">
                           <div class="card-body">
                              <form enctype="multipart/form-data" method="POST"
                                 action="{{ route('ushare_store') }}">
                                 @csrf
                                 <input type="hidden" name="ushare_status" value="inactive">
                                 <div class="row">
                                    <div class="col-sm-12 col-6">
                                       <fieldset class="form-group">
                                          <div class="text-bold-600 font-medium-2 mb-2">
                                             Ushare name
                                          </div>
                                          <input type="text" class="form-control" name="share_name"
                                             id="basicInput" placeholder="Enter ushare name" required>
                                       </fieldset>
                                    </div>
                                    <div class="col-sm-12 col-6">
                                       <fieldset class="form-group">
                                          <div class="text-bold-600 font-medium-2 mb-2">
                                             Videos (Max size 30Mb)(Accepted video formats .mp4)
                                          </div>
                                          <input type="file" class="form-control" name="videos[]" multiple 
                                             id="basicInput" placeholder="Enter news small description" accept="video/mp4,video/x-m4v,video/*"
>
                                       </fieldset>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <fieldset class="form-group">
                                          <div class="text-bold-600 font-medium-2 mb-2">
                                             Photo <small>( 600 * 400 )Px</small> (Max size 5Mb)(Accepted image formats .jpeg, .jpg, .png,)
                                          </div>
                                          <input type="file" name="photos[]" class="form-control" multiple
                                             id="photos" placeholder="Select product images" accept="image/x-png,image/jpeg" required>
                                       </fieldset>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <fieldset class="form-group">
                                            <div class="text-bold-600 font-medium-2 mb-2">
                                               Ushare Type</small>
                                            </div>
                                            <select name="ushare_type" class="form-control" placeholder="Select product images" required>
                                            @foreach($ushare_types as $ushare_type)
                                            <option value="{{$ushare_type->id}}">{{$ushare_type->ushare_type}} </option>
                                            @endforeach
                                             

                                            </select>
                                        </fieldset>
                                    </div>
                                    <div class="col-sm-12 col-12">
                                       <fieldset class="form-group">
                                          <div class="text-bold-600 font-medium-2 mb-2">
                                             Experience
                                          </div>
                                          <textarea name="desc"
                                             style="height: 500px; width: 100%" required></textarea>
                                       </fieldset>
                                    </div>
                                 </div>
                                 <button class="btn btn-primary btn-block waves-effect waves-light"
                                    type="submit">
                                 Add Ushare
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
