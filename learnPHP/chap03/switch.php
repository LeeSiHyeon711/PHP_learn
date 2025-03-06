<html>
    <head>
        <title>조건문</title>
    </head>
    <body>
        <?php
        $num = 85;
        echo "점수 : $num <br>";
        switch($num / 10) {
            case 10:
            case 9:
                echo "A등급";
                break;
            case 8:
                echo "B등급";
                break;
            case 7:
                echo "C등급";
                break;
            case 6:
                echo "D등급";
                break;
            default:
                echo "F등급";
        }
        ?>
    </body>
</html>