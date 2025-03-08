<html>
    <head>
        <title>유효성 검사</title>
    </head>
    <body>
        <h3>입력에 성공했습니다.</h3>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "아이디 : ".$_POST["id"]."<br>";
            echo "비밀번호 : ".$_POST["passwd"]."<br>";
        }
        ?>
    </body>
</html>