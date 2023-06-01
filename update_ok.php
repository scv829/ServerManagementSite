<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    </head>
    <body>
        <?php 
            $idx = $_POST['idx'];
            $title = $_POST['title'];
            $content = $_POST['content'];

            $connect = new mysqli("localhost", "root", "", "board_site");
            if( !$connect->connect_errno){
                $sql = "UPDATE post SET title = '$title' , content = '$content' where idx='$idx'";
        
                mysqli_query($connect, $sql);
                mysqli_close($connect);

                echo "
                <script>
                alert('글 수정 완료!');
                </script>";
            }

            echo "
            <script>
                document.location.href = 'index.php';
            </script>";
        ?>
    </body>
</html>