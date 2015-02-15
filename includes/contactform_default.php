<form action="?mode=send" method="post" enctype="application/x-www-form-urlencoded" name="contact" target="_self">
 					<table>
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
                            	<input name="name" type="text" size="60" class="field"/>
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
                            	<input name="address" type="text" size="60" class="field"/>
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
                            	<input name="city" type="text" size="60" class="field"/>
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
                            	<input name="country" type="text" size="60" class="field"/>
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
                            	<input name="phone" type="text" size="60" class="field"/>
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
                            	<input name="email" type="text" size="60" class="field"/>
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
								<script type="text/javascript">
								function setup(ans) {
  									lit1 = ''
									lit2 = ''
									lit3 = ''
  										if (ans == 'Other') {
    										lit1 = lit1 + 'Other subject'
											lit2 = lit2 + ':'
											lit3 = lit3 + '<input name="Othersubject" type="text" size="60" class="field"/>'
  										}
  										document.getElementById('rep1').innerHTML=lit1
										document.getElementById('rep2').innerHTML=lit2
										document.getElementById('rep3').innerHTML=lit3
										}
								</script>
								<select class="field" name="subject" onchange="setup(document.contact.subject.value)">
								    <option value="0">- Please select -</option>
									<option value="Showing horses">Showing horses</option>
									<option value="Showlease contracts">Showlease contracts</option>
									<option value="Other">Other</option>
								</select>
							</td>
						</tr>
                        <tr>
                        	<td>
								<span id="rep1"></span>
							</td>
                            <td>
                            	<span id="rep2"></span>
                            </td>
                            <td>
                            	<span id="rep3"></span>
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
                            	<textarea name="comment" cols="58" rows="8"></textarea>
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