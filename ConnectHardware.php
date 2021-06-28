<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "arm control");
                                  
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = $conn->query("SELECT * FROM `tablemotors` WHERE 1"); 

// Loop
While($row = $result->fetch_assoc()){

                echo "Motor1 : ".$row['Motor1']."<br>";
                echo "Motor2 : ".$row['Motor2']."<br>";
                echo "Motor3 : ".$row['Motor3']."<br>";
                echo "Motor4 : ".$row['Motor4']."<br>";
                echo "Motor5 : ".$row['Motor5']."<br>";
                echo "Motor6 : ".$row['Motor6']."<br>";
}

?>