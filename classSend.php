<?php
// Connect to MySQL
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'testes';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
} 

$date = $_POST['date'];
$dia = $_POST['dia'];
$cho = $_POST['cho'];

$sql = "INSERT into my_chart_data(category,value1,value2)VALUES('$date','$dia','$cho')";

if ($db->query($sql) === TRUE) {
    echo'<script>';
    echo"alert('SUCCESS | Data Added'); window.location.href='index.php' ";
    echo'</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$db->close();
?>