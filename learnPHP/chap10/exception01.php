<?php
function division($num1, $num2){
    if($num2 == 0){
        throw new Exception('0으로 나누기');
    } else{
        $result = $num1 / $num2;
        echo "$num1 / $num2 = $result <br>";
    }
}

try{
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        division($num1, $num2);
        echo "모든 나눗셈 연산을 성공했습니다. <br>";
    }
}catch(Exception $e){
    echo "예외 처리 발생 : ".$e -> getMessage()."<br>";
}
?>
<html>
    <head>
        <title>예외 처리</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <p>숫자1 : <input type="text" name="num1"></p>
            <p>숫자2 : <input type="text" name="num2"></p>
            <p><input type="submit" value="전송"></p>
        </form>
    </body>
</html>