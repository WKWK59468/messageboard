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
        $sql = "SELECT * FROM messages";
        $results = mysqli_query($this->__dblink, $sql);
        $messages = mysqli_fetch_assoc($results);
        return $messages;
    }

    //新增一筆留言
    public function addOneMessage($u_id,$message){
        $sql = "INSERT INTO messages(message,u_id) value($message,$u_id)";
        mysqli_query($this->__dblink, $sql);
        $affect_rows = mysqli_affected_rows($this->__dbLink);
        return $affect_rows==1;
    }
}
?>