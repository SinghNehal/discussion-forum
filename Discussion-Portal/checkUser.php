<?php 
	if(!isset($_SESSION["fn"]))
		header("location:index.php");
?>
<?php
$greeting = "Hello!";
$month = 8;
$year = 2019;
?>
<span style="text-align:right ;width:90%; display:block; margin-bottom:5px;">
	welcome 
	<a href="uedit.php">
	
	<?php echo $_SESSION["fn"];	?></a>
	, [ <a href="logout.php">log-out</a> ] 
</span><?php
$greeting = "Hello!";
$month = 8;
$year = 2019;
?>
