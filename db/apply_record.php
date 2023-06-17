<!doctype html>
<html>
	<head>
		  <meta charset="utf-8">
		  <link rel="stylesheet" href="sample_style.css" type="text/css" />
	  	<title>高大露營烤肉區租借系統</title>
	</head>
  <body>
	
		<!-- 網頁最上方的標題 -->
		<header id="header">
			<p align="center">露營烤肉區租借系統</p>			
		</header>
		
		<!-- 網頁上方的工具列或訊息 -->
		<nav id="nav">
			
			&nbsp;
			<a href="/apply_user.html">租借申請</a>&nbsp;&nbsp;
			<a href="/pay_user.html">繳費紀錄</a>&nbsp;&nbsp;
			<a href="/record_user.html">申請紀錄</a>&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="/personal.html"><img src="person.png"  width="20px" height="20px"></a>&nbsp;&nbsp;
			<a href="/logout.php"><img src="logout.png"  width="25px" height="25px"></a>
			
		</nav>

		
		<!-- 網頁主要區塊 -->
		<section id="section">

    <?php

      include("sql_connect.inc.php");
      session_start();
      $user_cnt=$_SESSION['account'];
      $sql="SELECT * from `rent_application` where renter_account='".$user_cnt."'";
      $result = $sql_qry->query($sql);
      $row = $result->fetch(PDO::FETCH_NUM);

      if(!$row)
        echo'你的申請紀錄不存在';
        
      else{
        
        echo'你的紀錄';
        echo'<table border=1  width=50%>';
        echo'<td>你的帳號';  
        echo'<td>營位數量';  
        echo'<td>烤肉爐數量';  
    
        echo'<td>人數';  
        echo'<td>借用日期';  
        echo'<td>借用時間';  
        echo'<td>借用時段';  
        echo'<td>核准';  
        echo'<td>金額'; 
        echo "</tr>";
        foreach($rows as $rows){
              echo "<tr>";
              echo "<td>$row[8]</td>";
              echo "<td>$row[7]</td>";
              echo "<td>$row[6]</td>";
              echo "<td>$row[5]</td>";
              echo "<td>$row[2]</td>";
              echo "<td>$row[3]</td>";
              echo "<td>$row[4]</td>";
              echo "<td>$row[8]</td>";
              echo "<td>$row[9]</td>";
              echo "</tr>";
        }
          echo "</table>";
      }

    ?>
	</section>
		
		<!-- 網頁下方的工具列或訊息 -->
		<footer id="footer">
			<h1>
				© 2020 高雄大學 National University of Kaohsiung<br>
				81148 高雄市楠梓區高雄大學路700號<br>
				700, Kaohsiung University Rd., Nanzih District, Kaohsiung 811, Taiwan, R.O.C.<br>
				高大總機:886-7-5919000 傳真號碼:886-7-5919083<br>
				高大校園緊急聯絡電話:886-7-5917885 高大警衛室:886-7-5919009<br>
			</h1>
		</footer>
		
	</body>
</html>