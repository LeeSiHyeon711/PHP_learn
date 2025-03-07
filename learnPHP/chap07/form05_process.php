<html>
    <head>
        <title>Form 태그</title>
    </head>
    <body>
        <?php
        $id = $_POST["id"];
        $passwd = $_POST["passwd"];
        $name = $_POST["name"];
        $phone1 = $_POST["phone1"];
        $phone2 = $_POST["phone2"];
        $phone3 = $_POST["phone3"];

        $sex = "";
        if(isset($_POST['sex'])){
            $sex = $_POST['sex'];
        }

        $hobby = "";
        if(isset($_POST['hobby'])){
            $hobby = $_POST["hobby"];
        }

        $comment = $_POST["comment"];
        ?>
        <p>아이디 : <?php echo $id; ?></p>
        <p>비밀번호 : <?php echo $passwd; ?></p>
        <p>이름 : <?php echo $name; ?></p>
        <p>연락처 : <?php echo $phone1; ?>-<?php echo $phone2; ?>-<?php echo $phone3; ?>
        <p>성별 : <?php echo $sex; ?>
        <p>취미 : <?php 
                    if($hobby != null){
                        for($i=0; $i<count($hobby); $i++){
                            echo $hobby[$i];
                        }
                    }
                    ?>
        </p>
        <p>가입 인사 : <?php echo $comment; ?></p>
    </body>
</html>