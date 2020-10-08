<?php  
ob_start();
require("utility.php"); ?>

<?php
$ansdet = $_GET['ansdet'];
$id2=$_GET['id2'];

$sql = "DELETE FROM answer WHERE answer_id=$ansdet";

$result=ExecuteNonQuery($sql);

if($result)
{
	header ("location:questionview.php?qid=$id2");
}
else
{
	echo "Failed to Delete";
}

?>