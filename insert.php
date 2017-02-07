<?php

$servername = "localhost";
$username = "excelarf";
$password = "**T0y*6z8e0c";
$dbname = "excelarf_ritika";


  $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
     }
     
     else{		
			$name=$_POST["name"];
			$email=$_POST["email"]; 
			$message=$_POST["message"]; 
			$dob=$_POST["dob"]; 
			
			
$sql = "INSERT INTO MyGuests(Name, Email, Message, Dates) VALUES ($name,$email,$message,$dob)";
die("riti");
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} 
}
mysqli_close($conn);

?>


