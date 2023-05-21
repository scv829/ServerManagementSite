<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $mode = $_POST["btn"];
            $id = $_POST['id'];
            $passwd = $_POST['passwd'];

            $connect = new mysqli("localhost", "root", "", "board_site");
            $sql = "SELECT * FROM signup where id='$id'";
            $result = mysqli_query($connect, $sql);

            $num_match = mysqli_num_rows($result);

            if($mode =="로그인" && $connect){
                if( !$num_match ){
                    echo "
                    <script>
                    window.alert('등록되지 않은 아이디입니다.');
                         history.go(-1);
                    </script>";
                }
                else{
                    $row = mysqli_fetch_array($result);
                    $db_passwd = $row['passwd'];
                    mysqli_close($connect);
                    
                    if( $passwd != $db_passwd){
                        echo "
                        <script>
                            window.alert('비밀번호가 맞지 않습니다.');
                            history.go(-1);
                        </script>";
                    }
                    else{
                        session_start();
                        $_SESSION["userid"] = $row['id'];
                        $_SESSION["username"] = $row['username'];
                        
                        echo "
                        <script>
                            document.location.href = 'index.php';
                        </script>";
                    }
                }
            }

        ?>
    </body>
</html>