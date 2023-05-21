<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            body hr { border: 2px blue solid; width: 70%;}
            .btn {  background:none;margin: auto; border: none; text-align: center; scale: 300%;}
            .btn:hover { border: 1px blue solid;}
        </style>
    </head>
    <body style="text-align: center;">
        <?php 
            session_start();
            if( isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
            else $userid = "";
            if( isset($_SESSION["username"])) $username = $_SESSION["username"];
            else $username = "";
            
            if( $userid == ""){ ?>
                <div style="position: relative; left: 30%; display:inline; height:20px;">
                    <a href="signup.php"><button>회원가입</button></a> &nbsp;
                    <a href="login.php"><button>로그인</button></a>
                </div>
            <?php }
            else{ ?>
                <div style="position: relative; left: 30%; display:inline; height:20px;">
                    <?php echo "$username 님 안녕하세요"; ?>
                    <a href="logout.php"><button>로그아웃</button></a>
                </div>
           <?php }
        ?>
        <div>
            <a href="index.php" ><button class="btn">Shiniper's 게시판</button></a>
        </div> <br>
        <h3>자유롭게 글을 작성하세요</h3>
        <hr>
    </body>
</html>