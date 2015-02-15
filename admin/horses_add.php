<?php

if (empty($_GET['action']))
{
	$action	=	"";
}
else
{
	$action	=	$_GET['action'];
}


switch($action)
	{

   
		default:
?>
<form enctype="multipart/form-data" action="?mode=add&amp;action=sql" method="post" name="add_horse">
				<table>
                	<tr>
                    	<th colspan="3">
                        	Add a horse to your showstring
                        </th>
                    </tr>
                	<tr>
                		<td>
                        	Registered name
                        </td>
                        <td>
                        	:
                        </td>
                        <td>
                        	<input name="registered_name" type="text" size="60" />
                        </td>
                	</tr>
                	<tr>
                		<td>
                        	Callname
                        </td>
                        <td>
                        	:
                        </td>
                        <td>
                        	<input name="call_name" type="text" size="60" />
                        </td>
                	</tr>
                	<tr>
                		<td>
                        	Name registered owner
                        </td>
                        <td>
                        	:
                        </td>
                        <td>
                        	<input name="registered_owner_name" type="text" size="60" />
                        </td>
                	</tr>
                	<tr>
                		<td>
                        	Website registered owner
                        </td>
                        <td>
                        	:
                        </td>
                        <td>
                        	<input name="registered_owner_website" type="text" size="60" />
                        </td>
                	</tr>
                	<tr>
                		<td>
                        	Showyear
                        </td>
                        <td>
                        	:
                        </td>
                        <td>
                        	<select name="showyear">
                            	<?php  yearlist () ;?>
                            </select>
                        </td>
                	</tr>
                    <tr>
                    	<td>
                        	No image
                        </td>
                        <td>
                        	:
                        </td>
                        <td>
                        	<input name="no_image" type="checkbox" value="1" />
                        </td>
                    </tr>
                	<tr>
                		<td>
                        	Upload image
                        </td>
                        <td>
                        	:
                        </td>
                        <td>
                        	<input name="image" type="file" size="45" />
                        </td>
                	</tr>
                    <tr>
                    	<td>
                        	<input name="reset" type="reset" value="Reset information" />
                        </td>
                        <td>&nbsp;
                        	
                        </td>
                        <td>
                        	<input name="submit" type="submit" value="Submit information" />
                        </td>
                    </tr>
                </table>
</form>
<?php

    	break;
		case 'sql':
			
			$error	=	0;
			
						$registered_name			=	$_POST['registered_name'];
						$call_name					=	$_POST['call_name'];
						$registered_owner_name		=	$_POST['registered_owner_name'];
						$registered_owner_website	=	$_POST['registered_owner_website'];
						$showyear					=	$_POST['showyear'];
			
			// CONTROLEER OF ER EEN IMAGE GEUPLOAD IS WANNEER NO_IMAGE NIET GESELECTEERD IS.
			if (empty($_POST['no_image'])&& empty($_FILES['image']['name']))
				{
					$error	=	1;
?>
					<table>
                    	<tr>
                        	<th class="error">
                            	Error
                            </th>
                        </tr>
                    	<tr>
                        	<td>
                            	You did not select an image to upload.
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	Please go back 1 step
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	<input type=button value="Back" onClick="history.go(-1)">
                            </td>
                        </tr>
                    </table>
<?php
				}
			
			// CONTROLEER OF DE VERPLICHTE VELDEN INGEVULD ZIJN
			if($error == 0)
			{						
				if (empty($registered_name) || 
					empty($call_name) || 
					empty($registered_owner_name) ||
					empty($showyear)
					)
				{
					$error	=	1;
?>
					<table>
                    	<tr>
                        	<th colspan="3" class="error">
                            	Error
                            </th>
                        </tr>
                        <tr>
                        	<th colspan="3">
                        		You forgot to fill in some of the required fields.
                        	</th>
                        </tr>
<?php
					if (empty($registered_name))
						{
?>
						<tr>
                        	<td>
                            	You didn't fill in
                            </td>
                            <td>
                            	:
                            </td>
                            <td>
                            	Registered name
                            </td>
                        </tr>
<?php
						}

					if (empty($call_name))
						{
?>
						<tr>
                        	<td>
                            	You didn't fill in
                            </td>
                            <td>
                            	:
                            </td>
                            <td>
                            	Callname
                            </td>
                        </tr>
<?php
						}
					if (empty($registered_owner_name))
						{
?>
						<tr>
                        	<td>
                            	You didn't fill in
                            </td>
                            <td>
                            	:
                            </td>
                            <td>
                            	Name registered owner 
                            </td>
                        </tr>
<?php
						}
					if (empty($showyear))
						{
?>
						<tr>
                        	<td>
                            	You select
                            </td>
                            <td>
                            	:
                            </td>
                            <td>
                            	Showyear
                            </td>
                        </tr>
<?php
						}
?>
                        <tr>
                        	<th colspan="3">
                            	Please go back 1 step
                            </th>
                        </tr>
                    	<tr>
                        	<td>
                            	<input type=button value="Back" onClick="history.go(-1)">
                            </td>
                        </tr>
                    </table>
<?php
				}						
			}
			
			// WANNEER ER GEEN ERRORS ZIJN GAAN WE ALLES WEGSCHRIJVEN
			if ($error == 0)
				{
					//echo "geen errors";
				
					$registered_name			=	mysql_real_escape_string($registered_name);
					$call_name					=	mysql_real_escape_string($call_name);
					$registered_owner_name		=	mysql_real_escape_string($registered_owner_name);
					$registered_owner_website	=	mysql_real_escape_string($registered_owner_website);
					$showyear					=	mysql_real_escape_string($showyear);
				
				include ('horses_image_add.php'); // IMG + THUMB CREATION
				
				$sql = "INSERT INTO horses (registered_name,
											call_name,
											registered_owner_name,
											registered_owner_website,
											showyear,
											image) 
						VALUES ('" . $registered_name . "',
								'" . $call_name . "',
								'" . $registered_owner_name ."',
								'" . $registered_owner_website ."',
								'" . $showyear ."',
								'" . $image_name ."')";
				
				mysql_query($sql) or die(mysql_error());
		
				
				

		if ($errors	== 0)
			{
				header("Refresh: 2; URL=\"?mode=add&action=finished\"");
			}
		else
			{
					echo	"<table>";
					echo	"<tr>";
					echo	"<td>";
					echo	"You have at least 1 error."; // error
					echo	"</td>";
					echo	"</tr>";
					echo	"<tr>";
					echo	"<td>";
					echo	"Please start over again."; // error
					echo	"</td>";
					echo	"</tr>";
					echo	"</table>";
				
			}
				
				}
		break;
		case 'finished':
?>
			<table>
            	<tr>
                	<td>
                    	Data is inserted succesful.
                    </td>
                </tr>
            </table>
    
<?php	
			header("Refresh: 2; URL=\"?mode=add\"");
		break;
   
	}
?>