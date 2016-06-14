<?php
if($_GET["p"])	$_SESSION["p"] = $_GET["p"];
if($_GET["a"])	$_SESSION["a"] = $_GET["a"];

?>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" />
		<title>Bananouille³</title>
	</head>
	<body>
		<header>
			<?php
			if($_GET["p"])
				echo '<a href="index.php">';
			
			echo '<img src="img/logo.svg" style="float:left;" />';
			if($_GET["p"])	echo '</a>';
			echo '<div style="background-color:black;min-width:5px;min-height:150px;float:left;margin-left:10px;margin-right:10px;"></div> <!--black bar-->
			<nav>';
			if(!$_GET["p"])
				echo '<a href="?p=adventures">Adventures</a> <a href="https://www.linkedin.com/in/trougnouf">Careers</a>';
			else if(strpos($_GET["p"], "adv") !== false)
			{
				echo '<img src="blog/adventures/',$_SESSION["a"],'.png" />';
			}
			?>
			</nav>
			<!-- Page-specific content goes below -->
			
		</header>
		<section id="content">
			<?php
			// include content
			if(strpos($_GET["p"], "adv") !== false)
				include 'blog/adventures.php'; ?>
		</section>
	</body>
</html>
<!--
// img, text
// img divided by whatever
// 

Title 	Blog	...

Blog: default = random
 right: Subject > 


Subjects: Adventure, Tech
Date: 
-->
