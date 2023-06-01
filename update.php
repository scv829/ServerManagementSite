<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <header><?php include "head.php" ?></header>
        <script>
            function check_info(){
                if( !document.post_board.title.value){
                    alert("제목을 입력하세요!");
                    document.sign_form.id.focus();
                    return;
                }
                document.post_board.submit();
            }
        </script> 
    </head>
    <body>
        <?php
            $idx = $_GET['idx'];
            $connect = new mysqli("localhost", "root", "", "board_site");
            $sql = "SELECT * FROM post where idx='$idx'";
            $result = mysqli_query($connect, $sql);
            $board = mysqli_fetch_array($result);
            if($connect) {
            ?>
            <form name="post_board" method="post" action="update_ok.php">
                <input type="hidden" name="idx" value="<?=$idx?>">
                <h2>수정하기</h2>
                <ul style="list-style-type: none;">
                <li>
                    <span >이름 :</span>
                    <span ><?= $board["name"]?></span>
                </li>
                <li>
                    <span >제목 :</span>
                    <span ><input type="text" name="title" placeholder="제목을 입력하세요" value="<?= $board["title"]?>"></span>
                </li>
                <li>
                    <span >내용 :</span>
                    <span ><textarea cols="50" rows="10" name="content" placeholder="내용을 입력하세여" ><?= $board["content"]?></textarea></span>
                </li>
                <li>
                    <button type="button" onclick="check_info()">수정하기</button>
                </li>
            </ul>
            </form>
        <?php } ?>
    </body>
</html>