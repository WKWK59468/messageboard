<?php 
    require_once("./controllers/message.controller.php");
    $MessageController = new MessageController();
    $messages = $MessageController->getAllMessage();
?>

<table border="1">
<?php foreach($messages as $row){ ?>

    <tr>
    <?php foreach($row as $key => $value){ ?>
        <?php if($key != "m_id"){ ?>
            <td><?php echo $value ?></td>
        <?php } ?>
    <?php } ?>
    <td><form action="./updatemessage.php" method="POST">
        <input type="hidden" name="m_id" value="<?php echo $row["m_id"]?>">
        <button>修改</button>
        </form></td>

    <td><form action="./deletemessage.php" method="POST">
        <input type="hidden" name="m_id" value="<?php echo $row["m_id"]?>">
        <button>刪除</button>
        </form></td>
    </tr> 

<?php } ?>
    
</table>
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