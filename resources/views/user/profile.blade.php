@extends('user.layouts.user2')

@push('css')
   

@endpush
@section('content')  
<section class="page-head">
			
		</section>
        <!-- @include('user.partials.message') -->
        <script>
        function isNumberKey(evt){
	console.log(evt.target.value);
	var str=evt.target.value;
	console.log(str.length);
	var length=parseInt(str.length);
	if(length<10){
		var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)){
		return false;
	}   
    return true;
	}else{
		return false;
	}
    
} 
        </script>
<section class="contact-us section" style="background-color: #f7d9b5;">
			<div class="container">    
            @include('user.partials.message')
				<div class="row">
                <div class="col-xs-12 col-sm-3">
					</div> <!-- /.col- -->
					<div class="col-xs-12 col-sm-6">
						<div class="border-in" style="background-color: white;">
							<div class="comm-title">
								<h3 style="text-transform: CAPITALIZE;">Update Your Profile Details</h3>
							</div>
							<div class="contact-form">
								<form method="post" action="{{ route('update_profile') }}" novalidate="true" enctype="multipart/form-data">
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
												<input type="file" name="profile_image" class="form-control" placeholder="Your Email" required="required" accept="image/x-png,image/gif,image/jpeg"   data-toggle="tooltip" title="Select a photo to upload.">
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
<hr>
@if($user_details->employe_id ==NULL)
<div class="col-xs-12 col-sm-12">
											<div class="form-group">
                                                <h6 class="family-members-details">Family members details</h6>
											</div>
                                        </div>
                                        @endif
										<div  id="items">
                                       @If($user_details->employe_id ==NULL)
                                       @for ($i = 0; $i < sizeof($family_member_Details); $i++)
                                        <div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<select class="form-control" name="member_type[]" value="{{$family_member_Details[$i]->relation}}" placeholder="Select Member" required="required">
                                                <option>Select member type</option>
                                                    <option value="father" {{ $family_member_Details[$i]->relation == 'father' ? "selected" : "" }} >Father</option>
                                                    <option value="mother" {{ $family_member_Details[$i]->relation == 'mother' ? "selected" : "" }}>Mother</option>
                                                    <option value="husband" {{ $family_member_Details[$i]->relation == 'husband' ? "selected" : "" }}>Husband</option>
                                                    <option value="wife" {{ $family_member_Details[$i]->relation == 'wife' ? "selected" : "" }}>Wife</option>
                                                    <option value="son" {{ $family_member_Details[$i]->relation == 'son' ? "selected" : "" }}>Son</option>
                                                    <option value="daughter" {{ $family_member_Details[$i]->relation == 'daughter' ? "selected" : "" }}>Daughter</option>
                                                </select>
											</div>
                                        </div>
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="member_name[]" class="form-control" placeholder="Your member Name" required="required" value="{{$family_member_Details[$i]->name}}">
											</div>
                                        </div> <!-- /.col- -->
                                        <div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="email" name="member_email[]" class="form-control" placeholder="Your member Email" required="required" value="{{$family_member_Details[$i]->email}}">
											</div>
										</div>
                                        <div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="member_phone[]" class="form-control" placeholder="Member Phone" required="required" onkeypress="return isNumberKey(event)" value="{{$family_member_Details[$i]->phone_number}}">
											</div>
                                        </div>
                                        @endfor
                                       @endif
                                   
									
                                         <!-- /.col- -->
                                         <hr class="new1">
                                        


							
										
										</div>

                                        
                                        


                                        @if($user_details->employe_id ==NULL)
										<div class="form-group col-xs-12">
											<div class="form-btn">
												<button type="button" class="contact-form-btn" onclick="addChild()">Add Member</button>
											</div>
										</div>
                                        @endif

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
                            
                            <form  method="post" action="{{ route('submitcontactform') }}"  autocomplete="off">
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
@endpush