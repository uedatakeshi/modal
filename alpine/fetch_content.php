<div class="modal-content">
    <span @click="showModal = false" class="close">&times;</span>
    <div>
        <div>
            <form>
                <label for="name">名前:</label>
                <input type="text" id="name" name="name" x-model="name">
                <button type="button" @click="search()">検索</button>
            </form>
        </div>
        <div x-html="searchResults"></div>
    </div>
</div>