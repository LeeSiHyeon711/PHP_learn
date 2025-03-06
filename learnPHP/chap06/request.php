<html>
    <head>
        <title>GET & POST 방식</title>
    </head>
    <body>
        <?php
        
        function starMethod($len){
            for($i=0; $i<$len; $i++){
                for($j=0; $j<$i; $j++){
                    echo ":&nbsp;";
                }
                for($j=0; $j<(2*$len)-1-($i*2); $j++){
                    echo "*";
                }
                echo "<br>";
            }
        }

        if(isset($_REQUEST["number"])){
            $num = $_REQUEST["number"];
            echo "길이 : ".$num. "<br>";
            starMethod($num);
        }

        ?>
        <form method="GET">
            <p>입력 숫자 : <input type="text" name="number"></p>
            <p><input type="submit" value="역삼각형 만들기"></p>
        </form>
    </body>
</html>