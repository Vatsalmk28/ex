<?php

$nameErr = "";
$emailErr = "";
$mobileErr = "";
$passwordErr = "";

if(isset($_POST["submit"]))
{
    if(empty($_POST["name"]))
    {
        $nameErr = "name is required";
    }
    else{
        $name = filterdata($_POST["name"]);
        if(!preg_match("/^[a-zA-Z-']*$/",$name))
        {
            $nameErr = "Only letter and white space allowed";
        }
    }

    if(empty($_POST["email"]))
    {
        $emailErr = "Email is required";
    }
    else{
        $email = filterdata($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Invalid email format";
        }
    }

    if(empty($_POST["phone"]))
    {
        $mobileErr = "Mobile is required";
    }
    else{
        $mobile = filterdata($_POST["phone"]);
        if(!preg_match("/^[0-9]{10}+$/",$mobile))
        {
            $mobileErr = "Invalid Format";
        }
    }

    if(empty($_POST["password"]))
    {
        $passwordErr = "Password is required";
    }
    else{
        $password = filterdata($_POST['password']);
        if(!preg_match("/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z\d@$!%*?&]{6,12}$/",$password))
        {
            $passwordErr = "Please Enter Strong Password";
        }
    }
}


function filterdata($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;

}


?>



<html>
    <head>
        <title>Form Validation</title>
    </head>
    <body>
        <div class="container">
            <form action="" method="post">
                <input type="text" name="name" placeholder="Enter the name" value=<?php if(isset($_POST['name'])) {echo $_POST["name"];} ?>>
                <br>
                <p><?php echo $nameErr; ?></p>

                <input type="text" name="email" placeholder = "Enter the Email" value=<?php if(isset($_POST["email"])) { echo $_POST['email']; }?> >
                <br>
                <p><?php echo $emailErr; ?></p> 
                
                <input type="phone" name="phone" placeholder="enter your phone" value="<?php if(isset($_POST['phone'])) {echo $_POST['phone'];}?>">
                <br>
                <p><?php echo $mobileErr; ?></p>
                

                <input type="password" name="password" placeholder="*********">
                <br>
                <p><?php echo $passwordErr; ?></p>
                <button type="submit" name="submit" value="SUBMIT">SUBMIT</button>
            </form>
        </div>
    </body>
</html>



