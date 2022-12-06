<?php
    session_start();
    unset($_SESSION["acc"]);
    header('Location: http://localhost/messageboard/');
?>