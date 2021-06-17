       <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <style>
                        body{
                                font-size:22px;
                                background-color:#FEEFC7;
                                text-align:center;
                                padding-top: 200px;
                        }
                </style>
        </head>
        <body>  
        <?php session_start(); ?>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <?php
                include("mysql_connect.inc.php");

                $id =$_SESSION['username'];
                //此判斷為判定觀看此頁有沒有權限
                //說不定是路人或不相關的使用者
                //因此要給予排除
                if($_SESSION['username'] != null)
                {
                        
                        
                
                        //將資料庫裡的所有會員資料顯示在畫面上
                        $sql = "SELECT * FROM member_table WHERE username='$id' ";
                        $result = mysqli_query($link,$sql);
                        while($row = mysqli_fetch_row($result))
                        {
                                echo "名字(帳號)：$row[0]</br>" . 
                                "密碼：$row[1] </br>email:$row[3]</br>";
                        }
                        echo "<br>";
                        echo '<a href="update.php"><button class="btn btn-info">修改</button></a>   ';
                        echo '<a href="delete.php"><button class="btn btn-danger">刪除</button></a>  <br><br>';
                }
                else
                {
                        echo '您無權限觀看此頁面!';
                        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
                }
                echo '<a href="home.php"><button class="btn btn-warning">返回大廳</button></a> ';
                ?>
        </body>