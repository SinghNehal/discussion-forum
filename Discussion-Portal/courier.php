<?php
$type = 'Core';
$name = 'Courier';
$up = -100;
$ut = 50;
for($i=0;$i<=255;$i++)
	$cw[chr($i)] = 600;
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
