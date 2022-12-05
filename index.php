<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>留言板</title>
</head>
<body>
    <?php 
        session_start();
        if(isset($_SESSION["isLogin"])){
            if($_SESSION["isLogin"]) {
                require_once("./views/messageboard.php");
            }else{
                require_once("./views/login.php");  
            }
        }else{
            $_SESSION["isLogin"]=false; 
        }
    ?>
</body>
</html>