<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arm control";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tablemotors(Motor1, Motor2, Motor3, Motor4, Motor5, Motor6)
VALUES ('$_POST[Motor1]', '$_POST[Motor2]' , '$_POST[Motor3]', '$_POST[Motor4]' , '$_POST[Motor5]', '$_POST[Motor6]')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

