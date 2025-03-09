<html>
    <head>
        <title>세션</title>
    </head>
    <body>
        <?php
        session_start();
        $user_id = $_SESSION['userID'];
        $user_pw = $_SESSION['userPW'];

        echo "설정된 세션의 속성값 [1] : ".$user_id."<br>";
        echo "설정된 세션의 속성값 [1] : ".$user_pw;
        ?>
    </body>
</html>