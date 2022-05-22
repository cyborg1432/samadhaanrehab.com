<?php

//variables
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];


//database connectivity
$conn = new mysqli('localhost', 'root', '960ed4e74dcb54cd6363ff4b9bc8206fde0a280e96106803', 'rehab');
if ($conn->connect_error){
        die("Connection Failed : " . $conn->connect_error . "<br>");
}
//echo "Connected Sucessfully";

//entering data into database

$sql = "INSERT INTO applynow (firstname,lastname,phoneno,email) VALUES ('$firstname','$lastname','$phoneno','$email');";

if ($conn->query($sql) === TRUE){
//        echo "Success";
header('Location: http://samadhaanrehab.com/?value=sent');
}else{
//        echo "Error : " .$sql. "<br>" .$conn->error;
}
?>
