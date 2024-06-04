<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>モーダルウィンドウの例</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body x-data="app()">
    <div x-data="{ open: false }">
        <button @click="showModal = true">モーダルを開く1</button>
        <p>選択結果：<span x-text="result"></span></p>

        <div x-show="showModal" class="modal" @click.away="open = false">
            <?php include ("fetch_content.php"); ?>
        </div>
        <div x-show="showModalSub" class="modal">
            <?php include ("fetch_content_sub.php"); ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>