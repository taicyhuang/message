<?php
include "./class/connect.php";
include "./class/register.php";
?>
<!DOCTYPE html>
<html>
    <head></head>
    <title>註冊頁面</title>
    <body>
    <div class="body">
    
        <div class="content">
            <form method="POST" action="">
                註冊帳號:<input type="text" name="account">
                密碼:<input type="password" name="pass">
                <input type="submit" value="註冊">
            </form>
        </div>
    </div>
    </body>
</html>