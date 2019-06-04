<?php
function linearSearch($list=array(),$element){
	$result=$element." Not Found ";
	foreach ($list as $pos => $value) {
		if($value==$element){
			$result = $element." Present At Position ".($pos+1);
			break;
		}
	}
	return $result;
}

function binarySearch($list=array(),$element){
	$low=0;
	$high=count($list);
	$mid=($low+$high)/2;

	$result=$element." Not Found ";

	while($low<=$high){
		$mid=($low+$high)/2;
		if($list[$mid]==$element){
			$result = $element." Present At Position ".intval($mid+1);
			break;
		}
		else if($element>$list[$mid]){
			$low=$mid+1;
		}
		else{
			$high=$mid-1;
		}
	}

	return $result ;

}