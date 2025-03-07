<html>
    <head>
        <title>파일 업로드</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data" action="fileupload01_process.php">
            <p>이름 : <input type="text" name="name"></p>
            <p>제목 : <input type="text" name="subject"></p>
            <p>파일 : <input type="file" name="photo"></p>
            <p><input type="submit" value="파일 업로드"></p>
        </form>
    </body>
</html>