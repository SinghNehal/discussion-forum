<?php  
ob_start();
require("utility.php"); ?>

<?php
$id=$_GET['id'];
$ans_det = $_GET['ans_det'];
$date = $_GET['date'];
$view = $_GET['views'];
$sub_id = $_GET['sub_id'];
$uid = $_GET['uid'];


$sql = "INSERT INTO abusive_post (heading,post_detail,datetime,user_id,subtopic_id,views) values ('$id','$ans_det', '$date', '$uid', '$sub_id', '$view' )";

$result=ExecuteNonQuery ($sql);

	if($result)
{
	header("location:questionview.php?qid=$id");
}
else
{
	echo "Failed to report";
}

?>