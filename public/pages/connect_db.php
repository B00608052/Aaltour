<?php
// 資料庫連線設定
$servername = "43.254.17.39";
$username = "aaltourc_b00608052";
$password = "ntuhorti520";
$dbname = "aaltourc_member";

// 建立連線
$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 設定連線編碼
$conn->set_charset("utf8");
?>
