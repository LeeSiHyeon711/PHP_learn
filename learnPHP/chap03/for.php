<html>
    <head>
        <title>반복문</title>
    </head>
    <body>
        <?php
        $sum = 0;
        for($i=1; $i<=10; $i++) {
            $sum += $i;
        }
        echo "1부터 10까지의 합계 : ", $sum;
        ?>
    </body>
</html>