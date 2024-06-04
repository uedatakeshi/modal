<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>モーダルウィンドウの例</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.prod.js"></script>
</head>

<body>
    <button @click="openModal">モーダルを開く1</button>
    <p>選択結果：<span>{{ result }}</span></p>

    <?php include ("fetch_content.php"); ?>
    <?php include ("fetch_content_sub.php"); ?>

    <script src="script.js"></script>
</body>

</html>