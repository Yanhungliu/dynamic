<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$link=mysqli_connect("127.0.0.1","ben","1234","mydb")
or die("無法對資料庫連線");

mysqli_query($link, 'SET CHARACTER SET utf8');


?> 
