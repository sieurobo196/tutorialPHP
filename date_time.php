<!DOCTYPE html>
<html>
<body>
<!-- examples 1-->
<?php
echo "Syntax date(format,timestamp)<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l")."<br>";
?>
<!-- examples 2-->
&copy; 2010-<?php echo date("Y")."<br>";?>
<!-- examples 3-->
<?php
echo "The time is " . date("h:i:sa")."<br>";
?>
<!-- examples 4-->
<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa")."<br>";
?>
<!-- examples 5-->
<?php
echo "Syntax mktime(hour,minute,second,month,day,year)<br>";
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
?>
<!-- examples 6-->
<?php
echo "Syntax strtotime(time,now)<br>";
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";
?>
<!-- examples 7-->

<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
<!-- examples 8-->
<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}
?>
<!-- examples 9-->
<?php
$d1=strtotime("Sep 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of Sep.";
?>
</body>
</html>