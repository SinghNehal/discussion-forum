<?php session_start();
require("utility.php");?>
<?php require("header.php");
require("checkUser.php");?>
<?php
$id = $_GET['id'];
$str = "SELECT * FROM topic WHERE topic_id='".$_GET['id']."'";
	$result =ExecuteQuery($str);
	$row = mysql_fetch_array($result);
	?>
    <script type="text/javascript">
	function check(f)
	{
	if(f.tn.value=="")
	{
		document.getElementById("a").innerHTML="Please,Enter the topic name...";
//		alert("Please,Enter The Topic Name..");
		f.tn.focus();
		return false;
	}
	else if(f.tt.value=="")
	{
		document.getElementById("b").innerHTML="Please,Enter the topic type..";
//		alert("Please,Enter The Topic Type..");
		f.tt.focus();
		return false;
	}
	else
	return true;
	}
	</script>
       <form action="tupdate.php" method="POST" onsubmit="return check(this)">
       	<input type="hidden" value="<?php echo $_GET['id'] ?>" name="id"/>

<table>
<tr><td>Topic_name</td><td>:</td><td><input type="text" name="tn"  value="<?php echo $row[
'topic_name']?>"><span id='a' style="color: red;"></span></td></tr><br/>
<tr><td>Topic_type</td><td>:</td><td><input type="text" name="tt" value="<?php echo $row['topic_type'] ?>"><span id='b' style="color: red;"></span></td></tr><br/>

<tr><td><input type="submit" value="submit"></td></tr>	
</table>
</form>
<?php require("footer.php");?>
