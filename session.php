<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<<?php
// Set session variables
//$_SESSION["favcolor"] = "green";
//$_SESSION["favanimal"] = "cat";
//echo "Session variables are set.<br>";
?> 
<?php
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>
</body>
</html>