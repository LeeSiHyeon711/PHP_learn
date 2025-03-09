<html>
    <head>
        <title>데이터베이스 연동</title>
    </head>
    <body>
        <?php
        $servername = "localhost";      // 서버명
        $username = "admin";            // 사용자명
        $password = "admin1234";        // 암호
        $dbname = "phpbookdb";          // 데이터베이스명

        // 연결 생성
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // 연결 확인
        if(!$conn){
            die("데이터베이스 연결 실패 : ".mysqli_connect_error());
        }
        echo "데이터베이스 연결 성공 : ".mysqli_get_host_info($conn);
        mysqli_close($conn);
        ?>
    </body>
</html>