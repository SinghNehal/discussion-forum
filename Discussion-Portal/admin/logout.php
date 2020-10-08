<?php require("header.php");
echo "<body style='background: url(../res/images/im6.jpg);'>";?>
<?php 
session_start();
session_destroy();
?>
<h1>log out</h1>
<p>
	You have logged out.  <a href="../index.php">Click here</a> to login again.
</p>
<?php require("footer.php");?>