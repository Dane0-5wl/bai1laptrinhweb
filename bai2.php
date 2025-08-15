<?php

$total_books = 100;


$books_per_page = 10;

$total_pages = ceil($total_books / $books_per_page);

$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page < 1) $current_page = 1;
if ($current_page > $total_pages) $current_page = $total_pages;

$start = ($current_page - 1) * $books_per_page + 1;

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";
for ($i = $start; $i < $start + $books_per_page && $i <= $total_books; $i++) {
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>Tensach$i</td>";
    echo "<td>Noidung$i</td>";
    echo "</tr>";
}
echo "</table>";

echo "<div style='margin-top:10px;'>";
if ($current_page > 1) {
    echo "<a href='?page=" . ($current_page - 1) . "'>Prev</a> ";
}
for ($p = 1; $p <= $total_pages; $p++) {
    if ($p == $current_page) {
        echo "<strong>$p</strong> ";
    } else {
        echo "<a href='?page=$p'>$p</a> ";
    }
}
if ($current_page < $total_pages) {
    echo "<a href='?page=" . ($current_page + 1) . "'>Next</a>";
}
echo "</div>";
?>
<a href="index.php">Quay lại trang chủ</a>