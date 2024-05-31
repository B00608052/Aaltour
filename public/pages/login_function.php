<?php
// 引入資料庫連接文件
include 'connect_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 獲取前端傳來的表單數據
    $email = $_POST['email'];
    $password = $_POST['password'];

    // TODO: 使用 prepared statement 防止 SQL 注入
    $query = "SELECT * FROM members WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // 檢查結果是否存在
    if ($result->num_rows > 0) {
        // 取得資料
        $row = $result->fetch_assoc();

        // 驗證密碼
        if (password_verify($password, $row['password'])) {
            // 登入成功
            $response = [
                'success' => true,
                'message' => '登入成功！'
            ];
        } else {
            // 密碼錯誤
            $response = [
                'success' => false,
                'message' => '密碼錯誤。'
            ];
        }
    } else {
        // 未找到匹配的使用者
        $response = [
            'success' => false,
            'message' => '找不到匹配的使用者。'
        ];
    }

    // 關閉資料庫連接
    $stmt->close();
    $conn->close();

    // 將響應轉換為 JSON 格式
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // 如果不是 POST 請求，返回錯誤的 JSON 響應
    $response = [
        'success' => false,
        'message' => 'Invalid request method.'
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
