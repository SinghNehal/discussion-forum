<?php require("header.php");?>

<script type="text/javascript">
	function check(f)
	{
		if (f.uid.value == "")
		{
			//alert("Please, enter user id");
			document.getElementById("spuid").innerHTML = "Please, Enter user id.";
			
			f.uid.focus();
			return false;
		}
		else if (f.pwd.value == "")
		{
//			alert ("Please, enter password");
document.getElementById("a").innerHTML = "Please,Enter the password";
			
			f.pwd.focus();
			return false;
		}
		else
			return true;
	}
</script>
<form action="loginH.php" method="POST" onsubmit="return check(this)">
<table>
<tr><td>user_id</td><td>:</td><td><input type="text" name="uid"><span id = "spuid" style = "color :red;"></span></td></tr>
<tr><td>password</td><td>:</td><td><input type="password" name="pwd"><span id = "a" style = "color :red;"></span></td></tr>
<tr><td><input type="submit" value="login"></td><td></td><td><input type="reset" value="cancel"></td></tr>
</table>
<?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Invalid User Id / password";
				elseif ($_GET["act"] == "not_fac")
                    echo "Faculty not approved yet";
				
?>

</form>
<?php require("footer.php");?>