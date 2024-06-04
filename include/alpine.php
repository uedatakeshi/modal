<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>モーダルウィンドウの例</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body x-data="app()">
    <button @click="showModal = true">モーダルを開く1</button>
    <p>選択結果：<span x-text="result"></span></p>

    <div x-show="showModal" class="modal">
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
    </div>

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

    <script>
        function app() {
            return {
                showModal: false,
                showModalSub: false,
                result: "",
                companyId: "",
                name: "",
                tel: "",
                searchResults: "",
                searchSubResults: "",

                async search() {
                    try {
                        const response = await fetch(`result.php?name=${this.name}`);
                        this.searchResults = await response.text();
                    } catch (error) {
                        console.error("Error fetching the content:", error);
                    }
                },

                selectRow(id) {
                    this.companyId = id;
                    this.showModalSub = true;
                },

                async searchSub() {
                    try {
                        const response = await fetch(`result_sub.php?tel=${this.tel}&company_id=${this.companyId}`);
                        this.searchSubResults = await response.text();
                    } catch (error) {
                        console.error("Error fetching the content:", error);
                    }
                },

                selectSubRow(id) {
                    this.showModalSub = false;
                    this.showModal = false;
                    this.result = id;
                },
            };
        }
    </script>
</body>

</html>