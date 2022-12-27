<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>編輯</title>
</head>
<body>
    <?php 
        session_start();
        require_once("./controllers/message.controller.php");
        $MessageController = new MessageController();
        $messages = $MessageController->getAllMessage();
    ?>
    <form action="./updatemessage.php" method="POST">
    <table border="1">
        <tr>
            <th>訊息</th>
            <th>留言時間</th>
            <th>留言者</th>
            <th colspan="2">編輯</th>
        </tr>
    <?php 
        if($messages){
            foreach($messages as $row){ ?>
        <tr>
            
        <?php foreach($row as $key => $value){ 
            if($key != "m_id"){
                if($key != "u_id"){ 
                    if($key == "message" && $row["u_id"] == $_SESSION["u_id"]){?>
                    <td><textarea name="message" rows="4" cols="50%"><?php echo $value ?></textarea></td>
            <?php }else{ ?>
                    <td><?php echo str_replace("\n","<br>",$value) ?></td>
                    <?php }
                }
            }
        } 
        if($row["u_id"] == $_SESSION["u_id"]) {?>
        <td>
            <input type="hidden" name="m_id" value="<?php echo $row["m_id"]?>">
            <button>修改</button>
            </form></td>

        <td><form action="./deletemessage.php" method="POST">
            <input type="hidden" name="m_id" value="<?php echo $row["m_id"]?>">
            <button>刪除</button>
            </form></td>
            </tr>
    <?php }else{ ?>
        <td colspan="2"></td>
        </tr>
    <?php } } 

        }else{ ?>
            <tr>
                <td colspan="4">"尚無留言!"</td>
            </tr>
        <?php }?>

    
    </table>

    
    <br>
    <form action="./" method="POST">
        <button type="submit" value="back">返回</button>
    </form>
</body>
</html>