<?php
// ディレクトリ名を取得
$directory = $_POST['directory'];

// リンクを取得
$link = $_POST['link'];

// ディレクトリがすでに存在する場合は注意を表示して中止
if (file_exists($directory)) {
    header("Location: index.php?error=既に存在しているディレクトリ名です。");
}

// ランダムな文字列を生成してファイル名として使用
$filename = generateRandomString();

// ディレクトリが存在しない場合は作成
if (!mkdir($directory, 0755, true)) {
    die('Failed to create directory');
} else {
    echo 'Directory created successfully.';
}

// ファイルにリンクを書き込む
$filePath = $_SERVER['DOCUMENT_ROOT'] . '/' . $directory . '/index.html';

// ファイルのディレクトリが存在するか再度確認
if (!is_dir(dirname($filePath))) {
    if (!mkdir(dirname($filePath), 0755, true)) {
        die('Failed to create directory for file');
    } else {
        echo 'Directory for file created successfully.';
    }
}

// ファイルにリンクを書き込む
$content = '<meta http-equiv="refresh" content="1;URL=' . htmlspecialchars($link) . '">';
if (file_put_contents($filePath, $content, LOCK_EX) === false) {
    die('Error writing to file');
} else {
    echo 'Link written to file successfully.';
}

// 生成された圧縮済みリンクを表示
$compressedLink = 'ni7.xyz/' . urlencode($directory) . '/';

// index.htmlにリダイレクト
header("Location: index.php?link=$compressedLink");
exit();

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>
