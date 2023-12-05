<?php
$servername = "localhost";  // 你的数据库服务器地址
$username = "test1_top";        // 你的数据库用户名
$password = "test1_top";        // 你的数据库密码
$dbname = "test1_top";               // 数据库名，与之前创建的数据库名相同

// 创建数据库连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
