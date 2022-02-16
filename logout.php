<?php
    session_start();
    unset($_SESSION['id_user']);
    unset($_SESSION['nama_user']);
    $_SESSION['status_login']=false;
    session_destroy();
    header("location:login.php");
?>