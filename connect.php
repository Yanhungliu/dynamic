<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];



$sql = "SELECT * FROM member_table where username = '$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);


if($id != null && $pw != null&& $row[0] == $id && $row[1] == $pw && $row != null)
{
        
        $_SESSION['username'] = $id;
        echo '<script type="text/javascript">alert("登入成功！");</script>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=home.php>';
}
else
{
        echo '<script type="text/javascript">alert("帳號或密碼錯誤");</script>';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>