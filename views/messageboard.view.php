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
<?php 
    if($messages){
        foreach($messages as $row){ ?>
    <tr>
        
    <?php foreach($row as $key => $value){ 
        if($key != "m_id"){
            if($key != "u_id"){ ?>
                <td><?php echo str_replace("\n","<br>",$value) ?></td>
                <?php }
        }
    } 
    if($row["u_id"] == $_SESSION["u_id"]) {?>
        <td><form action="./edit.php" method="POST">
            <input type="hidden" name="u_id" value="<?php echo $_SESSION["u_id"]?>">
            <button>編輯</button>
        </form></td>
    </tr>
<?php }else{ ?>
        <td></td>
    </tr>
<?php } } 

    }else{ ?>
        <tr>
            <td colspan="4">"尚無留言!"</td>
        </tr>
    <?php }?>

 
</table>

<br>
<form action="./insertmessage.php" method="POST">
    <textarea name="message" rows="4" cols="24"></textarea>
    <button type="submit">送出</button>
    <button type="reset">清除</button>
</form>
<br>
<form action="logout.php" method="POST">
    <button type="submit" value="logout">登出</button>
</form>