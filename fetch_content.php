
<div>
    <form id="searchForm">
            <label for="name">名前:</label>
            <input type="text" id="name" name="name">
            <button type="button" onclick="search()">検索</button>
        </form>
    </div>
    <div id="searchResults">
        <!-- 検索結果の表がここに表示されます -->
    </div>
</div>



<?php
// 動的に生成するコンテンツ
echo "<h2>PHPからの動的コンテンツ</h2>";
echo "<p>ここにPHPで生成されたコンテンツが表示されます。</p>";
echo "<p>ここで普通にpostしてしまうとモーダルを外れてしまう・・・なんで</p>";
?>

