<!DOCTYPE html>
<html>
<body>

<?php 
//type String
$xStr = "Hello world!";
$yStr = 'Hello world!';

echo $xStr;
echo "<br>"; 
echo $yStr;
echo "<br>"; 
?>

<?php  
//type Integer
$xInt = 5985;
// var_dump() function return type of value
var_dump($xInt);
echo "<br>"; 
?>

<?php  
//type Float
$xFloat = 59.85;
// var_dump() function return type of value
var_dump($xFloat);
echo "<br>"; 
?>
<?php  
//type Boolean
$xBoolean = true;
// var_dump() function return type of value
var_dump($xBoolean);
echo "<br>"; 
?>

<?php 
// type Array
$cars = array("Volvo","BMW","Toyota");
$carsInt = array(1,2,3);
var_dump($cars);
echo "<br>";
var_dump($carsInt);
echo "<br>";
?>

<?php
// type Object
class Car {
    function Car() {
        $this->model = "VW";
		$this->value = 1;
    }
}
// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
echo "<br>";
?>

<?php
// type null
//$x = "Hello world!";
$x = null;
var_dump($x);
?>

</body>
</html>