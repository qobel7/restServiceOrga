<?php
    $user_name = $_GET["email"];
    $password = $_GET["password"];

    print_r('{"email":"'.$user_name.'","password":"'.$password.'","Response":"true"}');

?>