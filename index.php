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

        function check_isLogin(){
            return isset($_SESSION["u_id"]);
        }
        
        if(check_isLogin()){
            require_once("./views/messageboard.view.php");
        }else{
            require_once("./views/login.view.php");  
        }
        
    ?>
</body>
</html>