<?php  session_start();
require("header.php");
require("checkUser.php");
echo "<body style='background: url(../res/images/im6.jpg);'>";
?>
<script type="text/javascript">
function check(f)
{
	if(f.tn.value=="")
	{
		document.getElementById("a").innerHTML="Please,Enter the topic name..";
	//	alert("Please,Enter The Topic Name..");
		f.tn.focus();
		return false;
	}
	else if(f.tt.value=="")
	{
		document.getElementById("b").innerHTML="Please,Enter the topic type..";
		//alert("Please,Enter The Topic Type..");
		f.tt.focus();
		return false;
	}
	else
	return true;
	}
</script>
<form action="tinsertH.php" method="POST" onsubmit="return check(this)">
<table>
<table>
<tr><td>Topic Name</td><td>:</td><td><input type="text" name="tn" ><span id='a' style="color: red;"></span></td></tr><br/>
<tr><td>Topic Type</td><td>:</td><td><input type="text" name="tt"><span id='b' style="color: red;"></span></td></tr><br/>
<tr><td><input type="submit" value="Submit"></td></tr>	
</table>
</form>


<?php require("footer.php")?>