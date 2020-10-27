@extends('user.layouts.user3')

@push('css')
   

@endpush
@section('content')  


<section class="contact-us section">
			<div class="container">    
				<div class="row">
                <div class="col-xs-12 col-sm-3">
                </div>
					
					<div class="col-xs-12 col-sm-6">
						<div class="border-in">
							<div class="comm-title">
								<h3>Register</h3>
							</div>
							<div class="contact-form">
                            <form enctype="multipart/form-data" method="POST" action="{{ route('auth.signup') }}">
                              @csrf
                              <div class="row">
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="name" class="form-control" placeholder="Your Name" required="required" data-error="Write your name">
											</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="Your Email" required="required" data-error="Write your valid email address">
											</div>
										</div> <!-- /.col- -->
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="password" name="password" class="form-control" placeholder="Your password">
											</div>
										</div>
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="text" name="employeid" class="form-control" placeholder="Your employee id">
											</div>
										</div>
										<div class="form-group col-xs-6">
											<div class="form-btn">
												<input type="submit" name="submit" value="Register" class="contact-form-btn disabled">
											</div>
										</div>
										<div class="form-group col-xs-6">
											
											<div class="form-btn">
											<a href="{{ route('login')  }}" class="contact-form-btn disabled">Login</a>
											</div>

										</div>
									</div> <!-- /.row -->
								</form>
							</div> <!-- /.contact-form -->
						</div>
					</div> <!-- /.col- -->
                    <div class="col-xs-12 col-sm-3">
                </div>
				</div> <!-- /.row -->  
			</div> <!-- /.container -->
		</section>
@endsection


@push('js')
@endpush