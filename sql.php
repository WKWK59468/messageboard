<?php

    $host = "220.132.162.109";
    $port = "3306";
    $dbname = "messageboard";
    $dbuser = "jrong";
    $dbpwd = "jrong0913";
    $sql = mysqli_connect($host,$dbuser,$dbpwd,$dbname);
    if($sql){
        mysqli_query($sql,'SET NAMES uff8');
            // echo "正確連接資料庫";
    }
    else {
        echo "不正確連接資料庫</br>" . mysqli_connect_error();
    }
?>