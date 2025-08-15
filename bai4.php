<?php require_once __DIR__ . '/mang.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 4 - Xử lý mảng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
            width: 500px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        input {
            padding: 10px;
            margin: 5px;
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        a {
            display: block;
            margin-top: 15px;
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .result {
            text-align: left;
            margin-top: 20px;
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Array Functions</h1>
    <form method="post">
        <input type="text" name="array" placeholder="VD: 5,2,9,1,7,3" required><br>
        <input type="text" name="checkNumber" placeholder="Số cần kiểm tra">
        <br>
        <button type="submit">Xử lý</button>
    </form>
    <a href="index.php">Quay lại trang chủ</a>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $arrayInput = $_POST["array"];
        $checkNumber = $_POST["checkNumber"];

        $arr = array_map('intval', explode(",", $arrayInput));

        echo "<div class='result'>";
        echo "<strong>Mảng ban đầu:</strong> " . implode(", ", $arr) . "<br>";
        echo "Giá trị lớn nhất: " . findMax($arr) . "<br>";
        echo "Giá trị nhỏ nhất: " . findMin($arr) . "<br>";
        echo "Tổng các phần tử: " . sumArray($arr) . "<br>";

        if ($checkNumber !== "") {
            echo "Số $checkNumber " . (isInArray($arr, intval($checkNumber)) ? "có" : "không") . " trong mảng.<br>";
        }

        echo "Mảng sau khi sắp xếp tăng dần: " . implode(", ", sortArrayAsc($arr));
        echo "</div>";
    }
    ?>
</div>
</body>
</html>
