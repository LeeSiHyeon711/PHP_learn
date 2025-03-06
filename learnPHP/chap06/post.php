<html>
    <head>
        <title>POST 방식</title>
    </head>
    <body>
        <?php
        
        function myMethod($num){
            if($num%2 == 0)
                echo "짝수";
            else echo "홀수";
        }

        if(isset($_POST["number"])){
            $num = $_POST["number"];
            echo $num."은[는] ";
            echo myMethod($num). "입니다.";
        }

        ?>

        <form method="POST">
            <p>입력 숫자 : <input type="text" name="number"></p>
            <p><input type="submit" value="짝수/홀수 구하기"></p>
        </form>
    </body>
</html>