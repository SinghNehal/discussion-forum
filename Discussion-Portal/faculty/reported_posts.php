<?php session_start();
 require("utility.php");
?>
<?php require("header.php");
require("checkUser.php");
echo "<body style='background: url(../res/images/im6.jpg);'>";
?>
<br>
<script type="text/javascript">
	document.getElementById("amanage").className="active";
</script>

 
<?php
	$sql="SELECT * from abusive_post";
	$rows=ExecuteQuery($sql);
	echo "<table border='9' width='900'>";
	echo "<strong><tr><th>Thread ID</th><th>Heading</th><th>Post Details</th><th>DateTime</th><th >User ID</th><th>Delete</th></strong>";
	while($name_row=mysql_fetch_row($rows))
	{
		echo"<tr>";
		echo "<td>{$name_row[0]}</td><td >{$name_row[1]}</td><td>{$name_row[2]}</td><td>{$name_row[3]}</td><td>{$name_row[4]}</td><td><a href='del_post.php?id=".$name_row[2]."'><img src='../res/images/delete.jpg'  class='imagedel'/></a></td>";
	}
	echo "</table>";
	
?>

<?php require("footer.php")?>