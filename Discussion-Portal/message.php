<?php 
session_start();
require("header.php");
require("checkUser.php");

$sql="SELECT * from user where user_id=$_GET[id]";

$rows=ExecuteQuery($sql);
$row = mysql_fetch_array($rows);
echo "<body style='background: url(res/images/im6.jpg);'>";
?>
<script type="text/javascript">
function check(f)
{
	if(f.tt.value=="")	
	{
		document.getElementById("a").innerHTML="Please,Enter the message";
		//alert("Please,Enter The Question");
		f.tt.focus();
		return false;
		}
		else
		return true;
	}

</script>

<form action="messageH.php" method="POST" onsubmit="return check(this)">
	<input type="hidden" name="uto" value="<?php echo $_GET['id'] ?>" />
<table>
<tr><td>To</td><td>:</td><td><?php echo $row['fullname']; ?></td></tr>
<tr><td></td><td></td><td><textarea rows="3" cols="30" name="tt" ></textarea><span id='a' style="color: red;"></span></td></tr>
<tr><td></td><td></td><td><input type="submit" value="SEND" ></td></tr>
</table>
</form>
<br/>


<?php require("footer.php")?>