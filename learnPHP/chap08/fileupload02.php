<html>
    <head>
        <title>파일 업로드</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data" action="fileupload02_process.php">
            <p>이름1 : <input type="text" name="name1">
                제목1 : <input type="text" name="subject1">
                파일1 : <input type="file" name="photo1">
            </p>
            <p>이름2 : <input type="text" name="name2">
                제목2 : <input type="text" name="subject2">
                파일2 : <input type="file" name="photo2">
            </p>
            <p>이름3 : <input type="text" name="name3">
                제목3 : <input type="text" name="subject3">
                파일3 : <input type="file" name="photo3">
            </p>
            <p><input type="submit" value="파일 업로드"></p>
        </form>
    </body>
</html>