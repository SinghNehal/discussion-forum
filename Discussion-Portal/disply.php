<?php require("header.php");?>


<?php
$result= ExecuteQuery("SELECT * FROM User");
echo "<table border='1'>";
echo "<strong><tr><th>firstname</th><th>fullname</th><th>password</th><th>e_mail</th><th>gender</th><th>dob</th></tr></strong>";
while($name_row=mysql_fetch_row($result))
{
	echo "<tr>";
	print("<td>{$name_row[0]}</td><td>{$name_row[1]}</td><td>{$name_row[2]}</td><td>{$name_row[3]}</td><td>{$name_row[4]}</td><td>{$name_row[5]}</td><br />");
	echo "</tr>";
}

?>
<?php require("footer.php");?>
