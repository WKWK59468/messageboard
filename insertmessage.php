<?php
    require_once("./controllers/message.controller.php");
    session_start();
    $u_id = $_SESSION["u_id"];
    $message =  $_POST["message"];
    $MessagesController = new MessageController();
    $insertmessage = $MessagesController->insertMessage($u_id,$message);
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/messageboard/");
?>