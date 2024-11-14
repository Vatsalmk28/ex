<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Content-Type: application/json");

// Database connection details
$host = "localhost";
$user = "root";
$password = "";
$dbname = "ayush";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn -> connect_error)
{
    die("Connection failed: " . $conn -> connect_error);
}

// Query to fetch data from the contacts table
$sql = "SELECT name, email, phone FROM contacts";
$result = $conn -> query($sql);

$contacts = array();

if($result->num_rows > 0)
{
    while($row = $result-> fetch_assoc())
    {
        $contacts[] = $row;
    }
}

// Close the connection
$conn -> close();

// Output the data in JSON format
echo json_encode($contacts);
?>