<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-size:22px;
            text-align:center;
            background-color:#FEEFC7;
            padding-top: 250px;
    }
    </style>
</head> 
        <?php session_start(); ?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php
        include("mysql_connect.inc.php");

        if($_SESSION['username'] != null)
        {
                //將$_SESSION['username']丟給$id
                //這樣在下SQL語法時才可以給搜尋的值
                $id = $_SESSION['username'];
                //若以下$id直接用$_SESSION['username']將無法使用
                $sql = "SELECT * FROM member_table WHERE username='$id'";
                $result = mysqli_query($link,$sql);
                $row = mysqli_fetch_row($result);
        
                echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
                echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[0]\" />(此項目無法修改) <br><br>";
                echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[1]\" /> <br><br>";
                echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[1]\" /> <br><br>";
                echo "Email：<input type=\"text\" name=\"email\" value=\"$row[3]\" /> <br><br>";
                echo '<button class="btn btn-success" type="submit" >確認</button>';
                echo "</form>";
        }
        else
        {
                echo '您無權限觀看此頁面!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        ?>