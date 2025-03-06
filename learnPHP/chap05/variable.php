<html>
    <head>
        <title>내장 함수</title>
    </head>
    <body>
        <?php
        $num = pi();

        $x = "123.456789abc";

        echo $x. "<br>";
        echo "정수형 : ".intval($x)."<br>";
        echo "실수형 : ".floatval($x)."<br>";
        echo "문자열형 : ".strval($x)."<br>";

        echo "정수형 연산 : ".intval($x)+ intval($x)."<br>";
        echo "실수형 연산 : ".floatval($x)+ floatval($x)."<br>";
        echo "문자열형 연산 : ".strval($x). strval($x)."<br>";
        ?>
    </body>
</html>