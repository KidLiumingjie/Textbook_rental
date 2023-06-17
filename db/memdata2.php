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
$filename=$_GET{"id"};

echo '帳號:'.$filename.'<br>';

$select_db=@mysql_select_db("database");
  if(!$select_db)
  {
   echo'<br>找不到資料!<br>';
  
  }
else
 {
  
  $sql_query="select*from user where account='".$filename."'";
  $result=mysql_query($sql_query);
}
   if(mysql_num_rows($result)==1)
   {
 
?>
<p>會員修改<hr>

<form method="get" action="memdata3.php">
<center><table border=0 width=40%>

<?php

   while($row=mysql_fetch_array($result))
   {
?>
<tr bgcolor=#D396FF>
<td align="right"width=25%>會員帳號:</td>
<td align="left"><input type=text maxLength="10" size="10" name="usrid"value=<?echo $row[0]?>>(中英文皆可)</td>

<tr bgcolor=white >
<td align="right">密碼:</td>
<td align="left"><input type=text maxLength="10" size="10" name="passwd"value=<?echo $row[1]?>></td>

<tr bgcolor=#FFABFF>
<td align="right">Name:</td>
<td align="left"><input type=text maxLength="10" size="20" name="Name"value=<?echo $row[2]?>></td>



<tr bgcolor=#D396FF>
<td align="right">Phone:</td>
<td align="left">
<input type=text size="20" name="phone"value=<?echo $row[3]?>></td>



<tr bgcolor = pink>
<td align = "right" width = 20%>Email:</td>
<td align = "left"> <input type=text name=Email value=<?echo $row[4]?>></td>
<input type=hidden name=oid value=<?echo$row[0]?>>

<?php

    }
?>


</table>
<tr><td><input type="submit"value="送出">
    <td><input type="reset"value="重新設定"></p>
</form>
<?php

   }
else
  echo"Not Found!";
?>
</body>
</html>