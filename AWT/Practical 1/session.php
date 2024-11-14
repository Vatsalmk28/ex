<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    
    <form action="" method="post">
        <input type="text" name="user" placeholder = "Enter User Name">
        <br>
        <br>
        <button  name = "button" value="set">Set</button>
        <br>
        <button  name = "button" value="get">Get</button>
        <br>
        <button  name = "button" value="delete">Delete</button>

    </form>

</body>
</html>

<?php

session_start();

if(isset($_POST["button"]))
{
    if($_POST["button"] == 'set'){
        if((isset($_POST["user"])) & $_POST["user"] != "")
        {
            $val = $_POST["user"];
            $_SESSION["user"] = $val;
            $_val = "";
            echo "User session set successfully";
        
            
        }
        else{
            echo "User field is not set in the form data.";
        }
    }
    elseif($_POST["button"] == "get")
    {
        if(isset($_SESSION["user"]))
        {
            echo $_SESSION["user"];
        }
        else{
            echo "User session is not set.";
        }
    }

    elseif($_POST["button"] == "delete")
    {
        if(isset($_SESSION["user"]))
        {
            session_destroy();
            echo "Session is deleted Successfully.";
        }
        else{
            echo "User session is not set.";
        }
    }
    


    
    else{
        echo "Invalid button value.";
    }
}

?>