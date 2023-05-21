<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <header><?php include "head.php" ?></header>
        <style>
            body form {width: 600px;	margin: 0 auto;}
        </style>
    </head>
    <body>
        <form name="sign_form" method="post" action="login_ok.php">
            <h3>로그인</h3>
            아이디 : <input type="text" name="id"> <br>
            비밀번호  : <input type="password" name="passwd"> <br><br>
            <input type="submit" name="btn" value="로그인">
        </form>
    </body>
</html>