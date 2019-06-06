<?php
include_once('generalFunctions.php');
include_once('algoFunctions.php');
$list=array(10,6,7,20,4,3,30,1,9,5,100);

beautyOutput($list,'UNSORTED LIST');

$list=selectionSort($list);

beautyOutput($list,'SORTED LIST');