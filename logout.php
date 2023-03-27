<?php
    session_start();
    unset($_SESSION["u_id"]);
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/messageboard_exam/");
?>