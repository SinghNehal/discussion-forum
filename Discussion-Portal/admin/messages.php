<?php session_start();
 require("header.php");
require("checkUser.php");
echo "<body style='background: url(../res/images/im6.jpg);'>";
echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:5px solid black'/>";?>
<script type="text/javascript">
	document.getElementById("amessage").className="active";
</script>


<a href="search.php"><b>Send New Message</b></a>
<hr/>

<?php
	//first fetch whom u have send chats
	echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:5px solid black'/>";
	$sql = "SELECT chat_id, user_id_from, user_id_to, fullname FROM chatmaster, user WHERE chatmaster.user_id_to=user.user_id AND chatmaster.user_id_from=$_SESSION[uid]";
	
	$rows = ExecuteQuery ($sql);
	echo"<b>Messages you have send to people.........................................................</b>";
        echo"<br>";
	
        echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:5px solid black'/>";
	while ($row = mysql_fetch_array($rows))
	{
		echo "<a href='readmsg.php?id=$row[chat_id]'>$row[fullname]</a>";
		
		$chatrow = mysql_fetch_array (ExecuteQuery ("SELECT * FROM chat WHERE chat_id=$row[chat_id] ORDER BY cdatetime DESC"));
		
		if ($chatrow)
		{
			echo "<br/><br/> $chatrow[message]";
		}
		
				echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
	
	
	// now fetch those that have sent chats to you
         echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:5px solid black'/>";
	echo"<b>Messages people have send to you.......................<b>";
echo"<br>";

         echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:5px solid black'/>";
	$sql = "SELECT chat_id, user_id_from, user_id_to, fullname FROM chatmaster, user WHERE chatmaster.user_id_from=user.user_id AND chatmaster.user_id_to=$_SESSION[uid]";
	
	$rows = ExecuteQuery ($sql);
	
	while ($row = mysql_fetch_array($rows))
	{
		echo "<a href='readmsg.php?id=$row[chat_id]'>$row[fullname]</a>";
	
		
		$chatrow = mysql_fetch_array (ExecuteQuery ("SELECT * FROM chat WHERE chat_id=$row[chat_id] ORDER BY cdatetime DESC"));
		
		if ($chatrow)
		{
			echo "<br/><br/> $chatrow[message]";
			
		}
		
				echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
?>

<?php require("footer.php")?>
