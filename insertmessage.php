<?php
    require_once("./controllers/message.controller.php");
    session_start();
    $acc = $_SESSION["acc"];
    $message =  $_POST["message"];

    $MessagesRepository = new MessagesRepository();
    $insertmessage = $MessagesRepository->insertMessage($acc,$message);
?>