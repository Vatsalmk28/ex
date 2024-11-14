<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "ayush";


try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
}catch(PDOException $e)
{
    echo "Connection Failed: ".$e->getMessage();
}

if (isset($_POST['name']) && $_POST['name'] != '' && isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['phone']) && $_POST['phone'] != '') {
    $sql = "INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':phone', $_POST['phone']);
   
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->errorInfo()[2];
    }
}
?>