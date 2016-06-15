<?php 

if($_GET["a"])			$_SESSION["a"] = $_GET["a"];
else if(!$_SESSION["a"])	$_SESSION["a"] = randomAdventure();

?>
 <!DOCTYPE html> 
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../style.css" />
		<link rel="stylesheet" href="blog.css" />
		<title>Bananouille³</title>
	</head>
	<body>
		<header>
			<a href="../"><img src="../img/logo.svg" style="float:left;" /></a>
			<div style='background-image:url("adventures/<?php echo $_SESSION["a"]; ?>.png");width:100%;'></div>

		</header>
		<p class="blogmenu"><a href="">Random adventure</a>, <a href="?a=latest">Latest adventure</a>, <a href="?a=list">List</a></p>
		<section id="content">
		<?php
		include "adventures/{$_SESSION["a"]}.php";
		?>		
		
		</section>
	</body>
</html>


<?php
/*
// TODO: include "adventures/$_GET["a"]
$_SESSION["a"] = "megaroadtrip";
include "adventures/megaroadtrip.php";
*/

?>

<?php

function randomAdventure()
{
	return "megaroadtrip";
}

?>
