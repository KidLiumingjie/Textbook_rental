<meta charset="utf-8">
<?php
    $db_server = 'localhost'; //伺服器(不用改)
    $db_name = 'database'; //資料庫(存放table的資料庫名稱)
    $db_user = 'root'; //使用者
    $db_passwd = '12345678'; //密碼
    $sql = "mysql:host=$db_server;dbname=$db_name";
    try {
        $sql_qry = new PDO($sql, $db_user, $db_passwd);
    } catch (PDOException $e) {
        die ("資料庫連線失敗");
    }
?>
