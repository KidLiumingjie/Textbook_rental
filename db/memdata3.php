<html>

<head>
<title>會員修改</title>
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
$usrid=$_GET{"usrid"};
$passwd=$_GET{"passwd"};
$Email = $_GET["Email"];
$phone = $_GET["phone"];
$Name = $_GET["Name"];
$oid = $_GET["oid"];

echo 'id:'.$usrid.'<br>';
echo 'passwd:'.$passwd.'<br>';
echo 'Name:'.$Name.'<br>';
echo 'Phone:'.$phone.'<br>';
echo 'EMail:'.$Email.'<br>';
echo '舊的帳號:'.$oid.'<br>';
$select_db=@mysql_select_db("database");
  if(!$select_db)
  {
   echo'<br>找不到資料!<br>';
  
  }
else
 {
  echo'<br>找到資料庫!<br>';
  $del="delete from user where account ='".$oid."'";
mysql_query($del);
 $ins="INSERT  INTO `user` (`account`,`password`,`name`,`phone`,`email`) VALUES('".$usrid."','".$passwd."','".$Name."','".$phone."','".$Email."')";
   mysql_query($ins);
 
 echo '<meta http-equiv=REFRESH CONTENT=1;url=/db/login_administrator.html>';
}
?>
   
</body>
</html>