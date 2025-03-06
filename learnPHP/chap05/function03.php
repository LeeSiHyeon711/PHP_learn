<html>
    <head>
        <title>사용자 정의 함수</title>
    </head>
    <body>
        <?php
        function printFont($font, $color, $size=10){
            echo "<font face='$font' color = '$color' size = '$size'>Hello, PHP!</font><br>";
        }

        printFont("Arial", "Red", 12);
        printFont("Times", "Green", 13);
        printFont("Courier", "Blue");
        ?>
    </body>
</html>