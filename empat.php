<?php
	function group_number ($input){
	$regex = "/[^0-9]/";
	$remove_white_spaces = preg_replace($regex, "", $input);

	$groups = str_split($remove_white_spaces,3);

	foreach ($groups as $group) {
		echo $group ."-";
	}

	return $groups;	
}
	group_number ("1 2 3 45-6 789");
?>