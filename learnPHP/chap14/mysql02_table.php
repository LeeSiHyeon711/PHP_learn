<html>
    <head>
        <title>데이터베이스 연동</title>
    </head>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "BookMarketDB";

        // 연결 생성
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // 연결 확인
        if(!$conn){
            die("데이터베이스 연결 실패 : ".mysqli_connect_error());
        }
        echo "데이터베이스 연결 성공 : ".mysqli_get_host_info($conn);

        $sql = "CREATE TABLE IF NOT EXISTS member(
            id VARCHAR(20) NOT NULL,
            passwd VARCHAR(20),
            name VARCHAR(30),
            PRIMARY KEY (id));";

            if(mysqli_query($conn, $sql)){
                echo "테이블 생성 성공";
            }else{
                echo "테이블 생성 실패 : ".mysqli_error($conn);
            }

            mysqli_close($conn);
        ?>
    </body>
</html>