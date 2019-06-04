<?php
include_once('generalFunctions.php');
include_once('algoFunctions.php');

$list=array(10,20,30,40,50,60,70,80,90,100,110,200,250,300,400,500,600,1000);

if(isset($_REQUEST['search_me']))
	$element=$_REQUEST['search_me'];
else
	$element=0;


beautyOutput($list,'Sorted List Of Elements');

?>
<form action="">
	<input type="text" name="search_me" placeholder="enter element to search...">
	<input type="submit" name="submit">
</form>

<?php
beautyOutput($element,'Searching');
$result = binarySearch($list,$element);
beautyOutput($result,'Result');