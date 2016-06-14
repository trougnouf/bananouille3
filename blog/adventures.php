<?php 

if($_GET["a"])			$_SESSION["a"] = $_GET["a"];
else if(!$_SESSION["a"])	$_SESSION["a"] = randomAdventure();

?>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../style.css" />
		<title>Bananouille³</title>
	</head>
	<body>
		<header>
			<a href="../"><img src="../img/logo.svg" style="float:left;" /></a>
			<div style="background-color:black;min-width:5px;min-height:150px;float:left;margin-left:10px;margin-right:10px;"></div> <!--black bar-->
			<img src="adventures/<?php echo $_SESSION["a"]; ?>.png" style="float-left;" />
			<a href="">Random adventure</a>, <a href="?a=latest">Latest adventure</a>, <a href="?a=list">List</a>
		</header>
		<section id="content">
		
		
		</section>
	</body>
</html>

<div style="float:left;">
<br />



</div>
<?php
/*
// TODO: include "adventures/$_GET["a"]
$_SESSION["a"] = "megaroadtrip";
include "adventures/megaroadtrip.php";
*/
include "adventures/{$_SESSION["a"]}.php";
?>

<?php

function randomAdventure()
{
	return "megaroadtrip";
}

?>
