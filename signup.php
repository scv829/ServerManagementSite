<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <header><?php include "head.php" ?></header>
        <style>
            body form {width: 600px; margin: 0 auto;}
        </style>
        <script>
            function check_info(){
                if( !document.sign_form.id.value){
                    alert("아이디를 입력하세요!");
                    document.sign_form.id.focus();
                    return;
                }
                if( !document.sign_form.passwd.value){
                    alert("비밀번호를 입력하세요!");
                    document.sign_form.passwd.focus();
                    return;
                }
                if( !document.sign_form.name.value){
                    alert("이름을 입력하세요!");
                    document.sign_form.name.focus();
                    return;
                }
                document.sign_form.submit();
            }     
        </script>
    </head>
    <body>
        <form name="sign_form" method="post" action="signup_ok.php">
            <h3>회원가입</h3>
            아이디 : <input type="text" name="id"> <br>
            비밀번호  : <input type="password" name="passwd"> <br>
            이&nbsp; &nbsp; &nbsp;름 : <input type="text" name="name"> <br> <br>
            <button type="button" onclick="check_info()">회원가입</button>
        </form>
    </body>
</html>
