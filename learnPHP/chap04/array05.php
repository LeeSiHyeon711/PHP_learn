<html>
    <head>
        <title>배열</title>
    </head>
    <body>
        <?php
        $gradeArr = array(
            array("홍길순", 85, 80, 79),
            array("홍길동", 75, 80, 99),
            array("수여인", 85, 80, 94)
        );

        for($row=0; $row<3; $row++){
            for($col=0; $col<4; $col++){
                echo $gradeArr[$row][$col]. " ";
            }
            echo " => ";
            echo " 합계: ", array_sum($gradeArr[$row]);
            echo " 평균: ", array_sum($gradeArr[$row])/3;
            echo "<br>";
        }
        ?>
    </body>
</html>