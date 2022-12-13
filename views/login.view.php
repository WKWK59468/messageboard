<?php
    require_once("./controllers/login.controller.php");

    function check_acc_isset(){
        return isset($_POST["acc"]) && isset($_POST["pwd"]);
    }

    $Login = new LoginController();
    
    if(check_acc_isset()){
        $acc = $_POST["acc"];
        $pwd = $_POST["pwd"];
        $Login->Login($acc,$pwd);
    }else{
        echo "<span style='color: red;'>請輸入帳號密碼!</span>";
    }
    
    if(isset($_SESSION["u_id"])){
        header("Location: http://" . $_SERVER['HTTP_HOST'] . "/messageboard/");
    }
?>

<form action="" method="POST">
    <label for="acc">帳號</label>
    <input id="acc" type="text" name="acc"><br>
    <label for="pwd">密碼</label>
    <input id="pwd" type="password" name="pwd"><br><br>
    <button type="submit">送出</button>
    <button type="reset">清除</button>
</form>