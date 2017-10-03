<!DOCTYPE html>
<html>
<body>

<?php
// strlen() return length of string
echo strlen("Hello world!"); //12
echo "<br>";
?> 
 
 <?php
 // str_word_count return count word in string
echo str_word_count("Hello world kaka !"); //3
echo "<br>";
?> 
<?php
// strrev return reverses of string
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";
?>
<?php
//strpos return searches for a specific text within a string.
echo strpos("Hello world!", "world"); // outputs 6
echo "<br>";
?> 

 <?php 
// str_replace() function replaces some characters with some other characters in a string.
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?> 
</body>
</html>