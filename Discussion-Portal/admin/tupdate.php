<?php session_start();
		require("header.php"); 
      	//require("checkUser.php") 
?>

<?php 
	 $sql = "UPDATE topic  SET  topic_name = '".$_POST['tn']."', topic_type = '".$_POST['tt']."'  WHERE topic_id ='".$_POST['id']."'";
	 
	 
$result=ExecuteNonQuery($sql);

if($result == 1)
{
	header("location:topic.php");
	
	}
	else
	{
	header("location:tedit.php");
	}
?>
      
<?php require("footer.php")?>	  