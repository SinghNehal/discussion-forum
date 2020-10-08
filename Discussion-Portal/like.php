<?php session_start();
mysql_connect("localhost","root","");
mysql_select_db("tech_forum");
$id=$_GET['id'];
$r = $id;
$id2=$_GET['id2'];
$sql="select * from answer WHERE answer_id='$r'";
$result=mysql_query($sql) or die('fine');
$row4 = mysql_fetch_array($result);
$m=$row4['like']+1;

$result=mysql_query("UPDATE `tech_forum`.`answer` SET `like` = '$m' WHERE `answer`.`answer_id` ='$r';") or die('helo');
header("location:questionview.php?qid=$id2");
?>