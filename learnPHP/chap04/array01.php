<html>
    <head>
        <title>배열</title>
    </head>
    <body>
        <?php
        $colors[0] = "red";
        $colors[1] = "green";
        $colors[2] = "blue";

        for($i=0; $i<3; $i++){
            echo "colors[ $i ] : $colors[$i] <br>";
            echo "<font color='$colors[$i]'>Hello PHP!</font><br>";
        }
        ?>
    </body>
</html>