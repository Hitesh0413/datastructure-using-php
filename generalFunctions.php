<style type="text/css">
	pre{
		font-size:1rem;
		background-color: #252525;
		color:yellow;
		padding: 20px 10px 10px 20px;
	}
</style>

<?php
function beautyOutput($data,$title=''){
	echo "<pre>---".$title."---<br>";
	print_r($data);
	echo "<br>---END---</pre>";
}