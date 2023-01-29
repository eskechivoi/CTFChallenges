<?php
$method = $_POST['method'];
if ($method == 'valCookie'){
    valCookie();
}

function initCookie(){
    $cookie_name = "guest";
    $cookie_value = "Z3Vlc3Q=";
    if(!isset($_COOKIE[$cookie_name])) {
        setcookie($cookie_name, $cookie_value, time() + (86400), "/");
    }
}

function valCookie(){
    if(session_status() == PHP_SESSION_NONE){ 
        session_start();
    }
    $cookie_name = "admin";
    $cookie_value = "YWRtaW4=";
    if($_COOKIE[$cookie_name] == $cookie_value){
        $_SESSION['sess_username'] = 'admin';
        echo "true";
    } else {
        echo "false";
    }
}
?>