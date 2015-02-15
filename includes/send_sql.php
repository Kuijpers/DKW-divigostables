<?php
		$regnr		=	mysql_real_escape_string($regnr);
		$name		=	mysql_real_escape_string($name);
		$address	=	mysql_real_escape_string($address);
		$city		=	mysql_real_escape_string($city);
		$country	=	mysql_real_escape_string($country);
		$phone		=	mysql_real_escape_string($phone);
		$email		=	mysql_real_escape_string($email);
		$subject	=	mysql_real_escape_string($subject);
		$comment	=	mysql_real_escape_string($comment);
			
	
	
	
	
	$sql = "INSERT INTO email (reg_id,
								name,
								address,
								city,
								country,
								phone,
								email,
								subject,
								user_comment,
								date,
								time,
								ip
								) 
			VALUES ('" . $regnr . "',
					'" . $name . "',
					'" . $address . "',
					'" . $city . "',
					'" . $country . "',
					'" . $phone . "',
					'" . $email ."',
					'" . $subject . "',
					'" . $comment . "',
					'" . $date . "',
					'" . $time . "',
					'" . $ip . "'
					)";
			
			





										
							//echo $sql;
								mysql_query($sql) or die(mysql_error());
								
								//header("Refresh: 5; URL=\"thankyou.php\"");		
			
			
			
			
			
			
			
?>