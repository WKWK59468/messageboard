<?php
class SQLConnection{
    protected mysqli $__dblink;

    public function __construct()
    {
        $host = "220.132.162.109";
        $dbname = "messageboard";
        $dbuser = "Jrong";
        $dbpwd = "Jrong-0913";
        
        try{
            $this->__dblink = mysqli_connect($host,$dbuser,$dbpwd,$dbname);
        }catch(Exception $e){
            throw $e;
        }
    }
}

class UsersRepository extends SQLConnection{

    //取得所有使用者
    public function getUser($account){
        $sql = "SELECT * FROM users WHERE u_account = '$account'";
        $results = mysqli_query($this->__dblink, $sql);
        $users = mysqli_fetch_assoc($results);
        return $users;
    }

    public function addOneUser($name,$account,$password){
        $sql = "INSERT INTO users(name,account,password) value($name,$account,$password)";
        mysqli_query($this->__dblink, $sql);
        $affect_rows = mysqli_affected_rows($this->__dbLink);
        return $affect_rows==1;
    }
}

class MessagesRepository extends SQLConnection{

    //取得所有留言
    public function getAllMessages(){
        $sql = "SELECT messages.m_id, messages.message, messages.m_time, users.u_id, users.u_name FROM messages,users WHERE messages.u_id = users.u_id;";
        $results = mysqli_query($this->__dblink, $sql);
        $messages = mysqli_fetch_all($results, MYSQLI_ASSOC);
        return $messages;
    }

    //新增一筆留言
    public function insertMessage($u_id,$message){
        $sql = "INSERT INTO messages(u_id,message) value('$u_id','$message');";
        if(mysqli_query($this->__dblink, $sql)){
            return true;
        }else{
            return "Error: " && mysqli_error($this->__dblink);
        }
    }

    //修改一筆資料
    public function updateMessage($m_id,$message){
        $sql = "UPDATE messages SET message='$message' WHERE m_id='$m_id';";
        mysqli_query($this->__dblink, $sql);
        $affect_rows = mysqli_affected_rows($this->__dbLink);
        return $affect_rows==1;
    }

    //刪除一筆資料
    public function deleteMessage($m_id){
        $sql = "DELETE FROM messages WHERE m_id='$m_id';";
        mysqli_query($this->__dblink, $sql);
        $affect_rows = mysqli_affected_rows($this->__dbLink);
        return $affect_rows==1;
    }
}
?>