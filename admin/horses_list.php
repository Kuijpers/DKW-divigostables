<?php

if (empty($_GET['horse']))
{
	$horse	=	"";
}
else
{
	$horse	=	$_GET['horse'];
}


switch($horse)
	{

   
		default:

			$tablename	=	"horses";
		
			$sql ="SELECT * FROM ".$tablename." ORDER BY horse_id ASC";
    				$data = mysql_query($sql) or die(mysql_error());
					if (mysql_num_rows($data)==0)
					{
						echo "<table>\n";	
						echo "<tr>\n";
						echo "<td>\n";
						echo "No records available \n";
						echo "</td>\n";
						echo "</tr>\n";
						echo "</table>\n";
					}
					else
?>
					<table>
                    	<tr>
                        	<td>
                            	Horse#
                            </td>
                            <td>
                            	Callname
                            </td>
                            <td>
                            	Registered name
                            </td>
                        </tr>
<?php					
					
					$horse_number	=	0;
					
					//here is the loop using the statement above
					while($info = mysql_fetch_array( $data ))
						{
							$id = $info['horse_id'];
    						$registered_name = $info['registered_name'];
							$call_name = $info['call_name'];
    						$registered_owner_name = $info['registered_owner_name'];
    						$registered_owner_website = $info['registered_owner_website'];
    						$showyear = $info['showyear'];
    						$image = $info['image'];
							
							$horse_number	=	$horse_number + 1;
							
?>
                            	<tr>
                                	<td>
                                    	<?php echo $horse_number ;?>
                                    </td>
                                    <td>
                                    	<?php echo $call_name ;?>
                                    </td>
                                	<td>
                                    	<?php echo $registered_name ;?>
                                    </td>
                                	<td>
                                    	<a href="?mode=list&amp;horse=more&amp;horse_id=<?php echo $id ;?>">More information</a>
                                    </td>
                                </tr>
<?php
						
						}
?>
					</table>
<?php
		break;
		case 'more':
		
			
			
			if(empty($_GET['horse_id']))
				{
					$horse_id	=	"";
				}
			else
				{
					$horse_id	=	$_GET['horse_id'];
				}
			
			$tablename	=	"horses";
		
			$sql ="SELECT * FROM ".$tablename." WHERE horse_id=$horse_id ORDER BY horse_id ASC";
    				$data = mysql_query($sql) or die(mysql_error());
					if (mysql_num_rows($data)==0)
					{
						echo "<table>\n";	
						echo "<tr>\n";
						echo "<td>\n";
						echo "No records available \n";
						echo "</td>\n";
						echo "</tr>\n";
						echo "</table>\n";
					}
					else
					{
						$info = mysql_fetch_array( $data );
							$id = $info['horse_id'];
    						$registered_name = $info['registered_name'];
							$call_name = $info['call_name'];
    						$registered_owner_name = $info['registered_owner_name'];
    						$registered_owner_website = $info['registered_owner_website'];
    						$showyear = $info['showyear'];
    						$image = $info['image'];
							
							
?>
					<table>
                    	<tr>
                        	<td>
                            	Registered name
                            </td>
                            <td>
                            	:
                            </td>
                            <td>
                            	<?php echo $registered_name ;?>
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
                            	<?php echo $call_name ;?>
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
                            	<?php echo $registered_owner_name ;?>
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
                            	<?php echo $registered_owner_website ;?>
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
                            	<?php echo $showyear ;?>
                            </td>
                        </tr>
                        <tr>
                        	<td valign="top">
                            	Image
                            </td>
                            <td valign="top">
                            	:
                            </td>
                            <td>
<?php
								if (empty($image))
									{
										$show_image	=	"No image available";	
									}
								else
									{
										$show_image	=	"<img src='../album/thumbs/thumb_". $image ."' />";	
									}

?>

                            	<?php echo $show_image ;?>
                            </td>
                        </tr>
                    </table>


<?php

					}
			
		break;

	}
?>