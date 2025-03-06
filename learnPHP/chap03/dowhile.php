<html>
    <head>
        <title>반복문</title>
    </head>
    <body>
        <?php
        $sum = 0;
        $i = 0;
        do {
            $sum += $i;
            $i++;
        } while($i <= 10);
        echo "1부터 10까지의 합계 : ", $sum;
        ?>
    </body>
</html>