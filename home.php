<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <style>
        body{
            text-align:center;
            background-color:#FEEFC7;
        }
        .easy{
            border-radius: 50%;
            font-size:50px;
            padding: 50px;
            background-color: white;
            transition-duration: 0.4s;
            border:2px solid rgba(2, 155, 2, 0.863);
        }
        .easy:hover{
            background-color:rgba(2, 155, 2, 0.863);
            color:white;
        }
        .normal{
            border-radius: 50%;
            font-size:50px;
            padding:50px;
            background-color:white;
            transition-duration: 0.4s;
            border:2px solid rgba(226, 152, 14, 0.747);
        }
        .normal:hover{
            background-color:rgba(226, 152, 14, 0.747);
            color:white;
        }
        .hard{
            border-radius: 50%;
            font-size:50px;
            padding:50px;
            background-color:white;
            transition-duration: 0.4s;
            border:2px solid rgba(255, 0, 0, 0.651);
        }
        .hard:hover{
            background-color:rgba(255, 0, 0, 0.651);
            color:white;
        }
    </style>
    <body>
        <div class="col-sm-12" style="text-align:right;height: 25%;width: 100%;margin:0 auto; ">
            <br>
            <?php session_start(); ?>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            
            
            <?php
            include("mysql_connect.inc.php");
            
            if($_SESSION['username'] != null)
            {
              $sql = "SELECT * FROM `member_table` where username='$_SESSION[username]'";
              $result = mysqli_query($link, $sql);
               
              while($row = mysqli_fetch_row($result))
              {
                      
                       echo "$row[0] , 您好<br> <br/>"
                       ;
              
            }
                
            }
            else
            {
                    echo '無權限';
                    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
            }
            ?>

            <select onChange="location = this.options[this.selectedIndex].value;">
            <option value="#">請選擇</option>
            <option value="member.php">個人資料</option>
           <option value="">歷史作答紀錄</option>
            
            
            </select>



            <?php
            echo '<br><a href="logout.php">登出</a>';
            
            ?>
            </div>
        <h1 style="padding-top:200px"><b>請選擇難易度....</b></h1>
        <div style="padding-top:100px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="easy.html"><button class="easy">簡單</button></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="normal.html"><button class="normal">普通</button></a>
                    </div>
                    <div class="col-sm-4">
                        <a href="hard.html"><button class="hard">困難</button></a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>