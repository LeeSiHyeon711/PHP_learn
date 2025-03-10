<!DOCTYPE html>
<html class="h-100">
<head>
    <title>도서 정보</title>
    <link href="./resources/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">
        function addToCart(){
            if(confirm("도서를 장바구니에 추가하시겠습니까?")){
                document.forms["addForm"].submit();
            }else{
                document.forms["addForm"].reset();
            }
        }
    </script>
</head>
<body class="d-flex flex-column h-100">
    <?php
    // require "./model.php";
    require "./menu.php";
    require "./dbconn.php";

    try {
        $id = $_GET["id"];

        $sql = "SELECT * FROM book where b_id = '".$id."'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) <= 0)
            throw new Exception();
        else 
            $row = mysqli_fetch_array($result);
    ?>
    <br>
    <main>
        <div class="container py-5">
            <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5 fw-bold">도서 정보</h1>
                </div>
            </div>

            <div class="row align-item-md-stretch">
                <div class="col-md-5">
                    <img src="./resources/images/<?php echo $row['b_fileName']; ?>" style="width: 70%" >
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5">
                        <h2><?php echo $row["b_name"]; ?></h2>
                        <p><?php echo $row["b_description"]; ?></p>
                        <p><b>도서코드 : </b> 
                        <span class="badge text-bg-danger"> <?php echo $id; ?></span></p>
                        <p><b>저자</b> : <?php echo $row["b_author"]; ?></p>
                        <p><b>분류</b> : <?php echo $row["b_category"]; ?></p>
                        <p><b>재고</b> : <?php echo $row["b_unitsInStock"]; ?></p>
                        <p><?php echo $row["b_unitPrice"]; ?>원</p>
                        
                        <form name="addForm" action="./addCart.php?id=<?php echo $id; ?>" method="post">
                            <a href="#" class="btn btn-info" onclick="addToCart()">도서주문 &raquo;</a>
                            <a href="./cart.php" class="btn btn-warning">장바구니 &raquo;</a>
                            <a href="./books.php" class="btn btn-secondary">도서목록 &raquo;</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    mysqli_free_result($result);
    mysqli_close($conn);
    }
    catch(Exception $e){
        require "./exceptionNoBookId.php";
    }
    require "./footer.php";
    ?>
</body>
</html>