<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>モーダルウィンドウの例</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <button id="openModalBtn">モーダルを開く1</button>
    <p>選択結果：<span id="result"></span></p>

    <?php include ("fetch_content.php"); ?>
    <?php include ("fetch_content_sub.php"); ?>

    <script src="script.js"></script>
</body>

</html>