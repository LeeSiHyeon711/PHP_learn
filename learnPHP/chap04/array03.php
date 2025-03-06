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

        echo $gradeArr[0][0], " ";
        echo $gradeArr[0][1], " ";
        echo $gradeArr[0][2], " ";
        echo $gradeArr[0][3], " ";
        echo "<br>--------------------------<br>";

        for($row=0; $row<3; $row++){
            $sum = 0;
            for($col=0; $col<4; $col++){
                echo $gradeArr[$row][$col]."  ";
                if($col!=0) $sum += $gradeArr[$row][$col];
            }
            echo " => ";
            echo " 합계: ", $sum;
            echo " 평균: ", $sum/3;
            echo "<br>";
        }
        ?>
    </body>
</html>