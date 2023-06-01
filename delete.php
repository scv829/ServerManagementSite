<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php  
            $idx = $_GET['idx'];

            $connect = new mysqli("localhost", "root", "", "board_site");
            if(!$connect->connect_errno){
                $sql = "DELETE FROM post where idx='$idx'";
                mysqli_query($connect, $sql);
                mysqli_close($connect);

                echo "
                    <script>
                        alert(\"글 삭제 완료!\");
                        document.location.href = 'index.php';
                    </script>
                    ";
                }
        ?>
    </body>
</html>