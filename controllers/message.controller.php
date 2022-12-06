<?php
    require_once("./models/sql.model.php");
    class MessageController {
        public function getAllMessage(){
            $MessagesRepository = new MessagesRepository();
            $messages = $MessagesRepository->getAllMessages();
            
            return $messages;
        }
    }
?>