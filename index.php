<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Chủ</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        h1 {
            font-size: 40px;
            margin-bottom: 30px;
            color: #333;
        }
        .menu {
            display: flex;
            gap: 20px;
        }
        a {
            padding: 15px 25px;
            background-color: #007BFF;
            color: white;
            font-size: 18px;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Giới thiệu Bài tập</h1>
    <div class="menu">
        <a href="bai1.php">Bài 1</a>
        <a href="bai2.php">Bài 2</a>
        <a href="bai3.php">Bài 3</a>
        <a href="bai4.php">Bài 4</a>
    </div>
</body>
</html>
