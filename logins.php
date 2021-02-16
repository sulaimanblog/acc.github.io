<?php
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<?php include 'links/links.php'; ?>
</head>
<body>

	<?php

	    include 'dbconnection.php';

	    if (isset($_POST['submit'])) 
	    {
	    	$email=$_POST['email'];
	    	$password=$_POST['password'];


	    	$email_search="select * form createaccount  where email='$email' ";

	    	$query=mysqli_query($con,$email_search);

	    	$email_count=mysqli_num_rows($query);
	    	if ($email_count) 
	    	{
	    		$email_pass=mysqli_fetch_assoc($query);

	    		$db_password=$email_pass['password'];

	    		$pass_decode=password_verify($password,$db_password);

	    		if ($pass_decode) 
	    		{
	    			echo "Login Succesful";
	    			?>
	    			<script >
	    				location.replace(home.php);
	    			</script>
	    			<?php
	    			# code...
	    		}
	    		else
	    		{
	    			echo "password  incorrect";
	    		}
	    		# code...
	    	}
	    	else
	    	{
	    		echo "Invalid email";
	    	}
	    	
	    }
	?>



	<div class="card bg-light" >
		<article class="card-body mx-auto" style="max-width: 400px">
			<h4 class="card-title mt-3 text-center">Create Account</h4>
			<p class="text-center">Get Started With Free an Account</p>
			<p>
				<a href="" class="btn btn-block badge-danger btn-gmail"><i class="fa fa-google " aria-hidden="true"></i>Login Via Gmail</a>
				<a href="" class="btn btn-block bg-primary btn-facebook"><i class="fa fa-facebook" aria-hidden="true"></i>Login via Facebook</a>
			</p>
			<p class="divider-text">
				<span class="bg-light">.............................OR......................</span>
				
			</p>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
				
				<div class="form-group input-group">
					<div class="input-group-prepend ">
						<span class="input-group-text "><i class="fa fa-envelope " aria-hidden="true"></i></span>
						
					</div>
					<input type="email" placeholder="Email ID" name="email" class="form-control" required>

					
				</div>
				
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="fa fa-lock " aria-hidden="true"></i></span>
						
					</div>
					<input type="password" name="password" class="form-control" placeholder="Create Password" required>
					
				</div>
				
				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
					
				</div>
				<p class="text-center">Have an Acocunt?<a href="index.php">Signup here</a></p>
			</form>
			
		</article>
		
	</div>

</body>
</html>