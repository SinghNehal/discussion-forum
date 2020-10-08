<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>

<a href="javascript:void()" onclick="history.back()">Back</a>

<hr/>

<?php
	$rows = ExecuteQuery ("SELECT user_id_from, (select fullname from user where user_id=user_id_from) as fromname,  user_id_to, (select fullname from user where user_id=user_id_to) as toname FROM chatmaster where chat_id=$_GET[id]");
	
	$row = mysql_fetch_array ($rows);
	
	$fromid = $row["user_id_from"];
	$toid = $row["user_id_to"];
	$from = $row["fromname"];
	$to = $row["toname"];

	$sql = "SELECT * FROM chat WHERE chat_id=$_GET[id] ORDER BY cdatetime ASC";
	$rows = ExecuteQuery ($sql);


	while ($row = mysql_fetch_array($rows))
	{
		if ($row["user_id"] == $fromid)
			echo "<strong>$from</strong><br/><br/>";
		else
			echo "<strong>$to</strong><br/><br/>";
			
		echo "$row[message]";
		
		echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
?>
<script type="text/javascript">
function check(f)
{
	if(f.tt.value=="")
	{
		document.getElementById("f").innerHTML="Please,Enter the message....";
//		alert("Please,Enter The Message.........");
		f.tt.focus();
		return false;
		}
		else
		return true;
	}
</script>
<form action="writemsg.php" method="POST" onsubmit="return check(this)">
    <input type="hidden" value="<?php echo $_GET['id'] ?>" name="chid" />
<table>

<tr><td></td><td></td><td><textarea rows="3" cols="30" name="tt" ></textarea><span id='f' style="color: red;"></span></td></tr>
<tr><td></td><td></td><td><input type="submit" value="SEND" ></td></tr>
</table>
</form>

<?php require("footer.php");?>