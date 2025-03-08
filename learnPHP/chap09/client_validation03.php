<html>
    <head>
        <title>유효성 검사</title>
    </head>
    <script type="text/javascript">
        function checkLogin(){
            for(i=0; i<document.loginForm.id.value.length; i++){
                var ch = document.loginForm.id.value.charAt(i);
                if((ch<'a'||ch>'z') && (ch>'A'||ch<'Z') && (ch>'0'||ch<'9')){
                    alert("아이디는 영문 소문자만 입력 가능합니다!");
                    document.loginForm.id.focus();
                    return;
                }
            }

            if(isNaN(document.loginForm.passwd.value)){
                alert("비밀번호는 숫자만 입력 가능합니다!");
                document.loginForm.passwd.focus();
                return;
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