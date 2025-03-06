<html>
    <head>
        <title>반복문</title>
    </head>
    <body>
        <?php
        $num = 5;

        for($i=0; $i<=$num; $i++) {
            for($j=0; $j<$i; $j++)
                echo "&nbsp;";
            for ($j=0; $j<(2*$num)-1-($i*2); $j++){
                echo "*";
            }
            echo "<br>";
        }
        ?>
    </body>
</html>