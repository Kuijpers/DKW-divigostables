<?php
// HTML MAIL MET PLATTE TEKST WANNEER HTML NIET LEESBAAR IS

				include("includes/class.phpmailer.php");

				$mail = new PHPMailer();

				// Geef aan dat het een HTML mail betreft
				$mail->IsHTML(true);

				$mail->From = $user_email; // Staat in includes/config.php
				$mail->FromName = $user_name; // Staat in includes/config.php

				$mail->AddAddress($email, $name);
				//$mail->AddAddress("info@domein2.nl");
				//$mail->AddCC("info@domein3.nl", "Naam van ontvanger 3");
				//$mail->AddBCC("info@domein4.nl", "Naam van ontvanger 4");

				$mail->Subject = $subject;

				// HTML body
				$mail->Body = "
					<table>
						<tr>
							<th colspan='3' align='left'>
								$user_topmessage_mail
							</th>
						</tr>
                		<tr>
                        	<td>
                            	Registration number
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	$regnr
                            </td>
                        </tr>
                		<tr>
                        	<td>
                            	(stable) Name
                            </td>
                            <td>
                            	:	
                            </td>
                            <td>
                            	$name
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
                            	$address
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
                            	$city
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
                            	$country
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
                            	$phone
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
                            	$email
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
                            	$subject
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
                        	<th colspan='3' align='left'>
                            	$comment_mail
                            </th>
                        </tr>
                	</table> 

				";
				//PLAIN TEKST
				
				$text_body  = "Hello " . $name . ", \n\n";
    			$text_body .= "Thank you for contacting us.\n";
    			$text_body .= "We received the following information from you. \n \n";
				$text_body .= "Registration number : $regnr \n";
    			$text_body .= "Name : $name \n";
    			$text_body .= "Address : $address \n";
    			$text_body .= "City : $city \n";
    			$text_body .= "Country : $country \n";
    			$text_body .= "Phone : $phone \n";
    			$text_body .= "Email : $email \n";
    			$text_body .= "Subject : $subject \n";
    			$text_body .= "Comment : $comment \n\n";
    			$text_body .= "We will contact you as soon as possible to answer your question. \n\n";
    			$text_body .= "Patricia Kuijpers \n";
    			$text_body .= "Divigo Stables \n";

				// Alternatieve body
				$mail->AltBody = $text_body;

				$mail->WordWrap = 50;

				if(!$mail->Send()){
					echo "Er ging iets mis tijdens het versturen, namelijk:";
					echo $mail->ErrorInfo;
					}
					
?>