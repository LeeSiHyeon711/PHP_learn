<!DOCTYPE html>
<html class="h-100">
<head>
    <title>도서 목록</title>
    <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" 
        rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    <?php
    require "./model.php";
    require "./menu.php";
    ?>
    <br>
    <main>
        <div class="container py-5">
            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">도서 목록</h1>
                    <p class="col-md-8 fs-4">BookList</p>
                </div>
            </div>
            <div class="row align-items-md-stretch text-center">
                <?php
                $bookId = $_POST["bookId"];
                $name = $_POST["name"];
                $unitPrice = $_POST["unitPrice"];
                $author = $_POST["author"];
                $description = $_POST["description"];
                $category = $_POST["category"];
                $unitsInStock = $_POST["unitsInStock"];
                $releaseDate = $_POST["releaseDate"];
                $condition = $_POST["condition"];
                $filename = $_FILES['bookImage']['name'];

                $target_path = "./resources/images/";

                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                $filename = $bookId.".".$ext;

                if(move_uploaded_file($_FILES["bookImage"]["tmp_name"], $target_path . $filename)){
                    $handle = fopen("./domain.dat", "a");
                    $book_info = "$bookId | $name | $unitPrice | $author | $description | $category | $unitsInStock | $releaseDate | $condition | $filename";
                    fwrite($handle, "\n".$book_info);
                    fclose($handle);
                    Header("Location:books.php");
                } else {
                    echo "파일이 업로드되지 않았습니다. 다시 시도해 주세요!";
                }
                ?>
                <div class="col-md-4">
                    <div class="h-100 p-5">
                        <h2><?php echo $book["name"]; ?></h2>
                        <p><?php echo $book["author"]. " | ". $book["releaseDate"]; ?></p>
                        <p><?php echo mb_substr($book["description"], 0, 90, 'utf-8')."..."; ?></p>
                        <p><?php echo $book["unitPrice"]; ?>원</p>
                        <p><a href="./book.php?id=<?php echo $id; ?>"><button class="btn btn-outline-secondary" type="button">상세 정보</button></a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    require "./footer.php";
    ?>
</body>
</html>