<?php

$fruit = "apple";
setcookie("Fruit",$fruit, time()+1000);
if(isset($_COOKIE['Fruit']))
{
    echo "Current cookie is ". $_COOKIE["Fruit"];
}
else{
    echo "no cookie";
}

?>