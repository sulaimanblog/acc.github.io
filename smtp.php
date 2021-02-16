<?php
  
  $to_email="msulaiman25071999@gmail.com";
  $subject="hey bro,How are u";
  $body=" dear students this information for realsing life ";
  $headers="from:mohammadsulaiman942@gmail.com";


  if(mail($to_email, $subject,$body,$headers))
  {
  	echo "email succesfully sent to  $to_email.....";

  	# code...
  }
  else
  {
  	echo "email sending to failed";

  }

?>