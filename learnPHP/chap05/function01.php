<html>
    <head>
        <title>사용자 정의 함수</title>
    </head>
    <body>

    <?php
    function sumMethod(){
        $sum = 0;
        for($i=0; $i<=10; $i++)
            $sum += $i;

        echo $sum;
    }
    echo "1부터 10까지의 합계 : ";
    sumMethod();
    ?>
    </body>
</html>