<html>
    <head>
        <title>파일 업로드</title>
    </head>
    <body>
        <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
                $allowed = array(
                    "jpg" => "image/jpg", 
                    "jpeg" => "image/jpeg", 
                    "gif" => "image/gif", 
                    "png" => "image/png"
                );
                $filename = $_FILES["photo"]["name"];
                $filetype = $_FILES["photo"]["type"];
                $filesize = $_FILES["photo"]["size"];

                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if(!array_key_exists($ext, $allowed)) die("오류: 올바른 파일 형식을 선택하세요.");
                $maxsize = 5 * 1024 * 1024;
                if($filesize > $maxsize) die("오류: 파일 크기가 허용된 한도보다 큽니다.");

                $original_filename = $filename;
                if(in_array($filetype, $allowed)){
                    if(file_exists("c:/upload/".$filename)){
                        $filename = time().$filename;
                    }
                    move_uploaded_file($_FILES["photo"]["tmp_name"], "c:/upload/$filename");
                    echo "이름: ".$_POST['name']."<br>";
                    echo "제목: ".$_POST['subject']."<br>";
                    echo "-------------------------------<br>";
                    echo "실제 파일명: ".$original_filename."<br>";
                    echo "저장 파일명: ".$filename."<br>";
                    echo "파일 콘텐츠 유형: ".$filetype."<br>";
                    echo "파일 크기: ".$filesize."<br>";
                }else {
                    echo "파일 업로드 실패";
                }
            }else {
                echo "오류: ". $_FILES["photo"]["error"];
            }
        }
        ?>
    </body>
</html>