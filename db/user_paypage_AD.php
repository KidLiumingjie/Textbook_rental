﻿<html>

<head>
<title>教科書租借系統</title>
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






$select_db=@mysql_select_db("database");

    
     if(!$select_db)
     {
        echo '<br>找不到資料庫!<b>' ;

      }
    else{
      
       $sql_query="select*from rent_application ";
       $result=mysql_query($sql_query);
       $res=mysql_query($sql_query,$link);
        $rows=mysql_affected_rows($link);//獲取行數
        $colums=mysql_num_fields($res);//獲取列數

       if(mysql_num_rows($result)>=1)


       {echo'全部紀錄';
        echo'<table border=1  width=50%>';
        echo'<td>帳號';  
  
        echo'<td>金額';  
  
        echo'<td>繳費與否'; 
       
         
        echo "</tr>";
        while($row=mysql_fetch_row($res)){
            echo "<tr>";
            
             echo "<td>$row[7]</td>";

             echo "<td>$row[6]</td>";
             echo "<td>$row[5]</td>";
        echo "</tr>";
        }
        echo "</table>";


 }
   else{echo'你的申請紀錄不存在';}

       }


?>





</body>
</html>