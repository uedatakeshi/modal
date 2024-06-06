<div class="modal" v-show="showModal">
    <div class="modal-content">
        <span class="close" @click="closeModal">&times;</span>
        <div>
            <div>
                <form>
                    <label for="name">名前:</label>
                    <input type="text" id="name" name="name">
                    <button type="button" @click="search">検索</button>
                </form>
                <!--<button id="openModalSubBtn">Subモーダルを開く</button>-->

            </div>
            <div v-html="searchResults">
                <!-- 検索結果の表がここに表示されます -->
            </div>
        </div>
    </div>
</div>