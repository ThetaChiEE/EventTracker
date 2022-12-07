<?php
$servername = "3.86.80.174";
$username = "thetachi";
$password = "Redcar1234!";
$dbname = "sakila";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];
    $eventTime = $_POST['eventTime'];
    $eventLocation = $_POST['eventLocation'];
    $userEmails = $_POST['userEmails'];
    $eventComments = $_POST['eventComments'];


$query = "INSERT INTO ThetaChi
VALUES ('$eventName', '$eventDate', '$eventTime', '$eventLocation', '$userEmails', '$eventComments')";
mysqli_query($conn, $query);


//This code works in getting the current information from phpmyadmin
$sql = "SELECT eventName, eventDate, eventTime, eventLocation, userEmails, eventComments FROM ThetaChi";

$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
        echo "<table><tr><th>An Assisting Hand</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "Event Name: " . $row["eventName"]. "<br>". "Event Date: " . $row["eventDate"].  "<br>" . "Event Time: " . $row["eventTime"]. "<br>". "Event Location: " . $row["eventLocation"]. "<br>". "User Emails: " . "<br>". $row["userEmails"]. "<br>". "Other Comments and Details: " . $row["eventComments"]. "<br><br><br>";
    }
    echo "</table>";
}
$conn->close();
?>