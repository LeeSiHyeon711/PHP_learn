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

        $id = $_POST["id"];
        $passwd = $_POST["passwd"];
        $name = $_POST["name"];

        $sql = "INSERT INTO Member(id, passwd, name) VALUES ('$id', '$passwd', '$name')";

        if(mysqli_query($conn, $sql)){
            echo "데이터 삽입 성공";
        }else{
            echo "데이터 삽입 실패 : ".mysqli_error($conn);
        }
        mysqli_close($conn);
        
        ?>
    </body>
</html>