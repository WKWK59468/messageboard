<?php
    require_once("./controllers/message.controller.php");
    session_start();
    $u_id = $_SESSION["u_id"];
    $m_id =  $_POST["m_id"];
    $message = $_POST["message"];
    $MessagesController = new MessageController();
    $updatemessage = $MessagesController->updateMessage($u_id, $m_id, $message);
    header("Location: http://" . $_SERVER['HTTP_HOST'] . "/messageboard/");
?>