<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>帳號登入</title>
    </head>
    <body>
        <?php
            
            include("sql_connect.inc.php");
            $user_cnt=@$_POST["login_cnt"];
            $user_psw=@$_POST["login_psw"];
            $sql="SELECT * FROM `user` 
            WHERE `account`='".$user_cnt."' AND `password`='".$user_psw."'";

            $result = $sql_qry->query($sql);
            $row = $result->fetch(PDO::FETCH_NUM);
            $user_type= $row[5];

            if(!$row)
                header("Location: /db/login_error.html");
            else{
                session_start();
                $_SESSION['account']=$user_cnt;
                $_SESSION['user_type']=$user_type;
                if($_SESSION['user_type'] == 1)//一般使用者
                    header("Location: /db/login_user.html");
                else if($_SESSION['user_type'] == 2)//承辦人員
                    header("Location: /db/login_undertaker.html");
                else if($_SESSION['user_type'] == 0)
                    header("Location: /db/login_user.html");
                else if($_SESSION['user_type'] == 3)//管理員
                    header("Location: /db/login_administrator.html");
            }
                  
            
        ?>
    </body>
</html>