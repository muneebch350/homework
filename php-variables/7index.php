<!DOCTYPE html>
<html>
<body>

<?php
$x = 50;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest();
echo $y;
?>

</body>
</html>
