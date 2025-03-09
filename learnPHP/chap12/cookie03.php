<html>
    <head>
        <title>쿠키</title>
    </head>
    <body>
        <h4>-----쿠키를 삭제하기 전-----</h4>

        <?php
        if(isset($_COOKIE["userID"]) && $_COOKIE["userPW"]){
            $user_id = $_COOKIE['userID'];
            $user_pw = $_COOKIE['userPW'];

            echo "설정된 쿠키 이름 userID : ".$user_id."<br>";
            echo "설정된 쿠키 값 userPW : ".$user_pw."<br>";

            setcookie("userID", "", 0);
        }else{
            echo "설정된 쿠키 이름 없습니다.";
        }
        ?>

        <h4>-----쿠키를 삭제한 후-----</h4>
        
        <?php
        if(isset($_COOKIE["userID"])){
            $user_id = $_COOKIE["userID"];
            echo "설정된 쿠키 이름 userID : ".$user_id."<br>";
        }else if(isset($_COOKIE["userPW"])){
            $user_pw = $_COOKIE['userPW'];
            echo "설정된 쿠키 값 userPW : ".$use_pw."<br>";
        }else{
            echo "설정된 쿠키 이름 없습니다.";
        }
        ?>
    </body>
</html>