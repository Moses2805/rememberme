<?php

session_start();
if(isset($_POST['istifadeci_girisi'])){
    if($_POST['user'] == "musa" && $_POST['pass'] == '12345'){
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['pass'] = $_POST['pass'];

        if(isset($_POST['rememberme'])){

            setcookie('user', 'musa', strtotime('+1 day'));
            setcookie('pass', '12345', strtotime('+1 day'));

        }else{
            setcookie('user', 'musa', strtotime('-1 day'));
            setcookie('pass', '12345', strtotime('-1 day'));
        }
        header("Location:index.php?durum=true");
        exit;
    } else{
        header("Location:index.php?durum=false");
    }


}


?>