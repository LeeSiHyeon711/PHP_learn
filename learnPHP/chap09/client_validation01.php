<html>
    <head>
        <title>유효성 검사</title>
    </head>
    <script type="text/javascript">
        function checkLogin(){
            if(document.loginForm.id.value==""){
                alert("아이디를 입력해주세요.");
                document.loginForm.id.focus();
                return false;
            }else if(document.loginForm.passwd.value==""){
                alert("비밀번호를 입력해주세요.");
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