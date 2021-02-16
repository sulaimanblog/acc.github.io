<!DOCTYPE html>
<html>
<head>
	<title>mail send </title>
	<?php include 'links/links.php'; ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="colmd4 offset-md-4">
				<h2 class="text-center">Send message</h2>
				<p class="text-center"> send mail anyone from localhost</p>

				 <?php

				 if (isset($_POST['submit'])) 
				 {
				 	$recepient=$_POST['email'];
				 	$subject=$_POST['subject'];
				 	$message=$_POST['message'];
				 	$sender=" from:mohammadsulaiman942@gmail.com";

				 	if (empty($recepient)|| empty($subject)|| empty($message) )
				 	{
				 		?>
				 		<div class="alert alert-danger text-danger">
				 			<?php echo "All input are required "; ?>
				 			
				 		</div>
				 		<?php
				 		# code...
				 	}
				 	else
				 	{
				 		if (mail($recepient,$subject,$message,$sender)) 
				 		{

				 		?>
				 		<div class="alert alert-success text-danger">
				 			<?php echo "your mail sent succesfully $recepient"; ?>
				 			
				 		</div>
				 		<?php

				 			# code...
				 		}
				 		else
				 		{
				 			?>
				 		<div class="alert alert-danger text-danger">
				 			<?php echo "your mail not sent succesfully "; ?>
				 			
				 		</div>
				 		<?php


				 		}
				 	}
				 	# code...
				 }



				  ?>


				<form action="mailg.php" method="POST" autocomplete="off">
					<div class="'form-group btn-block">
						<input type="email" name="email" class="form-control" placeholder="Recepient">
						
					</div>
					<div class="'form-group btn-block">
						<input type="text" name="subject" class="form-control" placeholder="subject">
						
					</div>
					<div class="form-group btn-block">
						<textarea name="message" cols="30" rows="10" class="form-control" placeholder="compose message"></textarea>
						
					</div>
					<div class="'form-group">
						<input type="submit" name="submit" class="form-control bg-primary text-white" value="send">
						
					</div>
					
				</form>
			</div>
			
		</div>

		
	</div>

</body>
</html>