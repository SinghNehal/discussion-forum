

<?php 
	if(!isset($_SESSION["fn"]))
		header("location:login.php");
?>
<?php
class Car {
    function Car() {
        $this->model = "Tesla";
    }
}

// create an object
$Lightning = new Car();

// show object properties
echo $Lightning->model;
?>
<span style="float:right">
welcome <?php echo $_SESSION["fn"];?>, [ <a href="logout.php">log-out</a> ] 
</span>
