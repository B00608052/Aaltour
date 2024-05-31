<?php
// 引入資料庫連接文件
include 'connect_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 獲取前端傳來的表單數據
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

    // 在這裡可以進行進一步的驗證和處理

    // 使用 password_hash 進行密碼哈希處理
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // 使用 MySQLi 插入資料到資料庫
    $stmt = $conn->prepare("INSERT INTO members (email, username, password, firstName, lastName) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $email, $username, $hashedPassword, $firstName, $lastName);

    // 執行預備語句
    if ($stmt->execute()) {
        // 插入成功

        // 获取刚插入的用户 ID
        $user_id = $stmt->insert_id;

        // 存储用户 ID 和用户名到 $_SESSION
        session_start();
        $_SESSION['user_id'] = $user_id;
        $_SESSION['username'] = $username;

        $response = [
            'success' => true,
            'message' => '註冊成功！'
        ];
    } else {
        // 插入失敗
        $response = [
            'success' => false,
            'message' => '註冊失敗！'
        ];
    }

    // 關閉資料庫連接
    $stmt->close();
    $conn->close();

    // 將響應轉換為 JSON 格式
    header('Content-Type: application/json');
    echo json_encode($response);

}
?>
