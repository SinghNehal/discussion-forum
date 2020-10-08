<?php  session_start();
require("header.php");
require("checkUser.php");

$rows = ExecuteQuery ("SELECT topic_name, topic_id FROM Topic")
?>
<script type="text/javascript">
function check(f)
{
	if(f.sn.value=="")
	{
		document.getElementById("a").innerHTML="Please,Enter the subtopic name...";
	//	alert("Please,Enter The Subtopic Name..");
		f.sn.focus();
		return false;
	}
	if(f.sd.value=="")
	{
		document.getElementById("b").innerHTML="Please,Enter the subtopic description";
//		alert("Please,Enter The Subtopic Description..");
		f.sd.focus();
		return false;
	}
	if(f.ss.value=="")
	{
		document.getElementById("c").innerHTML="Please,Enter the subtopic status";
		//alert("Please,Enter The Subtopic Status..");
		f.ss.focus();
		return false;
	}
	if(f.ti.value=="")
	{
		document.getElementById("d").innerHTML="Please,Enter the topic name";
	//	alert("Please,Enter The Topic Name..");
		f.ti.focus();
		return false;
	}
	
	else
	return true;
	}
</script>
<form action="sinsertH.php" method="POST" onsubmit="return check(this)">
<table>
<tr><td>Subtopic Name</td><td>:</td><td><input type="text" name="sn"><span id='a' style="color: red;"></span></td></tr>
<tr><td>Subtopic Description</td><td>:</td><td><input type="text" name="sd"><span id='b' style="color: red;"></span></td></tr>
<tr><td>Status</td><td>:</td><td><input type="text" name="ss"><span id='c' style="color: red;"></span></td></tr>
<tr><td>Topic Id</td><td>:</td><td>
	<select name="ti">
    	<?php
			while($row=mysql_fetch_array($rows))
				echo "<option value='$row[topic_id]'>$row[topic_name]</option>";
		?>
    </select>
    <span id='d' style="color: red;"></span>
<td></tr>
<tr><td><input type="submit" value="Submit"></td></tr>
</table>

<?php require("footer.php")?>