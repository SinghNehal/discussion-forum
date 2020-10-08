<?php  session_start();
 require("header.php"); 
	require("checkuser.php");
?>
	<script type="text/javascript">
		function check(f)
		{
			if(f.head.value=="")
			{
				document.getElementById("a").innerHTML="Please,Enter the heading";
				//alert("Please,Enter The Heading");
				f.head.focus();
				return false;
				
				}
				else if(f.ta.value=="")
				{
					document.getElementById("b").innerHTML="Please,Enter The Question";
					//alert("Please,Enter The Question")}
					f.ta.focus();
					return false;
		}
			   else
			   return true;
			}
			
			
	</script>
<form action="questionH.php" method="POST" onsubmit="return check(this)">
<input type="hidden" value="<?php echo $_GET["stid"] ?>" name="stid" />
<table>
<tr>Heading:<br><textarea rows="1" cols="30" name="head"></textarea><span id='a' style="color: red;"></span></tr><br/>
<tr><tr>Enter your question:<br/><textarea rows="3" cols="60" name="ta" ></textarea><span id='b' style="color: red;"></span></tr><br/>
<tr><td><input type="submit" value="Post"></td><td><input type="reset" value="Clear"></td></tr>
</table>
</form>


<?php require("footer.php"); ?>