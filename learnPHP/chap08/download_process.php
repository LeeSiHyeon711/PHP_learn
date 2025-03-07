<?php
if(isset($_REQUEST["file"])){
    $file = urldecode($_REQUEST["file"]);

    $filepath = "./images/".$file;

    if(file_exists($filepath)){
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Transfer-Encoding: binary');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Caache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: '.filesize($filepath));
        flush();
        readfile($filepath);
        die();
    }else{
        http_response_code(404);
        die();
    }
}
?>