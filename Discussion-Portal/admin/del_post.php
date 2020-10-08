<?php session_start();
require("utility.php")?>
<?php require("header.php");
//require("checkUser.php");
?>
<?php
$uid = $_GET['id'];
$qry = "DELETE FROM answer WHERE answer_detail='".$uid."'";
$qry1 = "DELETE FROM abusive_post WHERE post_detail='".$uid."'";
$result = ExecuteQuery($qry);
$result1 = ExecuteQuery($qry1);
if($result and $result1)
{
	header ("location:reported_posts.php");
	}
	else
	{
		echo "Not Done";
		}

?>
<?php require("footer.php")?>