<!DOCTYPE html>
<html>
<body>

<?php
// syntax define(name, value, case-insensitive);
//name: Specifies the name of the constant
//value: Specifies the value of the constant
//case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";
?> 
<?php
// case-insensitive constant name
define("GREETING1", "Welcome to W3Schools.com!", true);
echo greeting1;
echo "<br>";
?> 

<?php
define("GREETING2", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING2;
}
 
myTest();
?> 
</body>
</html>