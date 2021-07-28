<?php
include 'dbconnect.php';
function register( $firstname, $lastname, $gender, $dob, $religion,$username, $password  ){
$conn = connect();
$stmt = $conn->prepare("INSERT INTO USERS(username,password) VALUES (?,?)");
$stmt->bind_param("ss",$firstname, $lastname, $gender, $dob, $religion,$username, $password  );
return $stmt->execute();
}
?> 