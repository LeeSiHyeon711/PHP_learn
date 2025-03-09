<html>
    <head>
        <title>쿠키</title>
    </head>
    <body>
        <?php
        
        $user_id = $_COOKIE['userID'];
        $user_pw = $_COOKIE['userPW'];

        echo "설정된 쿠키의 속성값 [1] : ".$user_id."<br>";
        echo "설정된 쿠키의 속성값 [1] : ".$user_pw;
        
        ?>
    </body>
</html>