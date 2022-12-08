<?php
    session_start();
    unset($_SESSION["u_id"]);
    header('Location: http://localhost/messageboard/');
?>