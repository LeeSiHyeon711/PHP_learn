<?php
class EmptyException extends Exception {}
class InvalidIntException extends Exception {}

try{
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id = $_POST["id"];
        $passwd = $_POST["passwd"];

        if($id == ""){
            throw new EmptyException("아이디를 입력하세요!<br>");
        }
        if($passwd == ""){
            throw new EmptyException("비밀번호를 입력하세요!<br>");
        }
        if(filter_var($passwd, FILTER_VALIDATE_INT) === FALSE){
            throw new InvalidIntException("<b?>$passwd</b>은[는] 숫자만 입력해 주세요<br>");
        }
        echo "로그인 검증을 성공했습니다.<br>";
    }
}catch(EmptyException $e){
    echo $e->getMessage();
}catch(InvalidIntException $e){
    echo $e->getMessage();
}
?>

<html>
    <head>
        <title>예외 처리</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <p>아 이 디 : <input type="text" name="id"></p>
            <p>비밀번호 : <input type="password" name="passwd"></p>
            <p><input type="submit" value="전송"></p>
        </form>
    </body>
</html>