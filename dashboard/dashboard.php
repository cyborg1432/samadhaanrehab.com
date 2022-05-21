<?php 
    

$token = $_GET['token'];

$r_token = "qwertyuiop";

if ($r_token === $token){
$html_content = file_get_contents("dashboard.html");
echo $html_content;
    
}else{
    header('Location: http://samadhaanrehab.com/403.html');
}


?>

