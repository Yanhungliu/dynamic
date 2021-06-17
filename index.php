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

<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="connect.php">
<table class="t" style="border:1px solid;" width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
        <tr>
            <div class="content">
                <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#000000">會員資料</font></td>
        </tr>
        <tr>
            <td width="80" align="center" valign="baseline">帳號</td>
            <td valign="baseline">
                <input type="text" name="id"/></td>
        </tr>
        <tr>
            <td width="80" align="center" valign="baseline">密碼</td>
            <td valign="baseline">
                <input type="text" name="pw"/></td>
        </tr>     
        <tr>
            <td colspan="2" align="center" bgcolor="#CCCCCC">
                <button class="btn btn-success" type="submit" name="button" >登入</button></td>
           
        </tr>
    </table>
</form>

<form name="form" method="post" action="register.php" style="text-align:center">
    <button class="btn btn-info" type="submit">註冊</button>
</form>
</body>