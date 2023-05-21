<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            .t { width: 70%; text-align: center; background: whitesmoke}
            .u { width: 20%; text-align: center; background: aqua;}
            .d { width: 20%;  text-align: center; background: gray;}
            .tr{ background: antiquewhite;}
        </style>
    </head>
    <body>
        <table style="margin: auto;">
            <thead>
                <tr>
                    <th class="t">제목</th><th class="u">작성자</th><th class="d">작성 날짜</th>
                </tr>
            </thead>
            <?php 
                $connect = new mysqli("localhost", "root", "", "board_site");
                $sql = "SELECT * FROM post";
                $result = mysqli_query($connect, $sql);
                while( $board = mysqli_fetch_array($result) ){
                    $title=$board["title"]; 
                    if(strlen($title)>30)
                        $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
            ?>
            <tbody>
                <tr class="tr">
                    <td ><a href="read.php?idx=<?php echo $board["idx"];?>"><?php echo $title;?></a></td>
                    <td ><?php echo $board['name']?></td>
                    <td ><?php echo $board['date']?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <div style="position: relative; left: 30%; display:inline; height:20px;">
            <?php 
                if( isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
                else $userid = "";
                if( isset($_SESSION["username"])) $userid = $_SESSION["username"];
                else $username = "";

                if( $userid != "" ) echo "<a href='write.php'><button>글쓰기</button></a>";
            ?>
         </div>
    </body>
</html>