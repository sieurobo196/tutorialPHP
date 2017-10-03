<html>
<body>
<div class="menu">
<?php include 'menu.php';?>
</div>
<h1>Welcome to my home page!</h1>
<p>Some text.</p>
<p>Some more text.</p>
<h1>include file with have variables</h1>
<?php include 'vars.php';
echo "I have a $color $car.";
?>
<h1>include file not exist with have variables</h1>
<?php include 'noFileExists.php';
echo "I have a $color1 $car1.";
?>
<h1>require file not exist with have variables</h1>
<?php require 'noFileExists.php';
echo "I have a $color1 $car1.";
?>
<?php include 'footer.php';?>

</body>
</html>