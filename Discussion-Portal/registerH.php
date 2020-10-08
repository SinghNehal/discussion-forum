<?php  
ob_start();
require("utility.php"); 
echo "<body style='background: url(res/images/im6.jpg);'>";?>

<?php
$u_name=$_POST['u_name'];
$f_name=$_POST['f_name'];
$pwd=$_POST['pwd'];
$e_mail=$_POST['e_mail'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$add=$_POST['add'];
$sta=$_POST['sta'];
$cou=$_POST['cou'];

$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="ups/$ima";
move_uploaded_file($imup, $path);


//$image = chunk_split(base64_encode(file_get_contents( $imup )));


$sql=" INSERT INTO user (username,fullname,password,e_mail,gender,dob,user_type,address,state,country,uimg) values ('$u_name','$f_name','$pwd','$e_mail','$gender','$dob','user','$add','$sta','$cou','$path')";

$result=ExecuteNonQuery ($sql);

if($result)
{
	header("location:notification.php");
}
else
{
		header("location:register.php");
}
?> 	