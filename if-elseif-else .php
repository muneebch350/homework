<!DOCTYPE html>
<html>
<body>

<?php
$d = date("D");
if($d == "Mon"){
    echo "Any Vegetable ";
} elseif($d == "Tue"){
    echo "chicken";
} elseif($d == "Wed"){
    echo "lady finger";
} elseif($d == "Thr"){
    echo "beaf";
} elseif($d == "Fri"){
    echo "chinese rice";
} elseif($d == "Sat"){
    echo "mattor keema";
} else{
    echo "biryani";
}
?>

</body>
</html>   
