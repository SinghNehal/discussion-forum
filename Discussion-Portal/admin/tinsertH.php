<?php session_start();
 require("header.php");
require("checkUser.php")?>

 <?php 
 $tn=$_POST['tn'];
 $tt=$_POST['tt'];
 
 $sql="INSERT INTO topic (topic_name,topic_type) VALUES('$tn','$tt');";
 $result= ExecuteNonQuery($sql);
 if($result)
{
	header("location:topic.php");
	}
	else
	{
		header("location:tinsert.php");
		}
 ?>
<?php require("footer.php")?>