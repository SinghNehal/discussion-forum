<?php session_start();
require("header.php");
require("checkUser.php");
?>
<?php 
	$uto=$_POST['uto'];
	$tt=$_POST['tt'];
	
	$sql="INSERT INTO chatmaster (user_id_from,user_id_to) values ($_SESSION[uid],$uto)";
	$result = ExecuteNonQuery($sql);
	$sql = "SELECT MAX(chat_id) as cid FROM chatmaster";
	$row = mysql_fetch_array (ExecuteQuery ($sql));
	$cid = $row['cid'];
	
	
	$sql="INSERT INTO chat (user_id, chat_id, message) values ($_SESSION[uid],$cid,'$tt')";
	
	$result += ExecuteNonQuery($sql);

	if ($result == 2)
		header("location:messaged.php");	
?>
<?php require("footer.php")?>