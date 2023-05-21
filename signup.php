<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <header><?php include "head.php" ?></header>
        <style>
            body form {width: 600px;	margin: 0 auto;}
        </style>
        <script>
            id_ps = true;
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
                if( id_ps == false){
                    alert("다른 아이디를 입력하세요!");
                    document.sign_form.id.focus();
                    return;
                }
                document.sign_form.submit();
            }
            function check_id(){
                <?php $id='"+document.sign_form.id.value+"'; ?>;
                <?php
                    $connect = new mysqli("localhost", "root", "", "board_site");
                    $sql = "SELECT * FROM singup where id='$id'";
                    $result = mysqli_query($connect, $sql);    
                    $id_match = mysqli_num_rows($result);

                    if( $id_match ){
                        ?>
                        window.alert('중복되는 아이디입니다.');
                        history.go(-1);
                        id_ps=false;
                        
                    <?php } 
                    else{ ?>
                        window.alert('사용 가능한 아이디입니다.');
                        history.go(-1);
                        id_ps=true;
                    <?php } ?>  
            }
        </script>   
    </head>
    <body>
        <form name="sign_form" method="post" action="signup_ok.php">
            <h3>회원가입</h3>
            아이디 : <input type="text" name="id">
                <button type="button" onclick="check_id()">중복확인</button>
            <br>
            비밀번호  : <input type="password" name="passwd"> <br>
            이&nbsp; &nbsp; &nbsp;름 : <input type="text" name="name"> <br> <br>
            <button type="button" onclick="check_info()">회원가입</button>
        </form>
    </body>
</html>