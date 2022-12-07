<?php


    $eventName = $_POST['eventName'];
    $eventDate = $_POST['eventDate'];
    $eventTime = $_POST['eventTime'];
    $eventLocation = $_POST['eventLocation'];
    $userEmails = $_POST['userEmails'];
    $eventComments = $_POST['eventComments'];


echo ($eventName);
echo ($eventDate);
echo ($eventTime);
echo ($eventLocation);
echo ($userEmails);
echo ($eventComments);
echo ($eventComments);


$host = "localhost";
$dbname = "events_db";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(mysqli_connect_errno()) {
    
    die("Could Not Submit Event, Try Again" . mysqli_connect_error());
}

$sql = "INSERT INTO events (eventName, eventDate, eventTime, eventLocation, userEmails, eventComments)
    VALUES (?,?,?,?,?,?)";


$stmt = mysqli_stmt_init($conn);


if ( ! mysqli_stmt_prepare($stmt,$sql)) {
    
    die(mysqli_error($conn));
    
}

mysqli_stmt_bind_param($stmt, "ssssss",
                      $eventName,
                      $eventDate,
                      $eventTime,
                      $eventLocation,
                      $userEmails,
                      $eventComments); 

mysqli_stmt_execute($stmt); 

echo "Event Has Been Posted";
echo ($eventName);
echo ($eventDate);
echo ($eventTime);
echo ($eventLocation);
echo ($userEmails);
echo ($eventComments);
echo ($eventComments);
?>