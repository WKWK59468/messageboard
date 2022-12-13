<?php
    require_once("./controllers/message.controller.php");
    session_start();
    $u_id = $_SESSION["u_id"];
    $m_id =  $_POST["m_id"];
    $MessagesController = new MessageController();
    $deletemessage = $MessagesController->deleteMessage($u_id, $m_id);
    header('Location: http://localhost/messageboard/');
?>