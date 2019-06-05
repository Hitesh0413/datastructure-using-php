<?php
include_once('generalFunctions.php');
include_once('algoFunctions.php');

$list=array(5,9,3,4,1,6,7,10,0,2);

beautyOutput($list,'UNSORTED LIST');

$result=bubbleSort($list);

beautyOutput($result,'SORTED LIST');