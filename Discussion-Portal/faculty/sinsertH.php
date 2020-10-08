<?php session_start();
	require("header.php");
	require("checkUser.php")
?>

 <?php 
 $sn=$_POST['sn'];
 $sd=$_POST['sd'];
 $ss=$_POST['ss'];
 $ti=$_POST['ti'];
 
 $sql="INSERT INTO subtopic (subtopic_name,subtopic_description,s_status,topic_id) VALUES ('$sn','$sd','$ss',$ti)";

 $result= ExecuteNonQuery($sql);

 if($result==1)
	{
		header("location:subtopic.php");	
		}
	else
	{
			header("location:sinsert.php");
			
	}
 ?>
 
<?php require("footer.php")?>