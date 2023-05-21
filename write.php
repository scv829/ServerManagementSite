<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <header><?php include "head.php" ?></header>
        <style>
            .t { width: 200px; height: 100px; margin: auto;}
            .tc { width: 800px; height: 100px; margin:auto}
            .c { width: 1000px; height: 1000px;}
        </style>
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
       <form name="post_board" method="post" action="write_ok.php">
            <h2>글쓰기</h2>
            <ul style="list-style-type: none;">
                <li>
                    <span >이름 :</span>
                    <span ><?=$username?></span>
                </li>
                <li>
                    <span >제목 :</span>
                    <span ><input type="text" name="title" placeholder="제목을 입력하세요"></span>
                </li>
                <li>
                    <span >내용 :</span>
                    <span ><textarea cols="50" rows="10" name="content" placeholder="내용을 입력하세여"></textarea></span>
                </li>
                <li>
                    <button type="button" onclick="check_info()">저장하기</button>
                </li>
            </ul>
       </form>
    </body>
</html>