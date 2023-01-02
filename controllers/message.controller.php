<?php
    require_once("./models/sql.model.php");
    class MessageController {
        public function getAllMessage(){
            $MessagesRepository = new MessagesRepository();
            $messages = $MessagesRepository->getAllMessages();
            
            return $messages;
        }

        public function getMessageByUser($u_id, $m_id){
            $MessagesRepository = new MessagesRepository();
            $messages = $MessagesRepository->getMessagesByUser($u_id, $m_id);
            
            return $messages;
        }

        public function insertMessage($u_id, $message){
            $MessagesRepository = new MessagesRepository();
            $res = $MessagesRepository->insertMessage($u_id, $message);
            
            return $res;
        }

        public function updateMessage($u_id, $m_id, $message){
            $MessagesRepository = new MessagesRepository();
            $res = $MessagesRepository->updateMessage($u_id, $m_id, $message);
            
            return $res;
        }

        public function deleteMessage($u_id, $m_id){
            $MessagesRepository = new MessagesRepository();
            $res = $MessagesRepository->deleteMessage($u_id, $m_id);
            
            return $res;
        }
    }
?>