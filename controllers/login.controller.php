<?php
    require_once("./models/sql.model.php");

    class LoginController {
        public function Login($acc,$pwd){

            $UsersRepository = new UsersRepository();
            $user = $UsersRepository->getUser($acc);

            if($user){
                if($pwd == $user["u_password"]){
                    $_SESSION["u_id"] = $user["u_id"];
                }else{
                    echo "<span style='color: red;'>帳號密碼錯誤!</span>";
                }
            }else{
                echo "<span style='color: red;'>帳號密碼錯誤!</span>";
            }        
        }

        public function Logout(){
            unset($_SESSION["u_id"]);
        }
    }
?>