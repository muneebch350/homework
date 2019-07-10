<!DOCTYPE html>
<html>
<body>

<?php
$favdish = "lady finger";

switch ($favdish) {
    case "biryani":
        echo "My favorite dish is biryani";
        break;
    case "lady finger":
        echo "My favorite dish is lady finger";
        break;
    case "chicken":
        echo "My favorite dish is chicken";
        break;
    case "beaf":
        echo "My favorite dish is beaf";
        break;
    case "chinese rice":
        echo "My favorite dish is chinese rice";
        break;
    case "mattor keema":
        echo "My favorite dish is mattor keema";
        break;
  	case "cabbage":
        echo "My favorite dish is cabbage";
        break;
    
    default:
        echo "Your favorite dish is neither biryani,lady finger,chicken ,beaf,chinese rice,mattor keema,nor cabbage!";
}
?>
 
</body>
</html>