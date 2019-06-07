<?php
include_once('generalFunctions.php');
include_once('algoFunctions.php');

$list=array(10,2,6,5,8,7,1,6,9,3);

beautyOutput($list,'UNSORTED ARRAY');

$list=insertionSort($list);

beautyOutput($list,'SORTED ARRAY');