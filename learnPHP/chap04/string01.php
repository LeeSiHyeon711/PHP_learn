<html>
    <head>
        <title>문자열</title>
    </head>
    <body>
        <?php
        $name = "홍길순";
        echo $name;
        echo "<br>";

        $age = '20세';
        echo $age;
        echo "<br>";

        $c = "나의 이름은 \"$name\"입니다";
        $d = '나의 나이는 \'20세\'입니다';
        echo $c, "<br>";
        echo $d, "<br>";
        ?>
    </body>
</html>