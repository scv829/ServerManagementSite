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

            if($connect){
            
                $sql = "INSERT INTO signup(id,username,passwd) VALUES('$id', '$name', '$passwd')";

                mysqli_query($connect, $sql);
                mysqli_close($connect);

                echo "
                <script>
                alert('회원가입 완료!');
                </script>";
            }
            echo "
            <script>
                document.location.href = 'index.php';
            </script>";
        ?>
    </body>
</html>