<?php
// index.php
if (isset($_GET['name'])) {
    $name = $_GET['name'];
} else {
    $name = "guest";
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>XSS Lab</title>
</head>
<body>
    <h2>Chào mừng bạn đến với XSS Lab</h2>
    <form method="get" action="">
        Nhập tên của bạn: <input type="text" name="name">
        <button type="submit">Gửi</button>
    </form>

    <p>Kết quả: <?php echo $name; ?></p>
</body>
</html>
