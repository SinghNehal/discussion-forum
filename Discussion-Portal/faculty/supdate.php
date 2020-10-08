<?php session_start();
		require("header.php");
		require("checkUser.php");       	 
?>

<?php 
	 $sql = "UPDATE subtopic  SET  subtopic_name = '".$_POST['sn']."', subtopic_description = '".$_POST['sd']."',s_status='".$_POST['ss']."',topic_id='".$_POST['topic']."'  WHERE subtopic_id =".$_POST['id'];
	 
	 
$result=ExecuteNonQuery($sql);

if($result == 1)
{
	header("location:subtopic.php");
	
	}
	else
	{
	header("location:sedit.php");
	}
?>
      
<?php require("footer.php")?>	  