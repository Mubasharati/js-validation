<?php
include 'DbConnect.php';
function login($firstname, $lastname, $gender, $dob, $religion,$username, $password ){
$conn = connect();
    $stmt = $conn->prepare("SELECT * FROM USERS WHERE firstname = ?and lastname = ?and
    gender = ?and dob = ?and religion = ?and username = ?and password = ?"); 
$stmt->bind_param("ss",$firstname, $lastname, $gender, $dob, $religion,$username, $password);
$stmt->execute();
    $records = $stmt->get_result();
    return $records->num_rows === 1;
}
?> 