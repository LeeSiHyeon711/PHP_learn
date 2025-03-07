<?php
$file = "gugudan.txt";
$handle = fopen($file, "r");

if(file_exists($file)){
    while(!feof($handle)){
        $content = fgets($handle);
        echo $content. "<br>";
    }
    fclose($handle);
    echo "파일 읽기 성공";
}else{
    echo "파일 읽기 실패";
}
?>