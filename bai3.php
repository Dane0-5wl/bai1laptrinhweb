<?php
require 'bai3assist.php'; 

$kq = "";
$checkA = "";
$checkB = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['so1'];
    $b = $_POST['so2'];
    $pheptinh = $_POST['pheptinh'];

    switch ($pheptinh) {
        case "cong": $kq = tong($a, $b); break;
        case "tru": $kq = hieu($a, $b); break;
        case "nhan": $kq = tich($a, $b); break;
        case "chia": $kq = thuong($a, $b); break;
        default: $kq = "Phép tính không hợp lệ";
    }

    $checkA = (laNguyenTo($a) ? "Nguyên tố" : "Không nguyên tố") . ", " . (laSoChan($a) ? "Số chẵn" : "Số lẻ");
    $checkB = (laNguyenTo($b) ? "Nguyên tố" : "Không nguyên tố") . ", " . (laSoChan($b) ? "Số chẵn" : "Số lẻ");
}
?>

<form method="post">
    <h3>Phép tính trên hai số</h3>
    Chọn phép tính:
    <input type="radio" name="pheptinh" value="cong" checked> Cộng
    <input type="radio" name="pheptinh" value="tru"> Trừ
    <input type="radio" name="pheptinh" value="nhan"> Nhân
    <input type="radio" name="pheptinh" value="chia"> Chia
    <br><br>
    Số thứ nhất: <input type="number" name="so1" required><br><br>
    Số thứ hai: <input type="number" name="so2" required><br><br>
    <input type="submit" value="Tính">
</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <h3>Kết quả:</h3>
    Phép tính: <?= ucfirst($pheptinh) ?><br>
    Số 1: <?= $a ?> (<?= $checkA ?>)<br>
    Số 2: <?= $b ?> (<?= $checkB ?>)<br>
    Kết quả: <b><?= $kq ?></b>
<?php endif; ?>

<br><br>
<a href="index.php">Quay lại trang chủ</a>
