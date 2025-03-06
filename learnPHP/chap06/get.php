<html>
    <head>
        <title>GET 방식</title>
    </head>
    <body>
        <?php
        
        function sumMethod($num){
            $sum = 0;
            for($i=0; $i<=$num; $i++)
                $sum += $i;

            echo $sum;
        }

        if(isset($_GET["number"])){
            $num = $_GET["number"];
            echo "1부터 {$num}까지의 합계 : ";
            sumMethod($num);
        }

        ?>
        <form method="GET">
            <p>입력 숫자 : <input type="text" name="number"></p>
            <p><input type="submit" value="합계구하기"></p>
        </form>
    </body>
</html>