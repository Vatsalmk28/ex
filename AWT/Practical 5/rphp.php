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



   


if (isset($_POST['name']) && $_POST['name'] != '' && isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['bio']) && $_POST['bio'] != '' && isset($_POST['password']) && $_POST['password'] != '') {
    $sql = "INSERT INTO userdata (name, email, bio, password) VALUES (:name, :email, :bio, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':bio', $_POST['bio']);
    $stmt->bindParam(':password', $_POST['password']);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $bio = $_POST['bio'];

    // echo "<h2>Registration Successful!</h2>";
    // echo "<p>Name: " . htmlspecialchars($name) . "</p>";
    // echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    // echo "<p>Bio: " . nl2br(htmlspecialchars($bio)) . "</p>";
       
    if ($stmt->execute()) {
        // echo "New record created successfully";

        header('Location: '."http://localhost/ADVANCED%20WEB%20TECHNOLOGY/Practical%205/singlePage.html#!/login");
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
    }

?>
