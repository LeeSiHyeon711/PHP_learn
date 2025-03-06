<html>
    <head>
        <title>내장 함수</title>
    </head>
    <body>
        <?php
        $year = 2024;
        $month = 3;
        $day = 28;

        $timestamp = mktime(0, 0, 0, $month, $day, $year);
        echo "처음 만난 날짜 : ".date("d/m/Y", $timestamp);
        echo "<br>";

        $timestamp = mktime(0, 0, 0, $month, $day+100, $year);
        echo "100일째 되는 날짜 : ".date("d/m/Y", $timestamp);
        ?>
    </body>
</html>