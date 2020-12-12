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
								<h3>Update Your Profile Details</h3>
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

										
										@endphp
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
@endsection


@push('js')

<script>



</script>
@endpush