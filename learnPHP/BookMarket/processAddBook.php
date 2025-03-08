<?php

function filterBookId($field){
    $field = filter_var(trim($field));

    if (filter_var($field, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^ISBN[0-9]{4,12}$/")))){
        return $field;
    }else {
        return FALSE;
    }
}

function filterName($field){
    $field = filter_var(trim($field));

    if (strlen($field) >= 4 && strlen($field) <= 50){
        return $field;
    }else {
        return FALSE;
    }
}

function filterPrice($field){
    if (filter_var(trim($field), FILTER_VALIDATE_INT) || filter_var(trim($field), FILTER_VALIDATE_FLOAT)){
        return $field;
    }else {
        return FALSE;
    }
}

function filterPriceFloat($field){
    $field = filter_var(trim($field));

    if (filter_var($field, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" =>"/^[\d]*\.?[\d]{0,2}$/")))){
        return $field;
    }else {
        return FALSE;
    }
}

function filterStock($field){
    if (filter_var(trim($field), FILTER_VALIDATE_INT)){
        return $field;
    }else {
        return FALSE;
    }
}

function filterDescription($field){
    $field = filter_var(trim($field));
    if (!empty($field) && strlen($field) >= 80){
        return $field;
    }else {
        return FALSE;
    }
}

$bookIdErr = $nameErr = $unitPriceErr = $descriptioonErr = $unitsInStockErr = $bookImageErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

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

    if(empty($bookId)){
        $bookIdErr = "도서코드를 입력하세요";
    }else {
        if(filterBookId($bookId) == FALSE){
            $bookIdErr = "ISBN과 숫자를 조합하여 5~12자까지 입력하세요";
        }
    }

    if (empty($name)){
        $nameErr = "도서명을 입력하세요";
    }else {
        if (filterName($name) == FALSE){
            $nameErr = "최소 4자에서 최대 50자까지 입력하세요";
        }
    }

    if (empty($unitPrice)){
        $unitPricceErr = "가격을 입력하세요";
    }else {
        if(filterPrice($unitPrice) == FALSE){
            $unitPriceErr = "숫자만 입력하세요";
        }else if (filterPrice($unitPrice) < 0)
            $unitPriceErr = "양수를 입력하세요";
            else{
                if(filterPriceFloat($unitPrice) == FALSE){
                    $unitPriceErr = "소수점 둘째 자리까지만 입력하세요";
                }
            }
    }

    if(empty($unitsInStock)){
        $unitsInStockErr = "재고 수를 입력하세요";
    }else {
        if(filterStock($unitsInStock) == FALSE){
            $unitsInStockErr = "숫자만 입력하세요";
        }
    }

    if (empty($description)){
        $descriptionErr = "상세설명을 입력하세요";
    }else {
        if (filterDescription($description) == FALSE){
            $descriptionErr = "최소 80자 이상 입력하세요";
        }
    }

    if (empty($filename)){
        $bookImageErr = "업로드 파일을 입력하세요";
    }

    if ($bookIdErr == "" && $nameErr == "" && $unitPriceErr == "" && $descriptionErr == "" && $unitsInStockErr == "" && $bookImageErr == ""){
        $target_path = "./resources/images/";
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $filename = $bookId.".".$ext;;

        if (move_uploaded_file($_FILES["bookImage"]["tmp_name"], $target_path . $filename)){
            $handle = fopen("domain.dat", "a");
            $book_info = "$bookId | $name | $unitPrice | $author | $description | $category | $unitsInStock | $releaseDate | $condition | $filename";
            fwrite($handle, "\n".$book_info);
            fclose($handle);
            Header("Location:books.php"); 
        }else {
            echo "파일이 업로드되지 않았습니다. 다시 시도해 주세요!";
        }
    }
    require "./addBook_Error.php";
}
?>
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