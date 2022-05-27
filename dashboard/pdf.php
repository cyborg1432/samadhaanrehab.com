<?php


$heading = $_POST['heading'];
$base64 = $_POST['base64File'];



$conn = new mysqli('localhost','root','960ed4e74dcb54cd6363ff4b9bc8206fde0a280e96106803','rehab');

$sql = "INSERT INTO pdffile (heading,base64) VALUES ('$heading', '$base64'); ";

if ($conn->query($sql) === TRUE){
	header('Location: http://samadhaanrehab.com/dashboard/create-post.html?value=sent');
}else{
        header('Location: http://samadhaanrehab.com/dashboard/create-post.html?value=notsent');

}


?>
