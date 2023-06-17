<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf8'>
        <title>Sample Rent Web</title>
    </head>
    <body>
        <?php
            include("sql_connect.inc.php");
            $renter_cnt=$_POST["renter_cnt"];
            $renter_psw=$_POST["renter_psw"];
            $sql="SELECT * FROM `renter`
            WHERE `account`=". $renter_cnt ." AND `password`=".$renter_psw;
            $result = $sql_qry->query($sql);
            $row = $result ->fetch(PDO::FETCH_ASSOC);
            if(!$row)
                header("Location: /user.html");
        ?>
    </body>
</html>

