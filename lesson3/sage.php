<?php
 $age = 15;
 switch($age){
    case ($age >= 0 && $age <18):
        echo "your a minor <br>";
        break;
 switch($age)
    case ($age >= 18 && $age <20):
        echo "your a young adult <br>";
        break;
 switch($age)
    case ($age >25):
        echo "your a adult <br>";
        break;
default:
echo "invalid input <br>";
break;
 }
?>


