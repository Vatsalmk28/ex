<?php
$host = "localhost";
$username = "root";
$password = null;
$database = "phptest";

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection successful";
echo "<br/>";

// Fetching data from the 'contacts' table
$exam_result = $conn->query("SELECT * FROM contacts");
if ($exam_result->num_rows > 0) {
    while ($row = $exam_result->fetch_assoc()) {
        echo "Name: " . $row["name"] . " -Email: " . $row["email"] . " - Phone: " . $row["phone"] . "<br/>";
    }
} else {
    echo "No records found in the contacts table";
}

echo "<br/>";

// Fetching table names
$tables_result = $conn->query("SHOW TABLES");
if ($tables_result->num_rows > 0) {
    echo "Tables in the database:<br/>";
    while ($row = $tables_result->fetch_array()) {
        echo $row[0] . "<br/>";
    }
} else {
    echo "No tables found in the database";
}

// Close the connection
$conn->close();
?>