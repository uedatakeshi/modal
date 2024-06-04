<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>モーダルウィンドウの例</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="https://unpkg.com/vue@3.4.21/dist/vue.global.prod.js"></script>
</head>

<body>
    <div id="app">
        <button @click="openModal">モーダルを開く1</button>
        <p>選択結果：<span>{{ result }}</span></p>
        <div v-show="mi">mi</div>

        <!-- Include your PHP files here -->
        <?php include ("fetch_content.php"); ?>
        <?php include ("fetch_content_sub.php"); ?>
    </div>

    <script>
        const { createApp, ref } = Vue
        createApp({
            setup() {
                const modalVisible = ref(false);
                const mi = ref(false);
                const modalSubVisible = ref(false);
                const result = ref('');
                const name = ref('');
                const company_id = ref('');
                const tel = ref('');

                const openModal = () => {
                    modalVisible.value = true;
                    mi.value = true;
                    console.log(mi.value);
                };

                const closeModal = () => {
                    modalVisible.value = false;
                };

                const closeModalSub = () => {
                    modalSubVisible.value = false;
                };

                const search = async () => {
                    try {
                        const response = await fetch("result.php");
                        const data = await response.text();
                        result.value = data;
                    } catch (error) {
                        console.error("Error fetching the content:", error);
                    }
                };

                const selectRow = (id) => {
                    company_id.value = id;
                    modalSubVisible.value = true;
                };

                const searchSub = async () => {
                    try {
                        const response = await fetch("result_sub.php");
                        const data = await response.text();
                        result.value = data;
                    } catch (error) {
                        console.error("Error fetching the content:", error);
                    }
                };

                const selectSubRow = (id) => {
                    modalSubVisible.value = false;
                    modalVisible.value = false;
                    result.value = id;
                };

                return {
                    modalVisible,
                    modalSubVisible,
                    result,
                    name,
                    company_id,
                    tel,
                    openModal,
                    closeModal,
                    closeModalSub,
                    search,
                    selectRow,
                    searchSub,
                    selectSubRow
                };
            }
        }).mount('#app');

    </script>
</body>

</html>