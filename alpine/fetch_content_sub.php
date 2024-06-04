<div x-show="showModalSub" class="modal">
    <div class="modal-content">
        <span @click="showModalSub = false" class="close">&times;</span>
        <div>
            <div>
                <form>
                    <input type="hidden" id="company_id" name="company_id" x-model="companyId">
                    <label for="name">TEL:</label>
                    <input type="text" id="tel" name="tel" x-model="tel">
                    <button type="button" @click="searchSub()">検索</button>
                </form>
            </div>
            <div x-html="searchSubResults"></div>
        </div>
    </div>
</div>