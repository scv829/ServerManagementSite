<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $id = $_POST['id'];
            $name = $_POST['name'];
            $passwd = $_POST['passwd'];

            $connect = new mysqli("localhost", "root", "", "board_site");
            if(!$connect->connect_errno){
                
                $sql = "SELECT * FROM signup where id='$id'";
                $result = mysqli_query($connect, $sql);
                $id_ck = mysqli_num_rows($result);

                if( !$id_ck ){
                    $sql = "INSERT INTO signup(id,username,passwd) VALUES('$id', '$name', '$passwd')";

                    mysqli_query($connect, $sql);
                    mysqli_close($connect);

                    echo "
                    <script>
                    alert('회원가입 완료!');
                    </script>";

                    echo "
                    <script>
                        document.location.href = 'index.php';
                    </script>";
                }
                else{
                    echo "
                    <script>
                        alert('중복되는 아이디가 존재합니다.\\n다른 아이디를 입력하세요!');
                        history.go(-1);
                    </script>";
                }
            }
        ?>
    </body>
</html>

