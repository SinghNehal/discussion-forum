<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>

<?php
$chid=$_POST['chid'];
$tt=$_POST['tt'];

$sql="INSERT INTO chat (message,user_id,chat_id) values ('$tt',$_SESSION[uid],$chid)";
$result=ExecuteNonQuery($sql);

if ($result)
	header("location:readmsg.php?id=$chid");
?>
<?php require("footer.php")?>