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

            $renter_mail1=$_POST["renter_mail1"];

            $sql="INSERT INTO `textbook` (`b_title`,`b_author`,`b_publisher`,`b_pubdate`,`b_language`,`b_price`)
            VALUES('".$renter_cnt."','".$renter_psw."','".$renter_nme."','".$renter_pho."','".$renter_mail."','".$renter_mail1."')";
            if($sql_qry->exec($sql))
                header("Location: /db/insert_successful.html");  
  else  
 header("Location: /db/insert_successful.html"); 
        ?>
    </body>
</html>
