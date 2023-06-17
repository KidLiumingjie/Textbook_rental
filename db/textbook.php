<html>

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

$usrid = $_GET{"id"};





$select_db=@mysql_select_db("database");

    
     if(!$select_db)
     {
        echo '<br>找不到資料庫!<b>' ;

      }
    else{
      
       $sql_query="select*from textbook" ;
       $result=mysql_query($sql_query);
       $res=mysql_query($sql_query,$link);
        $rows=mysql_affected_rows($link);//獲取行數
        $colums=mysql_num_fields($res);//獲取列數

       if(mysql_num_rows($result)>=1)


       {echo'全部書庫';
        echo'<table border=1  width=50%>';
        echo'<td>書籍編號';
        echo'<td>書籍名稱';
        echo'<td>作者';
        echo'<td>原文出版社';
        echo'<td>出版日期';
        echo'<td>語言';
        echo'<td>定價';
        //b_no, b_title, b_author, b_publisher, b_pubdate, b_language, b_price
  
        
        echo "</tr>";
        while($row=mysql_fetch_row($res)){
            echo "<tr>";
            
             echo "<td>$row[0]</td>";
             echo "<td>$row[1]</td>";
             echo "<td>$row[2]</td>";
             echo "<td>$row[3]</td>";
             echo "<td>$row[4]</td>";
             echo "<td>$row[5]</td>";
             echo "<td>$row[6]</td>";

            echo "</tr>";
        }
        echo "</table>";
      


 }
   else{echo'你的申請紀錄不存在';}

       }


?>





</body>
</html>