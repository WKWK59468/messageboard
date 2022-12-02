<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
</head>
<body>
    <?php 
        session_start();
        if(isset($_SESSION["isLogin"])){
            if($_SESSION["isLogin"]) {require_once("./messageboard.php");}
        }else{
            $_SESSION["isLogin"]=false;
        }        
    ?>
    <form action="./login.php" method="POST">
        <label for="acc">帳號</label>
        <input id="acc" type="text" name="acc"><br>
        <label for="pwd">密碼</label>
        <input id="pwd" type="password" name="pwd"><br>
        <button type="submit">送出</button>
        <button type="reset">清除</button>
    </form>
</body>
</html>