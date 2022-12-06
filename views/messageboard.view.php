<?php 
    require_once("./controllers/message.controller.php");
    
?>
<table border="1">
    <tr>
        <th>132</th>
        <td>123</td>
    </tr>
</table>
<br>

<form action="" method="POST">
    <textarea name="message" rows="8" cols="30"></textarea>
    <button type="submit">送出</button>
    <button type="reset">清除</button>
</form>
<br>
<form action="logout.php" method="POST">
    <button type="submit" value="logout">登出</button>
</form>