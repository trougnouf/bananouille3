<?php
foreach (glob("*.src") as $filename)
{
	$inhandle = fopen($filename, "r");
	$outhandle = fopen(substr_replace($filename, "php", -3));
	// can replace substr_replace w/ str_replace("src","php",$filename)
	
}
?>


<!--open file, open new file, parse file, save file-->
