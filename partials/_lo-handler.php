<?php 
    echo "Please wait..";
    session_start();
    session_destroy();
    header("location: /?alert=You have been logged out");
    exit();
?>