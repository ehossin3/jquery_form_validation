<?php

    if(isset($_POST['username'])) {

        $username       = $_POST['username'];
        $user_email     = $_POST['user_email'];
        $phone          = $_POST['phone'];
        $confirm_pass   = $_POST['confirm_pass'];

        echo "$username $user_email $phone $confirm_pass";
    }
    else {
        $errmsg = "Please Registration first";
        header("location: singup.php?err=$errmsg");
        exit;
    }




?>