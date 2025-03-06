<html>
    <head>
        <title>반복문</title>
    </head>
    <body>
        <?php
        $num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $sum = 0;
        echo "숫자 : ";
        foreach($num as $value){
            echo $value . " ";
            $sum += $value;
        }
        echo "<br>";
        echo "1부터 10까지의 합계 : ", $sum;
        ?>
    </body>
</html>