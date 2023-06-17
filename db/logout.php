<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>帳號登出</title>
    </head>
    <body>
        <?php
            
            include("sql_connect.inc.php");
            session_start(); 
           
            //將session清空
            unset($_SESSION['account']);
            unset($_SESSION['user_type']);
            
            echo '登出中......';
            echo '<meta http-equiv=REFRESH CONTENT=1;url=/db/home.html>';

        ?>
    </body>
</html>