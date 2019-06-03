<?php
include_once('generalFunctions.php');
include_once('algoFunctions.php');

$list=array(5,8,1,6,9,7,8,4);

if(isset($_REQUEST['search_me']))
	$element=$_REQUEST['search_me'];
else
	$element=0;

beautyOutput($list,'List Of Elements');

?>
<form action="">
	<input type="text" name="search_me" placeholder="enter element to search...">
	<input type="submit" name="submit">
</form>

<?php
beautyOutput($element,'Searching');

$result = linearSearch($list,$element);
beautyOutput($result,'Result');