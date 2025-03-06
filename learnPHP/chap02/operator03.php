<html>
    <head>
        <title>연산자</title>
    </head>
    <body>
        <?php
        $a = 5;
        $b = 10;

        echo "a > b => ", ($a > $b), "<br>";
        echo "!(a > b) => ", !($a > $b), "<br>";
        echo "(a == b) && (a == 5) => ", (($a == $b) && ($a == 5)), "<br>";
        echo "(a != b) && (a == 5) => ", (($a != $b) && ($a == 5)), "<br>";
        echo "!(a != b) && (a == 5) => ", (!(($a != $b) && ($a == 5))), "<br>";
        ?>
    </body>
</html>