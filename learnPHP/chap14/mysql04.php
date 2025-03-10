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

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM member";

        $stmt = mysqli_prepare($conn, $sql);

        if($result = mysqli_stmt_execute($stmt)){
            mysqli_stmt_bind_result($stmt, $id, $name, $passwd);
            echo "<table>";
            echo "<tr>";
                echo "<th>아이디</th>";
                echo "<th>비밀번호</th>";
                echo "<th>이름</th>";
            echo "</tr>";
            while(mysqli_stmt_fetch($stmt)){
                echo "<tr>";
                    echo "<td>". $id ."</td>";
                    echo "<td>". $passwd ."</td>";
                    echo "<td>". $name ."</td>";
                echo "</tr>";
            }
        } else{
            echo "쿼리문을 실행할 수 없습니다.".mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>