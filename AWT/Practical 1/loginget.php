<?php
if(isset($_GET['user_name']) && isset($_GET["user_password"]))
{
    $user_name = htmlspecialchars($_GET['user_name']);
    $password = htmlspecialchars($_GET["user_password"]);

    echo "Username: ". $user_name. "<br>";
    echo "Password: ". $password. "<br>";
}

else{
    echo "Please provide both username and password";
}
?>