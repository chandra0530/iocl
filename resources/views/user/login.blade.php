@extends('user.layouts.user3')

@push('css')
   

@endpush
@section('content')  


<section class="page-head page-bg" style="background-image: url('assets/images/bg/contact.jpg')">
			<div class="container">    
				<h3 class="page-heading">Login</h3>
				
			</div> <!-- /.container -->
		</section>
<section class="contact-us section">
			<div class="container">    
				<div class="row">
                <div class="col-xs-12 col-sm-3">
                </div>
					
					<div class="col-xs-12 col-sm-6">
						<div class="border-in">
							<div class="comm-title">
								<h3>Login</h3>
							</div>
							<div class="contact-form">
                            <form enctype="multipart/form-data" method="POST" action="{{ route('auth.login') }}">
                              @csrf
                              <div class="row">
										<div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="Your Email" required="required" data-error="Write your valid email address">
											</div>
										</div> <!-- /.col- -->
                                        <div class="col-xs-12 col-sm-12">
											<div class="form-group">
												<input type="password" name="password" class="form-control" placeholder="Your passsword" required="required" data-error="Write your valid email address">
											</div>
										</div> <!-- /.col- -->
										<div class="form-group col-xs-12">
											<div class="form-btn">
												<input type="submit" name="submit" value="Login" class="contact-form-btn disabled">
											</div>
										</div>
										<div class="messages"></div>
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