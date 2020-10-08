<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<?php 

$sql="SELECT * from user where isuser=true";
$rows=ExecuteQuery($sql);

if (mysql_num_rows($rows)>0)
{
while ($row = mysql_fetch_array ($rows))
{
	echo $row['fullname']."<br/>";
}
}
?>
<?php require("footer.php");?>