<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $fname = $_POST['fname'];
    if(empty($fname))
        echo "<h1 'style=color:red'>your input is invalid.</h1>";
    else
       echo "<h1 style='color:green'>your input is valid. and your input was : " . $fname . "</h1>"; 
}
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $lname = $_POST['lname'];
    if(empty($lname))
        echo "<h1 'style=color:red'>your input is invalid.</h1>";
    else
       echo "<h1 style='color:green'>your input is valid. and your input was : " . $lname . "</h1>"; 
}
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $gender = $_POST['gender'];
    if(empty($gender))
        echo "<h1 'style=color:red'>your input is invalid.</h1>";
    else
       echo "<h1 style='color:green'>your input is valid. and your input was : " . $gender . "</h1>"; 
}
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $dob = $_POST['dob'];
    if(empty($dob))
        echo "<h1 'style=color:red'>your input is invalid.</h1>";
    else
       echo "<h1 style='color:green'>your input is valid. and your input was : " . $dob . "</h1>"; 
}
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $password = $_POST['password'];
    if(empty($password))
        echo "<h1 'style=color:red'>your input is invalid.</h1>";
    else
       echo "<h1 style='color:green'>your input is valid. and your input was : " . $password . "</h1>"; 
}
?>