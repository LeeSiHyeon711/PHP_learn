<html>
    <head>
        <title>사용자 정의 함수</title>
    </head>
    <body>
        <?php
        function swap(&$param1, &$param2){
            $temp = $param1;
            $param1 = $param2;
            $param2 = $temp;
        }

        $num1 = 3;
        $num2 = 4;
        echo "swap() 함수 호울 전 숫자 : ". $num1. " , " . $num2;
        echo "<br>";

        swap($num1, $num2);
        echo "swap() 함수 홏출 후 숫자 : ". $num1. " , " . $num2;
        ?>
    </body>
</html>