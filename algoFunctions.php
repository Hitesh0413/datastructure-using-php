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

function bubbleSort($list=array()){
	$temp=0;
	for($i=0;$i<count($list);$i++){

		for($j=0;$j<(count($list)-$i-1);$j++){

			if($list[$j]>$list[$j+1]){
				$temp=$list[$j];
				$list[$j]=$list[$j+1];
				$list[$j+1]=$temp;
			}

		}

	}
	return $list;
}