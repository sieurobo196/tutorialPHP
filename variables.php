<!DOCTYPE html>
<html>
<body>

<?php
//In PHP, a variable starts with the $ sign, followed by the name of the varia
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
?>
<?php
// print varibale in string
$txt = "W3Schools.com";
echo "I love $txt!<br>";
// print var with string
echo "I love " . $txt . "!<br>";
?>
<?php
// calculator
$x = 5;
$y = 4;
echo $x + $y."<br>";
?>
<?php
// function in php
$x = 5; // global scope
 
function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<?php
//funtion var inside funxtion
function myTestY() {
    $y = 5; // local scope
    echo "<p>Variable x inside function is: $y</p>";
} 
myTestY();

// using x outside the function will generate an error
echo "<p>Variable y outside function is: $y</p>";
?>

<?php
$x = 5;
$y = 10;

function myTestXY() {
    global $x, $y;
    $y = $x + $y;
} 

myTestXY();  // run function
echo "$y<br>"; // output the new value for variable $y
?>

<?php
$x = 5;
$y = 10;

function myTestgxy() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTestgxy();
echo "$y<br>";
?>

<?php
function myTestP() {
    static $x = 0;
    echo $x;
    $x++;
}

myTestP();
echo "<br>";
myTestP();
echo "<br>";
myTestP();
?> 
</body>
</html>