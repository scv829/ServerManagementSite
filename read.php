<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <header><?php include "head.php" ?></header>
        <style>
            .un { position: relative; left: 20%; display:inline; height:20px; }
            .cn { width: 500px; height: 500px; margin: auto;}
            .hr {  border: 1px black solid; width: 60%;}
            .du { position: relative; left: 30%;}
        </style>
        <script>
            function check(idx){
                var answer = confirm("정말 삭제하겠습니까?");
                if(answer){
                    document.location.href = 'delete.php?idx='+idx;
                }
            }
        </script>
    </head>
    
    <body>
        <?php
            $idx = $_GET['idx'];
            $connect = new mysqli("localhost", "root", "", "board_site");
            if($connect){ 
                $sql = "SELECT * FROM post where idx='$idx'";
                $result = mysqli_query($connect, $sql);
                $board = mysqli_fetch_array($result);
                $updateIdx = $board['idx'];  ?>   
                <table>
                    <thead>
                        <?php 
                            $state;
                            if($userid == $board["id"]){ $state = "visible"; } 
                            else { $state = "hidden";}
                        ?>
                        <div class="du" style="visibility:<?=$state;?>"> 
                            <a href="update.php?idx=<?=$updateIdx;?>"><button>수정하기</button></a> 
                            <button type="button" onclick="check(<?= $updateIdx?>)">삭제하기</button>
                        </div>
                        <h2><?= $board["title"]?></h2>
                        <hr class="hr">
                    </thead>
                    <tbody>
                        <div><h3>내용</h3></div>
                        <div class="cn" ><?= $board["content"]?></div>
                    </tbody>
                    <tfoot>
                        <div class="un"> 작성자 : <?= $board["name"]?> [ id : <?= $board["id"]?> ]</div>
                        <div class="un"> 작성일자 : <?= $board["date"]?></div>
                        <hr>
                    </tfoot>
                    <div class="un">
                        <a href="index.php" ><button>목록</button></a>
                    </div>
                </table>
            <?php } ?>
    </body>
</html>