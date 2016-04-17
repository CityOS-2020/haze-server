<?php
header("Content-type: application/json");

$servername = "localhost:3306";
$username = "root";
$password = "Krastavac56";
$dbname = "server";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT eventName, cityName, latitude, longitude, category FROM events";

$result = $conn->query($sql);

$data = array();
$i =0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
        echo $row[0];
    }

    echo json_encode($data);
} else {
    echo "0 results";
}
$conn->close();
?>