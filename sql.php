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

class AccountRepository extends SQLConnection{
    public function getAllAccounts(){
        $sql = "SELECT * FROM users";
        $results = mysqli_query($this->__dblink, $sql);
        $users = mysqli_fetch_all($results);
        return $users;
    }
}
?>