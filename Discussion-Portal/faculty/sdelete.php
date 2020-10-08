<?php session_start();
require("utility.php")?>
<?php require("header.php");
//require("checkUser.php");
?>
<?php
$uid = $_GET['id'];
$qry = "DELETE FROM subtopic WHERE subtopic_id='".$uid."'";
$result = ExecuteQuery($qry);
if($result)
{
	header ("location:subtopic.php");
	}
	else
	{
		echo "Not Done";
		}

?>
<?php require("footer.php")?>