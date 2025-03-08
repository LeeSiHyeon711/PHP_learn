<?php
$regExpId = "/^[a-z|A-Z|ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/";
$regExpPasswd = "/^[0-9]*$/";
$regExpName = "/^\[가-힣]*$/";
$regExpPhone = "/^\d{3}-\d{3,4}-\d{4}$/";
$regExpEmail = "/^[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_\.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,3}$/i";

$nameErr = $passwdErr = $emailErr = $urlErr = $ipErr = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id = $_POST["id"];
    $passwd = $_POST["passwd"];
    $name = $_POST["name"];
    $phone = $_POST["phone1"]."-".$_POST["phone2"]."-".$_POST["phone3"];
    $email = $_POST["email"];

    if(!preg_match($regExpId, $id))
        $idErr = "아이디는 문자로 시작해주세요!";

    if(!preg_match($regExpPasswd, $passwd))
        $passwdErr = "비밀번호는 숫자만 입력해주세요!";

    if(!preg_match($regExpName, $name))
        $nameErr = "이름은 한글만 입력해주세요!";

    if(!preg_match($regExpPhone, $phone))
        $phoneErr = "연락처 임력을 확인해주세요!";

    if(!preg_match($regExpEmail, $email))
        $emailErr = "이메일 입력을 확인해주세요!";
}
?>
<html>
    <head>
        <title>유효성 검사</title>
        <style> .rror {color: #FF0001;} </style>
    </head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p>아 이 디 : <input type="text" name="id" value=<?= $id ?>><span class="error">*<?php echo $idErr; ?></span></p>
            <p>비밀번호 : <input type="password" name="passwd" value=<?= $passwd ?>><span class="error">*<?php echo $passwdErr; ?></span></p>
            <p>이름 : <input type="text" name="name" value=<?= $name ?>><span class="error">*<?php echo $nameErr; ?></span></p>
            <p>연락처 : 
                <select name="phone1">
                    <option value="010">010</option>
                    <option value="011">011</option>
                    <option value="016">016</option>
                    <option value="017">017</option>
                    <option value="019">019</option>
                </select>
                -<input type="text" maxlength="4" size="4" name="phone2" >
                -<input type="text" maxlength="4" size="4" name="phone3" >
                <?php echo $phoneErr; ?>
            </p>
            <p>이메일 : <input type="text" name="email" value=<?= $email ?>><span class="error">*<?php echo $emailErr; ?></span></p>
            <p><input type="submit" value="가입하기"></p>
        </form>
    </body>
</html>