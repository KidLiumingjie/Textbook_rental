<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf8'>
        <title>教科書租借系統</title>
    </head>
    <body>
        <?php 
            include("sql_connect.inc.php");
            $renter_cnt=$_POST["renter_cnt"];
            $renter_psw=$_POST["renter_psw"];
            $renter_nme=$_POST["renter_nme"];
            $renter_pho=$_POST["renter_pho"];
            $renter_mail=$_POST["renter_mail"];
$register_typ=1;//一般使用者
            $sql="INSERT INTO `user` (`account`,`password`,`name`,`phone`,`email`,`usertype`)
            VALUES('".$renter_cnt."','".$renter_psw."','".$renter_nme."','".$renter_pho."','".$renter_mail."','".$register_typ."')";
            if($sql_qry->exec($sql))
                header("Location: /db/register_successful.html");    
               
            else
                header("Location: /db/register_error.html"); 
        ?>
    </body>
</html>
