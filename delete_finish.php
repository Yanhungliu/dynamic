<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");


if($_SESSION['username'] != null)
{
        
        $sql = "delete from member_table where username='$_SESSION[username]'";
        if(mysqli_query($link,$sql))
        {
                echo '<script type="text/javascript">alert("刪除成功！");</script>';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        else
        {
                echo '<script type="text/javascript">alert("刪除失敗！");</script>';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=delete.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>