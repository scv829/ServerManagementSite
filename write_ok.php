<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            session_start();
            $name = $_SESSION['username'];
            $id = $_SESSION['userid'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $date =  date("Y-m-d (H:i)");

            $connect = new mysqli("localhost", "root", "", "board_site");

            if(!$connect->connect_errno){
                $sql = "INSERT INTO post(id,name,title,content,date) VALUES('$id','$name', '$title','$content','$date')";
                mysqli_query($connect, $sql);
                mysqli_close($connect);

                echo "
                <script>
                alert('글작성 완료!');
                </script>";
            }
            echo "
            <script>
                document.location.href = 'index.php';
            </script>";
        ?>
    </body>
</html>