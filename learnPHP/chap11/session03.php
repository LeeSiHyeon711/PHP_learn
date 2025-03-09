<html>
    <head>
        <title>세션</title>
    </head>
    <body>
        <h4>------ 세션을 삭제하기 전 -----</h4>

        <?php
        session_start();

        if(isset($_SESSION["userID"]) && $_SESSION["userPW"]){
            $user_id = $_SESSION['userID'];
            $user_pw = $_SESSION['userPW'];

            echo "설정된 세션 이름 userID : ".$user_id."<br>";
            echo "설정된 세션 값 userPW: ".$user_pw."<br>";

            unset($_SESSION["userID"]);     // 세션 삭제
        }else{
            echo "설정된 세션 이름 없습니다.";
        }
        ?>

        <h4>----- 세션을 삭제한 후 -----</h4>

        <?php
        if(isset($_SESSION["userID"])){
            $user_id = $_SESSION["userID"];
            echo "설정된 세션 이름 userID : ".$user_id."<br>";
        }else if(isset($_SESSION["userPW"])){
            $user_pw = $_SESSION['userPW'];
            echo "설정된 세션 값 userPW : ".$user_pw."<br>";
        }else{
            echo "설정된 세션 이름 없습니다.";
        }
        ?>
    </body>
</html>