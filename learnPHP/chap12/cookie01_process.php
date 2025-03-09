<html>
    <head>
        <title>쿠키</title>
    </head>
    <body>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $user_id = $_POST["id"];
            $user_pw = $_POST["passwd"];

            if($user_id === "admin" && $user_pw === "1234"){
                setcookie("userID", $user_id);
                setcookie("userPW", $user_pw);

                echo "쿠키 설정이 성공했습니다<br>";
                echo $user_id."님 환영합니다.";
            }else{
                echo "쿠키 설정이 실패했습니다.";
            }
        }
        ?>
    </body>
</html>