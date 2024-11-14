<html>
    <body>
        <form action="" method="post">
            <input type="text" name="user" placeholder="Enter user name" />
            <br>
            <br>
            <button name="btn" value="set">Set</button>
            <br>
            <br>
            <button name="btn" value="display">Display</button>
            <br>
            <br>
            <button name="btn" value="delete">Delete</button>


        </form>
    </body>
</html>


<?php
if(isset($_POST["btn"]))
{
    if($_POST["btn"] == "set")
    {
        if(isset($_POST["user"]))
        {
            $val = $_POST["user"];
            setcookie("user",$val,time() + 3600,"/");
            echo "Cookie is set Successfully!";
        }
        else{
            echo "User field is not set in the form data.";
        }
    }

    elseif($_POST["btn"] == "display")
    {
        if(isset($_COOKIE["user"]))
        {
            echo "Cookie is : ".$_COOKIE["user"];
        }
        else{
            echo "Cookie is not set.";
        }
    }

    elseif($_POST["btn"] == "delete")
    {
        if(isset($_COOKIE["user"]))
        {
            echo "Cookie ".$_COOKIE["user"]." is deleted";
            setcookie("user",$_COOKIE["user"],time() - 3600, "/");
        }
        else{
            echo "Cookie is not seted";
        }
    }
}

?>