<?php

function yearlist ()
{
	$current_year = date('Y');
	$end_year = $current_year+5; // for a different selection of years adjust the five in the amount of years as desired.
	$start_year = $current_year-5;
	
	for ($year= $start_year;
			$year<=$end_year;$year++)
	{
		if($year == $current_year)
			{
				$selected = "selected='selected'";
			}
		else
			{
				$selected="";
			}
		echo "<option $selected value='$year'>$year</option>\n";
	}	
	
}




?>