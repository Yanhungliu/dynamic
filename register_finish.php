<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$email = $_POST['email'];

if($id != null && $pw != null && $pw2 != null && $email != null){
$sql = "SELECT * FROM member_table where username = '$id'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);

if ($row != null && $row[0] == $id)
{
	echo '<script type="text/javascript">alert("帳號已被使用");</script>';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';	
}
	

else if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        
        $sql = "insert into member_table (username, password,email) values ('$id', '$pw','$email')";
        if(mysqli_query($link,$sql))
        {
                echo '<script type="text/javascript">alert("新增成功！");</script>';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        else
        {
                echo '<script type="text/javascript">alert("新增失敗！");</script>';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=register.html>';
        }
}
else
{
        echo '<script type="text/javascript">alert("密碼與確認密碼不符");</script>';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
}
}

else
{
        echo '<script type="text/javascript">alert("欄位請完整填寫");</script>';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
}
?>