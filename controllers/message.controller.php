<?php
    require_once("./models/sql.model.php");
    class MessageController {
        public function getAllMessage(){
            $MessagesRepository = new MessagesRepository();
            $messages = $MessagesRepository->getAllMessages();
            
            return $messages;
        }

        public function insertMessage($acc,$message){
            $MessagesRepository = new MessagesRepository();
            $messages = $MessagesRepository->insertMessage($acc,$message);
            
            return $messages;
        }

        public function updateMessage($u_id,$message){
            $MessagesRepository = new MessagesRepository();
            $messages = $MessagesRepository->updateMessage($u_id,$message);
            
            return $messages;
        }

        public function deleteMessage($u_id){
            $MessagesRepository = new MessagesRepository();
            $messages = $MessagesRepository->deleteMessage($u_id);
            
            return $messages;
        }
    }
?>