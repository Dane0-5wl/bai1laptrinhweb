<?php
function renderPage($title, $content) {
    echo '
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <title>' . $title . '</title>
        <style>
            body {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }
            .content {
                font-size: 48px;
                font-weight: bold;
                color: #333;
                margin-bottom: 20px;
                text-align: center;
            }
            a {
                font-size: 20px;
                text-decoration: none;
                color: #007BFF;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <div class="content">' . $content . '</div>
        <a href="index.php">Quay lại trang chủ</a>
    </body>
    </html>
    ';
}
?>
