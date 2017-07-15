<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="zh-CN">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆</title>
<link rel="stylesheet" href="../css/style.css">
<body  style="background:url('../images/bg.jpg')no-repeat">

<div class="login-container" >
    <h1>欢迎登陆</h1>
    <form action="do_login.php" method="post" id="loginForm">
        <div>
            <input type="text" name="username" class="username" placeholder="用户名" autocomplete="off"/>
        </div>
        <div>
            <input type="password" name="password" class="password" placeholder="密码" oncontextmenu="return false" onpaste="return false" />
        </div>

        <div>
            <input type="text" name="usercode" class="username" placeholder="请输入验证码"  style="width:140px;margin-right:10px"/>
            <img id="codeImg" class="img-rounded" src="codeCreate.php" alt="验证码" style="height: 42px; width: 112px;position: relative;top:14px" onclick="changeImg()"/>
        </div>
          <button id="submit" type="submit" name="sub"> 登 陆 </button> 
    </form>

    <a href="register.php">
        <button type="button" class="register-tis">还有没有账号？</button>
    </a>

</div>

</body>
<script src="../js/jquery.min.js"></script>
<script src="../js/common.js"></script>
<!--表单验证-->
<script src="../js/jquery.validate.js"></script>
<script>
function changeImg () {
   $("#codeImg").attr("src","codeCreate.php?_="+new Date());
    }
</script>
</html>