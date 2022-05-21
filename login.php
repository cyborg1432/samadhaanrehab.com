<?php 
    
$uname = $_POST['password'];

$passwd = $_POST['username'];


$r_uname = "admin";
$r_passwd = "rehab";


if ($uname === $r_uname){
    if ($passwd === $r_passwd){
        
        header('Location: http://samadhaanrehab.com/dashboard/dashboard.php?token=qwertyuiop');
        
        echo "Login Successfully";
    }else{
        header('Location: http://samadhaanrehab.com/login.html?value=false');

    }
}else{
    header('Location: http://samadhaanrehab.com/login.html?value=false');

}




?>