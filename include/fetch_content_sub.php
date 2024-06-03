<div id="modalSub" class="modal">
    <div class="modal-content">
        <span id="closeModalSubBtn" class="close">&times;</span>
        <div>
            <div>
                <form>
                    <input type="hidden" id="company_id" name="company_id" value="">
                    <label for="name">TEL:</label>
                    <input type=" text" id="tel" name="tel">
                    <button type="button" onclick="searchSub()">検索</button>
                </form>
            </div>
            <div id="searchSubResults">
                <!-- 検索結果の表がここに表示されます -->
            </div>
        </div>
    </div>
</div>