<?php 
session_start();
require("header.php");
require("checkUser.php");
echo "<body style='background: url(../res/images/im6.jpg);'>";
?>
<script type="text/javascript">
function check(f)
{
	if(f.utos.value=="")
	{
		document.getElementById("f").innerHTML="Please,Enter the username";
//		alert("Please,Enter The Username");
		f.utos.focus();
		return false;
		}
		else
		return true;
	}
</script>
<form action="" method="post" onsubmit="return check(this)">
	<p>
    	Enter name to search 
    	<input type="text" name="utos" /><span id='f' style="color: red;"></span>
        <br/>
        <br/>
        <input type="submit" value="Click Me" />
    </p>
</form>

<?php
if (isset($_POST['utos']))
{
$uto=$_POST['utos'];

$sql="SELECT * FROM user WHERE fullname LIKE '$uto%'";
$rows=ExecuteQuery($sql);

if (mysql_num_rows($rows) > 0)
{
	echo "<table cellpadding='2' cellspacing='2'>";
	
	while ($row = mysql_fetch_array($rows))
	{
		echo "<tr>";
		echo "<td valign='top'><img src='$row[uimg]' alt='' style='height:100px; width:100px;' />";
		echo "<td valign='top'><a href=message.php?id=$row[user_id] style='font-weight:bold;'>$row[fullname]</a> <br/>";
		echo ($row['gender'] == 1 ? "Male" : "Female")."<br/>";
		echo $row['country'];
		echo "<br/>";
		echo "<br/>";
		echo "<a href=message.php?id=$row[user_id] style='font-weight:bold;'><input type='button' value='Send Message'></a>";
		echo "</tr>";
	}
	
	echo "</table>";
}
}
?>

<?php require("footer.php")?>