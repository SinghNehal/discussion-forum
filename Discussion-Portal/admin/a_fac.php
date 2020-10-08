<?php session_start();
require("utility.php")?>
<?php require("header.php");
//require("checkUser.php");
?>
<?php
$uid = $_GET['id'];
$qry = "UPDATE user SET user_acc_active=NULL WHERE user_id='".$uid."'";
$result = ExecuteQuery($qry);
if($result)
{
	header ("location:approve_fac.php");
	}
	else
	{
		echo "Not Done";
		}

?>
<?php require("footer.php")?>