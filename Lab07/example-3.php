<?php
$username = 'khanhvg';
$password = '124';
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    if ($_SERVER['PHP_AUTH_USER']=== $username &&  $_SERVER['PHP_AUTH_PW']=== $password){
        echo "You are logged in";
    }
    else{
        die("Invalid username/password combination");
    }
}
else{
    header('www-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    die("Please enter your username and password");
}