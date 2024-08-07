<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$patient_id = $_POST['patient_id'];
$doctor = $_POST['doctor'];
$date = $_POST['date'];
$time = $_POST['time'];

$sql = "INSERT INTO appointments (patient_id, doctor, date, time) VALUES ($patient_id, '$doctor', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment scheduled successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
