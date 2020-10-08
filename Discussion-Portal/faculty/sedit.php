<?php session_start();
 require("utility.php");
 require("header.php");
$rows = ExecuteQuery ("SELECT topic_name, topic_id FROM Topic");
require("checkUser.php");

?>
<?php
$id = $_GET['id'];
$str = "SELECT * FROM subtopic WHERE subtopic_id='".$_GET['id']."'";
	$result =ExecuteQuery($str);
	$row = mysql_fetch_array($result);
	?>
    <script type="text/javascript">
	function check(f)
	{
		if(f.sn.value=="")
		{
			document.getElementById("a").innerHTML="Please,Enter the subtopic....";
			//alert("Please,Enter The Subtopic ...");
			f.sn.focus();
			return false;
			}
			else if(f.sd.value=="")
			{
				document.getElementById("b").innerHTML="Please,Enter the subtopic description";
//				alert("Please,Enter The Subtopic Description..");
				f.sd.focus();
				return false;
				}
				else if(f.ss.value=="")
				{
					document.getElementById("c").innerHTML="Please,Enter the status";
					//alert("Please,Enter The Status..");
					f.ss.focus();
					return false;
					}
				else if(f.topic.value=="")
			
				{
					document.getElementById("d").innerHTML="Please,Enter the topicname..";
//					alert("Please,Enter The Topicname..");
					f.topic,focus();
					return false;
					}
			else
			return true;
		}
	</script>
       <form action="supdate.php" method="POST" onsubmit="return check(this)">
       	<input type="hidden" value="<?php echo $_GET['id'] ?>" name="id"/>

<table>
<tr><td>subtopic_name</td><td>:</td><td><input type="text" name="sn"  value="<?php echo $row[
'subtopic_name']?>"><span id='a' style="color: red;"></span></td></tr><br/>
<tr><td>subtopic_description</td><td>:</td><td><input type="text" name="sd" value="<?php echo $row['subtopic_description'] ?>"><span id='b' style="color: red;"></span></td></tr><br/>
<tr><td>s_status</td><td>:</td><td><input type="text" name="ss" value="<?php echo $row['s_status']?>"><span id='c' style="color: red;"></span></td></tr>
<tr><td>topic</td><td>:</td><td><select name="topic">
    	<?php
			while($row1=mysql_fetch_array($rows))
				if ($row1["topic_id"] == $row["topic_id"])
					echo "<option value='$row1[topic_id]' selected='selected'>$row1[topic_name]</option>";
				else
					echo "<option value='$row1[topic_id]'>$row1[topic_name]</option>";
		?>
    </select><span id='d' style="color: red;"></span>
</td></tr>

<tr><td><input type="submit" value="submit"></td></tr>	
</table>
</form>
<?php require("footer.php");?>
