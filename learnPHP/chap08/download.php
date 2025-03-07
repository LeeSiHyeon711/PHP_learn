<html>
    <head>
        <title>파일 다운로드</title>
        <style type="text/css">
            .img-box{
                display: inline-block;
                text-align: center;
                margin: 0 15px;
            }
        </style>
    </head>
    <body>
        <?php
        $images = array("coffee.png", "hoyalang.jpg");
        foreach($images as $image){
            echo '<div class="imag-box">';
            echo '<img src="./images/'.$image.'"width="200" alt="'.pathinfo($image, PATHINFO_FILENAME).'">';
            echo '<p><a href="download_process.php?file=' . urlencode($image). '">다운로드하기</a></p>';
            echo '</div>';
        }
        ?>
    </body>
</html>