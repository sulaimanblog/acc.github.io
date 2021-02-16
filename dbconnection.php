<?php
  
  $server="localhost";
  $user="root";
  $password="";
  $db="thapacraccregistration";

  $con=mysqli_connect($server,$user,$password,$db);

  if ($con) 
  {
  	?>
  	<script >
  		alert("connection Succesful");
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

?>