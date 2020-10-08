<?php session_start();
require("utility.php")?>
<?php require("header.php");
//require("checkUser.php");
?>
<?php
$uid = $_GET['id'];
$qry = "DELETE FROM user WHERE user_id='".$uid."'";
$result = ExecuteQuery($qry);
if($result)
{
	header ("location:student_account.php");
	}
	else
	{
		echo "Not Done";
		}

?>
<?php require("footer.php")?>