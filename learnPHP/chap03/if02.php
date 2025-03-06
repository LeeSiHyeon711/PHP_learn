<html>
    <head>
        <title>조건문</title>
    </head>
    <body>
        <?php
        $num = 20;

        if($num % 2 == 0){
            echo "{$num}은[는] 짝수입니다.";
        }
        else echo "{$num}은[는] 홀수입니다.";
        ?>
    </body>
</html>