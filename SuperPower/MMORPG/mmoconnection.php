<?php
	
$servername = 'localhost'; 
$username = 'Achilles';  
$password = 'lubieplacki33';
$dbname = 'MMORPG';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo(json_encode(array('status'=>"Connection failed: " . $conn->connect_error)));
	die;
} 



?>
