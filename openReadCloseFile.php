<!DOCTYPE html>
<html>
<body>

<?php
// read all content file
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
echo "<br>";
fclose($myfile);
?>

<?php
// fgets() function is used to read a single line from a file.
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
echo "<br>";
fclose($myfile);
?>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile)."<br>";
}
fclose($myfile);
?>
</body>
</html>