<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("<script>window.location.href = 'login/login1.php';</script>'");
}


?>