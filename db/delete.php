<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf8'>
        <title>高雄大學場地租借系統</title>
    </head>
    <body>
        <?php
            include("sql_connect.inc.php");
            $renter_psw="password";
            $sql="DELETE FROM `renter`
            WHERE `password`=".$renter_psw;
            if($sql_qry->exec($sql))
                echo '刪除成功!';
            else
                echo '刪除失敗!';
        ?>
    </body>
</html>
