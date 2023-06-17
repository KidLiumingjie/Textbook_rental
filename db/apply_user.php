<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf8'>
        <title教科書租借系統</title>
    </head>
<?php


    $location = "localhost";
    $account = "root";
    $password = "12345678";
    
    if(isset($location)&&isset($account)&&isset($password))
    {
      $link = mysql_pconnect($location,$account,$password);

      if(!link)
      {
        echo'無法連接資料庫';
        exit();

      }
}
?>
    <body>
        <?php
            include("sql_connect.inc.php");
            $apply_acc=$_POST["apply_acc"];
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
$paypay=600;

     $sqll="INSERT INTO `rent_application` (`b_id`,`use_date`,`start_time`,`use_time`,`renter_account`,`officer_account`,`pay`)
            VALUES('".$apply_num."','".$apply_dates."','".$apply_time."','".$apply_ct."','".$apply_acc."','".$apply_acc."','".$paypay."')";
 
 

 
            if($sql_qry->exec($sqll)){
                echo '租借申請中!';
echo '<meta http-equiv=REFRESH CONTENT=1;url=/db/apply_user.html>';
            } else{
                echo '租借失敗!';
 echo '<meta http-equiv=REFRESH CONTENT=1;url=/db/apply_user.html>';
       }
 ?>
    </body>
</html>
