<?php session_start();
 require("header.php");
require("checkUser.php");
echo "<body style='background: url(../res/images/im6.jpg);'>";?>
<script type="text/javascript">
	document.getElementById("amanage").className="active";
</script>


	<?php 
		$sql="SELECT user_id, username, fullname, dob, e_mail from user where user.user_type = 'faculty' and user.user_acc_active = 0";
		$rows=ExecuteQuery($sql);
		
		echo "<table border='9'>";
		echo "<strong><tr><th>User ID</th><th>Username</th><th>Fullname</th><th>DOB</th><th>Email</th><th>Approve</th></tr> </strong>";
		
		while($name_row=mysql_fetch_array($rows))
		{
			echo "<tr>";
			echo "<td>$name_row[user_id]</td><td>$name_row[username]</td><td>$name_row[fullname]</td><td>$name_row[dob]</td><td>$name_row[e_mail]</td><td><a href='a_fac.php?id=".$name_row[0]."'><img src='../res/images/tick.png'  class='imagedel'/></a></td>";
			}
		
		echo "</table>";
?>


<?php require("footer.php")?>