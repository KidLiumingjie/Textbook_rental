<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf8'>
        <title>高雄大學場地租借系統</title>
    </head>
    <body>
        <?php
            include("sql_connect.inc.php");
            $apply_num=$_POST["apply_num"];
            $apply_peo=$_POST["apply_peo"];         
            $apply_dates=$_POST["apply_dates"];
            $apply_time=$_POST["apply_time"];
            $apply_ct=$_POST["apply_ct"];
            $apply_num2=$_POST["apply_num2"];
            $apply_peo2=$_POST["apply_peo2"];         
            $apply_dates2=$_POST["apply_dates2"];
            $apply_time2=$_POST["apply_time2"];
            $apply_ct2=$_POST["apply_ct2"];
            $sql="INSERT INTO `rent_application` (`camp_amount`,`people_amount`,`use_date`,`start_time`,`use_time`)
            VALUES('".$apply_num."','".$apply_peo."','".$apply_dates."','".$apply_time."','".$apply_ct."')";
            $sql="INSERT INTO `rent_application` (`BBQ_amount`,`people_amount`,`use_date`,`start_time`,`use_time`)
            VALUES('".$apply_num2."','".$apply_peo2."','".$apply_dates2."','".$apply_time2."','".$apply_ct2."')";
            if($sql_qry->exec($sql)){
                echo '租借申請中!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=/apply_undertaker.html>';
            }
            else{
                echo '租借失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=1;url=/apply_undertaker.html>';
            }
        ?>
    </body>
</html>
