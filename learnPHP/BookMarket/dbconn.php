<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = mysqli_connect($host, $user, $pass, "BookMarketDB");

if(!$conn){
    die('데이터베이스 연결 실패 : '.mysqli_connect_error());
}
?>