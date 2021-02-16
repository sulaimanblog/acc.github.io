<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>create An Account</title>
	<?php include 'links/links.php'?>;

</head>
<body>
	<?php
	include 'dbconnection.php';

	  if (isset($_POST['submit'])) 
	  {
	  	$username=mysqli_real_escape_string($con,$_POST['username']);
	  	$email=mysqli_real_escape_string($con,$_POST['email']);
	  	$mobile=mysqli_real_escape_string($con,$_POST['mobile']);
	  	$password=mysqli_real_escape_string($con,$_POST['password']);
	  	$cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

	  	$pass=password_hash($password,PASSWORD_BCRYPT);

	  	$cpass=password_hash($cpassword,PASSWORD_BCRYPT);

	  	$emailquery=" select * from createaccount where email='$email'";

	  	$query=mysqli_query($con,$emailquery);

	  	$emailcount=mysqli_num_rows($query);

	  	if ($emailcount>0) 
	  	{

	  		echo "email already exist";
	  	}
	  	else
	  	{
	  		if ($password===$cpassword) 
	  		{

	  			$insertquey="INSERT INTO createaccount(username, email, mobile, password, cpassword) VALUES('$username','$email','$mobile','$password','$cpass') ";

	  			$iquery=mysqli_query($con,$insertquey);
	  			if ($iquery) 
              {
                 	?>
             	<script >
  		       alert("inserted Succesfully");
  	              </script>
  	            <?php
  	# code...
                 }
              else
             {
  	          ?>
  	          <script >
  		        alert(" No connection ");
  	           </script>
  	          <?php

  }

	  		}
	  		else
	  		{
	  			?>
  	          <script >
  		        alert(" password are not ");
  	           </script>
  	          <?php
	  		}

	  	}
	  }


	?>




	<div class="card bg-light" >
		<article class="card-body mx-auto" style="max-width: 400px">
			<h4 class="card-title mt-3 text-center">Create Account</h4>
			<p class="text-center">Get Started With Free an Account</p>
			<p>
				<a href="" class="btn btn-block bg-danger btn-gmail"><i class="fa fa-google" aria-hidden="true"></i>Login Via Gmail</a>
				<a href="" class="btn btn-block bg-primary btn-facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Login via Facebook</a>
			</p>
			<p class="divider-text">
				<span class="bg-light">.............................OR......................</span>
				
			</p>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
						
					</div>
					<input type="text" name="username" placeholder="Full Name" class="form-control" required>
					
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
						
					</div>
					<input type="email" placeholder="Email Address" name="email" class="form-control" required>

					
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
						
					</div>
					<input type="number" name="mobile" placeholder="Phone Number" class="form-control" required>

					
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
						
					</div>
					<input type="password" name="password" class="form-control" placeholder="Create Password" required>
					
				</div>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
						
					</div>
					<input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
					
				</div>
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
					
				</div>
				<p class="text-center">Have an Acocunt?<a href="logins.php">Login</a></p>
			</form>
			
		</article>
		
	</div>

</body>
</html>