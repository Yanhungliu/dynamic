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
                 echo " 名字(帳號)：$row[0]</br> " . 
                 "密碼：$row[1] </br>email:$row[3]</br>";
        }
        echo '<a href="update.php">修改</a>    ';
        echo '<a href="delete.php">刪除</a>  <br><br>';
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
echo '<a href="home.php">返回上一頁</a>  ';
echo '<a href="logout.php">登出</a>  <br><br>';
?>