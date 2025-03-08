<html>
    <head>
        <title>유효성 검사</title>
    </head>
    <script type="text/javascript">
        function checkLogin(){
            if(document.loginForm.id.value.length<4 || form.id.value.length>12){
                alert("아이디는 4~12자 이내로 입력 가능합니다!");
                document.loginForm.id.focus();
                return false;
            }
            if(document.loginForm.passwd.value.length<4){
                alert("비밀번호는 4자 이상으로 입력해야 합니다!");
                document.loginForm.passwd.focus();
                return false;
            }
            document.loginForm.submit();
        }
    </script>
    <body>
        <form name="loginForm" action="client_validation_process.php" method="post">
            <p>아 이 디 : <input type="text" name="id"></p>
            <p>비밀번호 : <input type="password" name="passwd"></p>
            <p><input type="button" value="전송" onclick="checkLogin()"></p>
        </form>
    </body>
</html>