<?php
session_start();
$btnLogin = filter_input(INPUT_POST, 'btn-login', FILTER_SANITIZE_STRING);
if($btnLogin){
    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    if((! empty($login)) && (!empty($password))){
        echo password_hash($password, PASSWORD_DEFAULT);
        header("Location:index.php");
    }else{
        $_SESSION['msg'] = "Pagina não encontrada";
        header("Location:login.php");
    }
   
}else{
    $_SESSION['msg'] = "Pagina não encontrada";
    header("Location:login.php");
}
?>