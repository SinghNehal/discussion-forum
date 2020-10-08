<?php session_start();
 require("header.php");
require("checkUser.php")?>


<?php
$stid = $_POST['stid'];
$ta = $_POST['ta'];
$hd=$_POST['head'];
$uid = $_SESSION["uid"];

$sql="INSERT INTO question ( `heading`,`question_detail`, `user_id`, `subtopic_id`) VALUES ( '$hd','$ta', '$uid', '$stid');";
$result=ExecuteNonquery($sql);

if ($result == 1)
	header ("location:questions.php?id=$stid");
?>
<?php require("footer.php")?>