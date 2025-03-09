<html>
    <head>
        <title>세션</title>
    </head>
    <body>
        <h4>-----세션 유효시간 변경 전-----</h4>
        <?php
        $time = ini_get("session.gc_maxlifetime")/60;
        echo "세션 유효 시간 : ".$time."분<br>";
        ?>

        <h4>-----세션 유효시간 변경 후-----</h4>

        <?php
        ini_set('session.gc_maxlifetime', 60*60*24);
        $time = ini_get("session.gc_maxlifetime")/60;
        echo "세션 유효 시간 : ".$time."분<br>";
        ?>
    </body>
</html>