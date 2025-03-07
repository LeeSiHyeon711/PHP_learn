<html>
    <head>
        <title>파일 업로드</title>
    </head>
    <body>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            $name1 = $_POST['name1'];
            $subject1 = $_POST['subject1'];
            
            $name2 = $_POST['name2'];
            $subject2 = $_POST['subject2'];

            $name3 = $_POST['name3'];
            $subject3 = $_POST['subject3'];

            $filename1 = $_FILES["photo1"]["name"];
            $filename2 = $_FILES["photo2"]["name"];
            $filename3 = $_FILES["photo3"]["name"];

            $target_path1 = "c:/upload/".basename($filename1);

            if(file_exists("c:/upload/". $filename1)){
                $filename1 = time().$filename1;
            }

            $target_path2 = "c:/upload/".basename($filename2);

            if(file_exists("c:/upload/". $filename2)){
                $filename2 = time().$filename2;
            }

            $target_path3 = "c:/upload/".basename($filename3);

            if(file_exists("c:/upload/".$filename3)){
                $filename3 = time().$filename3;
            }

            if(!move_uploaded_file($_FILES['photo1']['tmp_name'], $target_path1) ||
                !move_uploaded_file($_FILES['photo2']['tmp_name'], $target_path2) ||
                !move_uploaded_file($_FILES['photo3']['tmp_name'], $target_path3) )
            return;
        }
        ?>

        <table border="1">
            <tr>
                <th width="100">이름</th>
                <th width="100">제목</th>
                <th width="100">파일</th>
            </tr>
            <tr>
                <td><?=$name1; ?></td>
                <td><?=$subject1; ?></td>
                <td><?=$filename1; ?></td>
            </tr>
            <tr>
                <td><?=$name2; ?></td>
                <td><?=$subject2; ?></td>
                <td><?=$filename2; ?></td>
            </tr>
            <tr>
                <td><?=$name3; ?></td>
                <td><?=$subject3; ?></td>
                <td><?=$filename3; ?></td>
            </tr>
        </table>
    </body>
</html>