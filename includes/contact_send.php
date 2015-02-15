
<?php
				$error		=	0;
				$emptyerror	=	0;
				$emailerror	=	0;
				
				$regid		=	time();
	
				$regnr		=	$user_abrev	 ."_". $regid;  // $user_abrev staat vermeld in includes/config.php
				
				$date	=	date('Y-m-d');
			
				$time	=	date('H:i:s');
			
				$ip		=	$_SERVER['REMOTE_ADDR'];
			
	
	if ($_POST['spam1'] != $_POST['spam2']) 
		{
?>
		<table>
    		<tr>
        		<td>
            		The spamcheck did not match.
           		</td>
       		</tr>
    		<tr>
        		<td>
            		This could be a spam attack.
           		</td>
       		</tr>
        	<tr>
        		<td>
					<a href="javascript:javascript:history.go(-1)">Click here to go back.</a>'
            	</td>
        	</tr>
    	</table>
<?php
 		}
	else
		{
			$name		=	$_POST['name'];
			$address	=	$_POST['address'];
			$city		=	$_POST['city'];
			$country	=	$_POST['country'];
			$phone		=	$_POST['phone'];
			$email		=	$_POST['email'];
			$subject	=	$_POST['subject'];
			$comment	=	$_POST['comment'];
			
			if($subject == "Other")
				{
					if (empty($_POST['Othersubject']))
					{
						$_POST['Othersubject'] = "";
					}
					
					$subject	=	$_POST['Othersubject'];	
				}
			else
				{
					$subject	=	$subject;	
				}
		
		
		// Controleer of alle velden ingevuld zijn.
			if (empty($name)||
				empty($address)||
				empty($city)||
				empty($country)||
				empty($phone)||
				empty($email)||
				empty($subject)||
				empty($comment))
			{
				$error		=	1;
				$emptyerror	=	1;
			}
		
		// Controleer of het emailadres wel een emailadres is wanneer er een email adres is ingevuld.
		
			if (!empty($email))
			{
				if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", $email)) 
				{
					$emailerror	=	1;
					$error		=	1;
				}
			}
			
		// Wanneer er een error is ontstaan.
		
			if ($error == 1)
			{
				// Bepaal class op basis van error of niet
				if(empty($name)){$nameclass	=	"class='errorinfo'";}
				else{$nameclass	=	"class='correct' value='$name' readonly='readonly'";}
				
				if(empty($address)){$addressclass	=	"class='errorinfo'";}
				else{$addressclass	=	"class='correct' value='$address' readonly='readonly'";}
				
				if(empty($city)){$cityclass	=	"class='errorinfo'";}
				else{$cityclass	=	"class='correct' value='$city' readonly='readonly'";}
				
				if(empty($country)){$countryclass	=	"class='errorinfo'";}
				else{$countryclass	=	"class='correct' value='$country' readonly='readonly'";}
				
				if(empty($phone)){$phoneclass	=	"class='errorinfo'";}
				else{$phoneclass	=	"class='correct' value='$phone' readonly='readonly'";}
				
				if(empty($email)|| $emailerror	== 1){$emailclass	=	"class='errorinfo'";}
				else{$emailclass	=	"class='correct' value='$email' readonly='readonly'";}
				
				if(empty($subject)){$subjectclass	=	"class='errorinfo'";}
				else{$subjectclass	=	"class='correct' value='$subject' readonly='readonly'";}
				
				if(empty($comment)){$commentclass	=	"<textarea name='comment' cols='58' rows='8' class='errorinfo'></textarea>";}
				else{$commentclass	=	"<textarea name='comment' cols='58' rows='8' class='correct' readonly='readonly>$subject</textarea>";}
				
				
?>
				<form action="?mode=send" method="post" enctype="application/x-www-form-urlencoded" name="error_contact" target="_self">
 					<table>
                    	<tr>
                        	<th colspan="3">
                            	<h3 class="error">
                                	Error!
                                </h3>
                            </th>
                        </tr>
                        <tr>
                        	<th colspan="3" class="error">
                            	Some fields are not filled in or filled in incorrect.
                            </th>
                        </tr>
                    	<tr>
                        	<th colspan="3">
                            	All fields are required to fill in.
                            </th>
                        </tr>
                		<tr>
                        	<td>
                            	(stable) Name
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	
                            	<input name="name" type="text" size="60" <?php echo $nameclass ; ?> />
                            </td>
                        </tr>
                		<tr>
                        	<td>
                            	Address
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	<input name="address" type="text" size="60" <?php echo $addressclass ; ?> />
                            </td>
                        </tr>
                		<tr>
                        	<td>
                            	City
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	<input name="city" type="text" size="60" <?php echo $cityclass ; ?> />
                            </td>
                        </tr>
                		<tr>
                        	<td>
                            	Country
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	<input name="country" type="text" size="60" <?php echo $countryclass; ?> />
                            </td>
                        </tr>
                		<tr>
                        	<td>
                            	Phone number
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	<input name="phone" type="text" size="60" <?php echo $phoneclass ; ?> />
                            </td>
                        </tr>
                		<tr>
                        	<td>
                            	Email
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	<input name="email" type="text" size="60" <?php echo $emailclass ; ?> />
                            </td>
                        </tr>
                		<tr>
                        	<td>
                            	Subject
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	<input name="subject" type="text" size="60" <?php echo $subjectclass ; ?> />
                            </td>
                        </tr>
                        
                		<tr>
                        	<td>
                            	Comment
                            </td>
                            <td>
                            	:	
                            </td>
                        </tr>
                        <tr>
                        	<th colspan="3">
                            	<?php echo $commentclass ; ?>
                            </th>
                        </tr>
                        
                        
                        <tr>
                        	<th colspan="3">
                            	Spam check:
                            </th>
                        </tr>
                        <tr>
                        	<th colspan="3">
	 								This is to check if your not a spam robot.
     								<br />
     								Copy the following word to check if your not a spamrobot :
                            </th>
                        </tr>
                        
<?php 
	
	// random info for spamcheck

 $input = array("mini", "horse", "show", "class", "ribbon", "grand", "supreme", "grooming", "clipping");
		$rand_keys = array_rand($input, 2);

		$fixed1	=	$input[$rand_keys[0]];
		$fixed2	=	$input[$rand_keys[1]];

		$spamfixed	=	$fixed1 . $fixed2;




?>						<tr>
    						<td>
        						<?php echo $spamfixed; ?>
        					</td>
                            <td>
                            	:
                            </td>
       						<td>
        						<input type="text" name="spam1" size="60" class="field" />
        					</td>
    					</tr>
                        
                		<tr>
                        	<th colspan="3">
                            		<input type="hidden" name="spam2" value="<?php echo $spamfixed; ?>" />
                                	<input class="button" name="submit" type="submit" value="Send Information" />
                                    &nbsp;
                                    <input class="button" name="reset" type="reset" value="Reset Information" />
                            </th>
                        </tr>
                	</table> 
                    </form>
<?php
			}
			else // Wanneer alles correct is ingevult kan het verstuurd worden.
			{
				$comment_mail = nl2br($comment);
				
				$user_topmessage_mail = nl2br($user_topmessage);
				
				//include ('includes/send_to.php');
				//include ('includes/send_from.php');
				include ('includes/send_sql.php');
				
			}
		}









?>



