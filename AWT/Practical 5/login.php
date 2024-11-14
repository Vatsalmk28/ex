<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "onepage";


try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected Successfully";
}catch(PDOException $e)
{
    echo "Connection Failed: ".$e->getMessage();
}

// Capture the form data
if (isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['password']) && $_POST['password'] != '') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM userdata WHERE email = :email AND password = :password";

    if($stmt = $conn->prepare($sql))
    {
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row)
        {
            // echo "<h2>Login Successful!</h2>";
            // echo "<p>Welcome back, " . $row['name'] . "!</p>";
            // echo "<p>Email: " . $row['email'] . "</p>";
            // echo "<p>Bio: " . $row['bio'] . "</p>";
            header('Location: '."singlePage.html");
        }
        else
        {   
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Invalid email or password. Please try again.")';  
            echo '</script>';  
            
            // echo "alert('Invalid email or password. Please try again.')";
            // echo "<h2>Login Failed!</h2>";
            // echo "<p>Invalid email or password. Please try again.</p>";

            header('Location: '."http://localhost/ADVANCED%20WEB%20TECHNOLOGY/Practical%205/singlePage.html#!/login");
        }
    }
    else
    {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
?>
