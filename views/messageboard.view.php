<?php 
    require_once("./controllers/message.controller.php");
    $MessageController = new MessageController();
    $messages = $MessageController->getAllMessage();
?>

<table border="1">
    <tr>
        <th>訊息</th>
        <th>留言時間</th>
        <th>留言者</th>
        <th colspan="2">編輯</th>
    </tr>
<?php foreach($messages as $row){ ?>
    <tr>
        
    <?php foreach($row as $key => $value){ 
         if($key != "m_id"){
            if($key != "u_id"){ 
                if($key == "message" && $row["u_id"] == $_SESSION["u_id"]){?>
                <form action="./updatemessage.php" method="POST">
                <td><textarea name="message" rows="3"><?php echo $value ?></textarea></td>
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
<?php } 
} ?>

 
</table>

<table>
<br>
<form action="./insertmessage.php" method="POST">
    <textarea name="message" rows="5" cols="24"></textarea>
    <button type="submit">送出</button>
    <button type="reset">清除</button>
</form>
<br>
<form action="logout.php" method="POST">
    <button type="submit" value="logout">登出</button>
</form>