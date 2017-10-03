<!DOCTYPE html>
<html>
<body>

<?php 
echo "PHP stores all global variables in an array called GLOBALS[index]<br>";
$x = 75;
$y = 25; 

function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo "$z<br>";
?>

<?php 
echo "_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
<?php
	echo "<br><br>";
	echo "_REQUEST is used to collect data after submitting an HTML form.";
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']); 
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
<?php
	echo "<br><br>";
	echo "_POST is widely used to collect form data after submitting an HTML form with method='post'. _POST is also widely used to pass variables";
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname']; 
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>

</body>
</html>