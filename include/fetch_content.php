<div id="modal" class="modal">
    <div class="modal-content">
        <span id="closeModalBtn" class="close">&times;</span>
        <div>
            <div>
                <form>
                    <label for="name">名前:</label>
                    <input type="text" id="name" name="name">
                    <button type="button" onclick="search()">検索</button>
                </form>
                <!--<button id="openModalSubBtn">Subモーダルを開く</button>-->

            </div>
            <div id="searchResults">
                <!-- 検索結果の表がここに表示されます -->
            </div>
        </div>
    </div>
</div>