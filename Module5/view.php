<?php

$servername = "127.0.0.1";
$username = "root";
$password = "suta7919";
$database = "petshop";

//Create Connection
$conn = new mysqli($servername, $username, $password, $database);
//Validate Connection
if($conn->connect_error) {
    die("Connection Invalid: ". $conn->connect_error);
} 

$sql = "SELECT cat_id, style_name FROM styles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["cat_id"]. " " . $row["style_name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn-> close(); 
?>