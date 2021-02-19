<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles2.css')}}">
	<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
function isNumberKey(evt){
	console.log(evt.target.value);
	var str=evt.target.value;
	console.log(str.length);
	var length=parseInt(str.length);
	if(length<8){
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
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Register</h3>
                
			</div>
			<div class="card-body">
            @include('user.partials.message')
				<form enctype="multipart/form-data" method="POST" action="{{ route('auth.signup') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
				<input  type="hidden" name="status" value="inactive">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input  type="text" name="name" class="form-control" placeholder="Your Name" required="required" data-error="Write your name">
						
					</div>

				

										<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="file" name="profile_image" class="form-control" placeholder="Your Email" required="required" data-toggle="tooltip" title="Select a file to upload.">
					</div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="email" name="email" class="form-control" placeholder="Your Email" required="required" data-error="Write your valid email address">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="Your password">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                        <input type="text" data-toggle="tooltip" title="Employe id should be numeric and 8 digit long." name="employeid" class="form-control" placeholder="Your employee id"  onkeypress="return isNumberKey(event)">
					</div>
					
					<div class="form-group">
						<input type="submit" value="Signup" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="{{ route('login')  }}">Login</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>


</html>