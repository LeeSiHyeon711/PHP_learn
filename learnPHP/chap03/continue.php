<html>
    <head>
        <title>분기문</title>
    </head>
    <body>
        <?php
        for($i=1; $i<=4; $i++){
            for($j=1; $j<=3; $j++){
                if($i==3 && $j==2) continue;
                echo $i, " * ", $j, "<br>";
            }
        }
        ?>
    </body>
</html>