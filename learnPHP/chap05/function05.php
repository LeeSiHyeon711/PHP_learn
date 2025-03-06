<html>
    <head>
        <title>사용자 정의 함수</title>
    </head>
    <body>
        <?php
        function maxMethod($x, $y){
            if($x > $y) $max1 = $x;
            else $max1 = $y;
            return $max1;
        }

        $num1 = 3;
        $num2 = 4;
        $result = maxMethod($num1, $num2);
        echo $num1 . "와[과] ". $num2."의 수 중 ". $result. "이[가] 큽니다.";
        ?>
    </body>
</html>