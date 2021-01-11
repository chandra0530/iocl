@extends('user.layouts.user2')

@push('css')
   

@endpush
@section('content')  
<section class="page-head">
			
		</section>
        @include('user.partials.message')

<section class="contact-us section">
			<div class="container">    
				<div class="row">
                <div class="col-xs-12 col-sm-3">
					</div> <!-- /.col- -->
					<div class="col-xs-12 col-sm-6">
						<div class="border-in">
							<div class="comm-title">
								<h3 style="text-transform: CAPITALIZE;">Update Your Profile Details</h3>
							</div>
							<div class="contact-form">
								<form method="post" action="{{ route('update_profile') }}" novalidate="true">
									<div class="row">
                                    {{ csrf_field() }}
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="name" class="form-control" placeholder="Your Name" required="required" value="{{$user_details->name}}" readonly>
											</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="Your Email" required="required" value="{{$user_details->email}}" readonly>
											</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="password" class="form-control" placeholder="Your Password" >
											</div>
                                        </div> <!-- /.col- -->
                                        <div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="employeid" class="form-control" placeholder="Your Employeid" required="required" value="{{$user_details->employeid}}" readonly>
											</div>
                                        </div> <!-- /.col- -->
                                        <div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="mobile_no" class="form-control" placeholder="Your Mobile Number" required="required" value="{{$user_details->phone_number}}">
											</div>
                                        </div> <!-- /.col- -->
                                        <div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="spouce_name" class="form-control" placeholder="Your Spouce Name" required="required" value="{{$user_details->spouce_name}}">
											</div>
                                        </div> <!-- /.col- -->
                                        <div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="spouce_email" class="form-control" placeholder="Your Spouce Email" required="required" value="{{$user_details->spouce_email}}">
											</div>
                                        </div> <!-- /.col- -->
                                        
										<div  id="items">

										@php
										$childnames = explode(">>",$user_details->child_name);
										$childemails = explode(">>",$user_details->child_email);
                                        $childgender = explode(">>",$user_details->child_gender);
										
										@endphp
                                        <input type="hidden" id="child_number" name="no_of_childs" value="{{sizeOf($childgender)}}">
										@for ($i = 0; $i < sizeof($childnames); $i++)
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="child_name[]" class="form-control" placeholder="Your Child Name" required="required" value="{{$childnames[$i]}}">
											</div>
                                        </div> <!-- /.col- -->
                                        <div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="child_email[]" class="form-control" placeholder="Your Child Email" required="required" value="{{$childemails[$i]}}">
											</div>
										</div> <!-- /.col- -->
                                        <div class="col-xs-12 col-sm-12">
                                        <div class="form-group">
                                        <label class="radio-inline">
      <input type="radio" name="child_gender{{$i}}[]" value="male"  value="{{$childgender[$i]}}" @if($childgender[$i]=='male'){{ "checked" }} @endif>Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="child_gender{{$i}}[]" value="female" value="{{$childgender[$i]}}" @if($childgender[$i]=='female'){{ "checked" }} @endif>Female
    </label>
                                        
                                      
                                       
											
											</div>
                                        </div>

                                        
										@endfor
										
										</div>

                                        
                                        



										<div class="form-group col-xs-12">
											<div class="form-btn">
												<button type="button" class="contact-form-btn" onclick="addChild()">Add Child</button>
											</div>
										</div>


										<div class="form-group col-xs-12">
											<div class="form-btn">
												<input type="submit" name="submit" value="Update Profile" class="contact-form-btn disabled">
											</div>
										</div>
										<div class="messages"></div>
									</div> <!-- /.row -->
								</form>
							</div> <!-- /.contact-form -->
						</div>
                    </div> <!-- /.col- -->
                    <div class="col-xs-12 col-sm-3">
					</div> <!-- /.col- -->
				</div> <!-- /.row -->  
			</div> <!-- /.container -->
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
                                    Souptik Mukherje
                                   souptikmukherjee@indianoil.in<br>
                                   <br>
                                   Tapan Kumar Pradhan<br>
                                   tapankp@indianoil.in
                                    </div>
                                </div>
                                <div class="con-align col-xs-12 col-xs-offset- col-sm-4 col-sm-offset-0">
                                    <div class="con-text in-phone">
                                    7044062168	<br><br><br>
                                    7993542670<br><br>
                                    </div>
                                </div>
                            </div> <!-- /.row -->
                        </div> <!-- /.contact-info -->
                        
                        
                        
                        <div class="contact-form">
                            <form id="contact-form" method="post" action="" novalidate="true">
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
                                            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div> <!-- /.col- -->
                                    <div class="col-xs-12 col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject" required="required" data-error="Write your subject">
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

<script>



</script>
@endpush