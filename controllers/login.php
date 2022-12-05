<?php
session_start();

$acc = $_POST["acc"];
$pwd = $_POST["pwd"];

require_once("../models/sql.php");
$UsersRepository = new UsersRepository();
$user = $UsersRepository->getUser($acc);

if($pwd == $user["u_password"] && $acc != "" && $pwd != ""){
    $_SESSION["isLogin"] = true;
}else{
    $_SESSION["isLogin"] = false;
}

header("Location: http://localhost/messageboard");
die();
?>