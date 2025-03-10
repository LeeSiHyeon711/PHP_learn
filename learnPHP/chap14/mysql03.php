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

        $sql = "SELECT * FROM member";

        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table>";
                echo "<tr>";
                    echo "<th>아이디</th>";
                    echo "<th>비밀번호</th>";
                    echo "<th>이름</th>";
                echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                        echo "<td>". $row['id'] ."</td>";
                        echo "<td>". $row['passwd'] ."</td>";
                        echo "<td>". $row['name'] ."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                echo "검색어와 일치하는 값을 찾을 수 없습니다.";
            }
        }else{
            echo "쿼리문을 실행할 수 없습니다.".mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>