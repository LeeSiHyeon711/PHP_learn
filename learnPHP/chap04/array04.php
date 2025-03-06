<html>
    <head>
        <title>배열</title>
    </head>
    <body>
        <?php
        $gradeArr = array(
            "홍길순" => array("국어" => 85, "수학" => 80, "영어" => 79),
            "홍길동" => array("국어" => 75, "수학" => 80, "영어" => 99),
            "수여인" => array("국어" => 85, "수학" => 80, "영어" => 99)
        );

        echo "홍길순의 국어 점수 : ";
        echo $gradeArr["홍길순"]['국어'], "<br>";

        echo "홍길동의 수학 점수 : ";
        echo $gradeArr["홍길동"]['수학'], "<br>";

        echo "수여인의 영어 점수 : ";
        echo $gradeArr["수여인"]['영어'], "<br>";

        echo "-------------------------------<br>";

        foreach($gradeArr as $name => $jumsuArr) {
            echo "이름 : ", $name, "<br>";
            $sum = 0;

            foreach($jumsuArr as $subject => $jumsu) {
                $sum += $jumsu;
                echo $subject , " 점수 : ", $jumsu, " ";
            }
            echo "<br>";
            echo "합계 : ", $sum, "<br>";
            echo "평균 : ", $sum/3, "<br>";
            echo "-------------------------------<br>";
        }
        ?>
    </body>
</html>